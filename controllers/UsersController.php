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

    $id = 11;
    $nombre = $_POST['Reg_name'];
    $email = $_POST['Reg_email'];
    $password = $_POST['Reg_password'];
    $tipo = 'user';
    $id_cita = 11;


    try {
        $query = "INSERT INTO usuarios (id_user, nombre_user, email_user, contraseña_user, tipo_user, id_cita) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $connection->prepare($query);
        $statement->bindParam(1, $id);
        $statement->bindParam(2, $nombre);
        $statement->bindParam(3, $email);
        $statement->bindParam(4, $password);
        $statement->bindParam(5, $tipo);
        $statement->bindParam(6, $id_cita);

        $query_execute = $statement->execute();

        if ($query_execute) {
            $_SESSION['message'] = "Usuario registrado exitosamente";
            header('Location: ../view/index.php');
            exit(0);
        } else {
            $_SESSION['message'] = "No se ha podido registrar al usuario";
            header('Location: ../view/registrate.php');
            exit(0);
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
            $user = new Usuario($row["id_user"], $row["nombre_user"], $row["email_user"], $row["contraseña_user"], $row["tipo_user"], $row["id_cita"]);
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
