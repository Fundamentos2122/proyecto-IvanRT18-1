<?php
include("../models/modelo_conexion.php");
include("../models/cita.php");
// include("../controllers/UsersController.php");

try {
    $connection = conexionBD::conexionPDO();
}
catch(PDOException $e) {
    error_log("Error de conexión - " . $e, 0);

    exit();
}

if (isset($_POST['agendar_cita-btn'])) {
    // $usuario = new Usuario();

    $id_cita = 1;
    $dia_cita = $_POST['cita_dia'];
    $hora_cita = $_POST['cita_hora'];
    $user_cita = 10;

    


    try {
        $query = "INSERT INTO citas (dia_cita, hora_cita) VALUES (?, ?)";
        $statement = $connection->prepare($query);
        // $statement->bindParam(1, $id_cita);
        $statement->bindParam(1, $dia_cita);
        $statement->bindParam(2, $hora_cita);
        // $statement->bindParam(4, $user_cita);
        $query_execute = $statement->execute();

        if ($query_execute) {
            $_SESSION['message'] = "Cita agregada";
            header('Location: ../view/agenda-cita-username.php');
            exit(0);
        } else {
            $_SESSION['message'] = "No se ha agregado la cita";
            header('Location: ../view/agenda-cita-username.php');
            exit(0);
        }
    } catch (PDOException $e) {
        echo "El error es: " . $e->getMessage();
    }
}
