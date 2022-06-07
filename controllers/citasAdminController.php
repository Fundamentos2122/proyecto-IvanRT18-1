<?php
$header = '../view/layouts/header.php';
$footer = '../view/layouts/footer.php';

include("../models/modelo_conexion.php");
include("../models/cita.php");
include("../models/usuario.php");

try {
    $connection = conexionBD::conexionPDO();
} catch (PDOException $e) {
    error_log("Error de conexión - " . $e, 0);
    exit();
}


if ($_SERVER["REQUEST_METHOD"] === "GET") {
    var_dump($_GET);

    if (array_key_exists("id", $_GET)) {
        //Obtener un solo registro de las citas
        echo 'aqui estoy';
        try {
            var_dump($_GET);
            $id_cita = $_GET["id="];

            $query = $connection->prepare('SELECT * FROM citas WHERE id_user = :id'); //Se le cambia el nombre ya sea photocard, cds, etc
            $query->bindParam(':id_user', $id_cita, PDO::PARAM_INT);
            $query->execute();

            $cita;


            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $cita = new Cita($row['id_cita'], $row['dia_cita'], $row['hora_cita'], $row['id_user']);
            }

            // var_dump($cita);
            json_encode($cita->getArray());
            header('Location: http://localhost/paginawebdb/view/citasAdmin.php');
        } catch (PDOException $e) {
            echo $e;
        }
    } else {
        //Obtener todos los registros
        try {
            $query = $connection->prepare('SELECT * FROM citas');
            $query->execute();

            $citas = array(); //Genera arreglo vacio


            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

                $cita = new Cita($row['id'], $row['titulo'], $row['feature1'], $row['feature2'], $row['feature3'], $row['price'], $row['image'], $row['type'], $row['active']);

                $citas[] = $cita->getArray(); //Push
            }
            // var_dump($tweets);
            echo json_encode($citas);
        } catch (PDOException $e) {
            echo $e;
        }
    }
} else if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // if($_POST["_method"] === "POST"){
    //     //Registro nuevo
    //     postProduct($_POST["titulo"],$_POST["feature1"],$_POST["feature2"],$_POST["feature3"],$_POST["price"],$photo,$_POST["_type"],true);
    // }
    /*else*/
    // if ($_POST["_method"] === "PUT") {
    //     putUser($_POST["id"], $_POST["titulo"], $_POST["feature1"], $_POST["feature2"], $_POST["feature3"], $_POST["price"], true);
    // } else if (array_key_exists("id", $_POST)) {
    //     if ($_POST["_method"] === "DELETE") { //AGREGO ESTO Y LA FUNCION, SOLO POR FORMULARIO
    //         deleteProduct($_POST["id"], true);
    //     }
    // }
    // else{//Si se envia por ajax
    //     //Utilizar file_get_contents

    //     $data = json_decode(file_get_contents('php://input'));
    //     if($data->_method === "POST"){
    //         postProduct($data->titulo,$data->feature1,$data->feature2,$data->feature3,$data->price,$data->image,$data->href,false);
    //     }
    //     else if($data->_method === "PUT"){
    //         // var_dump($data);
    //         putProduct($data->id,$data->titulo,$data->feature1,$data->feature2,$data->feature3,$data->price,$data->image,$data->href,false);
    //     }
    // }
    // var_dump($_POST);
    // var_dump($data);
    exit();
}
