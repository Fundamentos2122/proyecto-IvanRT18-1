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
    session_start();

    $id_user = $_SESSION["id"];
    $dia_cita = $_POST['cita_dia'];
    $hora_cita = $_POST['cita_hora'];

    
    // var_dump($id_user);
    // var_dump($dia_cita);
    // var_dump($hora_cita);

    try {
        $query = $connection->prepare("INSERT INTO citas VALUES (NULL, :dia_cita, :hora_cita, :id_user)");
        $query->bindParam(':dia_cita', $dia_cita, PDO::PARAM_STR);
        $query->bindParam(':hora_cita', $hora_cita, PDO::PARAM_STR);
        $query->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $query->execute();

       

        if ($query->rowCount() === 0) {
            echo "404: Error en la inserción";
        } else {
            header('Location: http://localhost/paginawebdb/view/index.php');
        }
    } catch (PDOException $e) {
        echo "El error es: " . $e->getMessage();
    }
}
