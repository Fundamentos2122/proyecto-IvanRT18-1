<?php
include("../models/modelo_conexion.php");

try {
    $connection = conexionBD::conexionPDO();
}
catch(PDOException $e) {
    error_log("Error de conexión - " . $e, 0);

    exit();
}

if (isset($_POST['send_Contact'])) {

    $nombre = $_POST['name_contact'];
    $telefono = $_POST['phone_contact'];
    $correo = $_POST['email_contact'];
    $comentario = $_POST['comentario'];


    try {
        $query = "INSERT INTO contactos (nombre_contacto, telefono_contacto, correo_contacto, comentario) VALUES (?, ?, ?, ?)";
        $statement = $connection->prepare($query);
        $statement->bindParam(1, $nombre);
        $statement->bindParam(2, $telefono);
        $statement->bindParam(3, $correo);
        $statement->bindParam(4, $comentario);

        
        $query_execute = $statement->execute();

        if ($query_execute) {
            header('Location: ../view/index.php');
            exit(0);
        } else {
            header('Location: ../view/contact-us.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo "El error es: " . $e->getMessage();
    }
}
