<?php
include("../models/modelo_conexion.php");
include("../models/cita.php");
include("../models/usuario.php");

try {
    $connection = conexionBD::conexionPDO();
}
catch(PDOException $e) {
    error_log("Error de conexión - " . $e, 0);

    exit();
}

//Registro
if (isset($_POST['btn-register-submit'])) {
    // $nuevaCita = new Cita();

    $nombre = trim($_POST['Reg_name']);
    $email = trim($_POST['Reg_email']);
    $password = trim($_POST['Reg_password']);
    $password = password_hash($password,PASSWORD_DEFAULT);//Encriptar contraseña
    $tipo = 'user';
    // $photo = "";
    
    // if (sizeof($_FILES) > 0) {
    //     $tmp_name = $_FILES["photo"]["tmp_name"];

    //     $photo = file_get_contents($tmp_name);
    // }

    try {
        $query = $connection->prepare('INSERT INTO usuarios VALUES (NULL, :nombre_user, :email_user, :password_user, :tipo_user, NULL)');
        $query->bindParam(':nombre_user', $nombre, PDO::PARAM_STR);
        $query->bindParam(':email_user', $email, PDO::PARAM_STR);
        $query->bindParam(':password_user', $password, PDO::PARAM_STR);
        $query->bindParam(':tipo_user', $tipo, PDO::PARAM_STR);
        // $query->bindParam(':photo_user', $photo, PDO::PARAM_STR);

        $query->execute();

        if($query->rowCount() === 0) {
            echo "404: Error en la inserción";
        }
        else {
                header('Location: http://localhost/paginawebdb/view/index.php');
        }
    } catch (PDOException $e) {
        echo "El error es: " . $e->getMessage();
    }
}

//Login
if (isset($_POST['login_btn'])) {

    $email_user = trim($_POST['Login-email']);
    $password = trim($_POST['Login_contraseña']);


    try {
        $query = $connection->prepare('SELECT * FROM usuarios WHERE email_user = :email_user');
        $query->bindParam(':email_user', $email_user, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() === 0) {
            echo "Usuario no encontrado";
            // header('Location: http://localhost/twitter/');
            exit();
        }

        $user;

        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $user = new Usuario($row["id_user"], $row["nombre_user"], $row["email_user"], $row["contraseña_user"], $row["tipo_user"], $row["photo_user"]);
        }


        if (($password != $user->getPassword())) {
            echo "Contraseña inválida";
            exit();
        }
        else{
            session_start();

            $_SESSION["id"] = $user->getId();
            $_SESSION["nombre"] = $user->getNombre();
            $_SESSION["tipo"] = $user->getTipo();

            header('Location: http://localhost/pruebapagina/view/index.php');
            exit();
        }

    } catch (PDOException $e) {
        echo "El error es: " . $e->getMessage();
    }
}

//Cerrar Sesión
if(isset($_POST['Logout_btn'])){
    session_destroy();
    var_dump(session_status());

    echo 'Sesion cerrada';

    header('Location: http://localhost/pruebapagina/view/index.php');
    exit();
}
