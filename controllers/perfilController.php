<?php

include_once("../models/modelo_conexion.php");
include_once("../models/usuario.php");

try {
    $connection = conexionBD::conexionPDO();
} catch (PDOException $e) {
    error_log("Error de conexión - " . $e, 0);

    exit();
}

// session_start();


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (array_key_exists("id", $_GET)) {
        //Obtener un solo registro
        try {
            // global $connection;
            $id = $_GET["id"];
            // echo $id;
            $query = $connection->prepare('SELECT * FROM usuarios WHERE id_user = :id'); //Se le cambia el nombre ya sea photocard, cds, etc
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();

            $user;


            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $user = new Usuario($row['id_user'], $row['nombre_user'], $row['email_user'], $row['password_user'], $row['tipo_user'], $row['photo_user']);
            }
            // var_dump($user);
            // var_dump($user->getArray());
            echo json_encode($user->getArray());
        } catch (PDOException $e) {
            echo $e;
        }
    }
} else if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // if ($_POST["_method"] === "POST") {
    //     session_start();
    //     $name = $_SESSION["username"];
    //     $product_id = $_GET["id"];
    //     putInfo($_POST["text"], $name, $product_id);
    /*} else*/
    if ($_POST["_method"] === "PUT") {
        //  var_dump($_POST);
        putUser($_POST['id'], $_POST['perfil_nombre'], $_POST['perfil_correo'], $_POST['perfil_password']);
        //Pasar la foto tambien como parametro quizas
    }

    exit();
}

function putUser($id_user, $nombre_user, $email_user, $password)
{
    global $connection;

    try {
        $password_user = trim($password);
        $password_user = password_hash($password_user,PASSWORD_DEFAULT);//Encriptar
        // echo $id_user;
        // echo $nombre_user;
        // echo $email_user;
        // echo $password_user;
        $query = $connection->prepare('UPDATE usuarios SET nombre_user=:nombre_user, email_user=:email_user, password_user=:password_user WHERE id_user = :id_user');
        $query->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $query->bindParam(':nombre_user', $nombre_user, PDO::PARAM_STR);
        $query->bindParam(':email_user', $email_user, PDO::PARAM_STR);
        $query->bindParam(':password_user', $password_user, PDO::PARAM_STR);
        $query->execute();

        // if ($query->rowCount() === 0) {
        //     echo "404: Error en la inserción";
        // } else {
            header('Location: http://localhost/paginawebdb/view/perfil.php');
        // }
        // $query = $connection->prepare('UPDATE usuarios SET nombre_user=:nombre_user, email_user=:email_user, tipo_user=:tipo_user WHERE id_user = :id_user');
        // $query->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        // $query->bindParam(':nombre_user', $nombre_user, PDO::PARAM_STR);
        // $query->bindParam(':email_user', $email_user, PDO::PARAM_STR);
        // $query->bindParam(':tipo_user', $tipo_user, PDO::PARAM_STR);

        // $query->execute();


        // if ($query->rowCount() === 0) {
        //     echo "404: Error en la inserción";
        // } else {
        // header('Location: http://localhost/paginaweb/view/administrador.php');
        // }
        // }
    } catch (PDOException $e) {
        echo $e;
    }
}

// //Actualiza citas o elimina usuarios
// if ($_SERVER["REQUEST_METHOD"] === "POST") {

//     if (array_key_exists("date", $_POST)) {
//         if ($_POST["_method"] === "POST") {
//             session_start();
//             $name = $_SESSION["username"];
//             $product_id = $_GET["id"];
//             putInfo($_POST["text"], $name, $product_id);
//         } else if ($_POST["_method"] === "PUT") {
//             if ($_POST["id"]) {
//             } else {
//                 echo $_POST['name'];
//                 putInfo($_POST["id"], $_POST["name"], $_POST["email"]);
//             }
//         }
//     }
//     if (array_key_exists("id", $_POST)) {
//         if ($_POST["_method"] === "DELETE") {
//             deleteUser($_POST["id"]);
//         }
//     }
//     if (array_key_exists("id", $_POST) && $tipo_user === 'admin') {
//         //  var_dump($_POST);
//         putCita($_POST["id_cita"], $_POST["date"], $_POST["time"], $_POST["id"], $_POST["name"], $_POST["email"], $_POST["tipo"]);
//     }
//     exit();
// }


// function putCita($id_cita, $dia_cita, $hora_cita, $id_user, $nombre_user, $email_user, $tipo_user)
// {
//     global $connection;

//     try {
//         $query = $connection->prepare('UPDATE citas SET dia_cita = :dia_cita, hora_cita = :hora_cita WHERE id_cita = :id_cita');
//         $query->bindParam(':id_cita', $id_cita, PDO::PARAM_INT);
//         $query->bindParam(':dia_cita', $dia_cita, PDO::PARAM_STR);
//         $query->bindParam(':hora_cita', $hora_cita, PDO::PARAM_STR);
//         $query->execute();

//         // if ($query->execute()) {
//         //     echo ("404: Error en la actualización");
//         // } else {
//         $query = $connection->prepare('UPDATE usuarios SET nombre_user=:nombre_user, email_user=:email_user, tipo_user=:tipo_user WHERE id_user = :id_user');
//         $query->bindParam(':id_user', $id_user, PDO::PARAM_INT);
//         $query->bindParam(':nombre_user', $nombre_user, PDO::PARAM_STR);
//         $query->bindParam(':email_user', $email_user, PDO::PARAM_STR);
//         $query->bindParam(':tipo_user', $tipo_user, PDO::PARAM_STR);

//         $query->execute();


//         // if ($query->rowCount() === 0) {
//         //     echo "404: Error en la inserción";
//         // } else {
//         header('Location: http://localhost/paginaweb/view/administrador.php');
//         // }
//         // }
//     } catch (PDOException $e) {
//         echo $e;
//     }
// }

// function putInfo($id_user, $nombre_user, $email_user)
// {
//     global $connection;
//     echo $id_user;
//     echo $nombre_user;
//     echo $email_user;


//     try {
//         $query = $connection->prepare('UPDATE usuarios SET nombre_user=:nombre_user, email_user=:email_user WHERE id_user = :id_user');
//         $query->bindParam(':id_user', $id_user, PDO::PARAM_INT);
//         $query->bindParam(':nombre_user', $nombre_user, PDO::PARAM_STR);
//         $query->bindParam(':email_user', $email_user, PDO::PARAM_STR);
//         $query->execute();

//         $_SESSION["id"] = $id_user;
//         $_SESSION["name"] = $nombre_user;
//         $_SESSION["email"] = $email_user;

//         if ($query->rowCount() === 0) {
//             echo "404: Error en la inserción";
//         } else {
//             header('Location: http://localhost/paginaweb/view/administrador.php');
//         }
//     } catch (PDOException $e) {
//         echo "El error es: " . $e->getMessage();
//     }
// }


// //Eliminar usuario
// function deleteUser($id)
// {
//     global $connection;

//     try {
//         $query = $connection->prepare('DELETE FROM usuarios WHERE id_user = :id');
//         $query->bindParam(':id', $id, PDO::PARAM_INT);
//         $query->execute();

//         if ($query->rowCount() === 0) {
//             echo ("404: Error en la eliminación");
//         } else {
//             header('Location: http://localhost/paginaweb/view/administrador.php');
//         }
//     } catch (PDOException $e) {
//         echo $e;
//     }
// }
