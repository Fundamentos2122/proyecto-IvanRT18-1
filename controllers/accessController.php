<?php 

// var_dump($_POST);

include("../models/modelo_conexion.php");
include("../models/usuario.php");
include("../controllers/UsersController.php");

try {
    $connection = conexionBD::conexionPDO();
}
catch(PDOException $e) {
    error_log("Error de conexión - " . $e, 0);

    exit();
}

if(isset($_POST['login_btn'])){
    $email = $_POST['Login-email'];
    $password =  $_POST['Login-contraseña'];

    $auth = new LoginController;
}
?>