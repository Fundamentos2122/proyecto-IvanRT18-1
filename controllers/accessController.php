<?php

include("../models/modelo_conexion.php");
include("../models/usuario.php");

try {
    $connection = conexionBD::conexionPDO();
} catch(PDOException $e) {
    error_log("Error de conexión - " . $e, 0);
    exit();
}

if($_SERVER["REQUEST_METHOD"] === "POST") {

     if($_POST["_method"] === "POST") { //Iniciar sesión

        $email = trim($_POST["Login_email"]);
        $password = trim($_POST["Login_contraseña"]);

        try {
            $query = $connection->prepare('SELECT * FROM usuarios WHERE email_user = :email');
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->execute();

            if ($query->rowCount() === 0) {
                header('Location: http://localhost/paginawebdb/view/error.php');

                exit();
            }

            $user;

            while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $user = new Usuario($row["id_user"], $row["nombre_user"], $row["email_user"], $row["password_user"], $row["tipo_user"], $row['photo_user']);
            }

            if (!password_verify($password, $user->getPassword())) {
                header('Location: http://localhost/paginawebdb/view/error.php');
                exit();
            }

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $_SESSION["id"] = $user->getId();
            $_SESSION["name"] = $user->getNombre();
            $_SESSION["email"] = $user->getEmail();
            $_SESSION["type"] = $user->getTipo();
            $_SESSION["password"] = $user->getPassword();
            $_SESSION["photo"] = $user->getPassword();
            $usuarioSesion = $user->getArray();
            $_SESSION['usuario'] = $usuarioSesion;
            echo "<script>
                window.localStorage.clear();
                </script>";

            header('Location: http://localhost/paginawebdb/view/index.php');
            exit();
        }
        catch(PDOException $e) {
            echo $e;
        }

    } else if($_POST["_method"] === "DELETE") {
        session_start();
        echo "<script>
        window.localStorage.clear();
        </script>";
        session_destroy();

        header('Location: http://localhost/paginawebdb/view/index.php');

        exit();
    }
}

?>