<?php

include("../models/modelo_conexion.php");
include("../models/cita.php");

try {
    $connection = conexionBD::conexionPDO();
}
catch(PDOException $e) {
    error_log("Error de conexión - " . $e, 0);

    exit();
}

if($_SERVER["REQUEST_METHOD"] === "GET"){
    session_start();
    $id_user = $_SESSION["id"];

    //  var_dump($_GET);
    
    if(array_key_exists("id",$_SESSION) && $_SESSION['type'] === 'user'){
        //Obtener todos los registros de las citas
        try{
            $id_user = $_SESSION["id"];
            $query = $connection->prepare('SELECT * FROM citas WHERE id_user = :id_user');
            $query->bindParam(':id_user',$id_user,PDO::PARAM_INT);
            $query->execute();
    
            $citas = array();//Genera arreglo vacio
    
    
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $cita = new Cita($row['id_cita'],$row['dia_cita'],$row['hora_cita'],$row['id_user']);
                $citas[] = $cita->getArray();//Push
    
            }
            echo json_encode($citas);
        }
        catch(PDOException $e){
            echo $e;
        }
    }
    if(array_key_exists("id_cita",$_GET)){
        //Obtener un solo registro de las citas
        try{
            $id_cita = $_GET["id_cita"];

            $query = $connection->prepare('SELECT * FROM citas WHERE id_cita = :id_cita');//Se le cambia el nombre ya sea photocard, cds, etc
            $query->bindParam(':id_cita',$id_cita,PDO::PARAM_INT);
            $query->execute();
    
            $cita;
    
    
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $cita = new Cita($row['id_cita'],$row['dia_cita'],$row['hora_cita'],$row['id_user']);
    
            }
            // var_dump($cita);
            json_encode($cita->getArray());
        }
        catch(PDOException $e){
            echo $e;
        }
    }
    if(array_key_exists("id",$_GET)){
        //Obtener todos los registros de las citas
        try{
            $id_user = $_GET["id"];
            $query = $connection->prepare('SELECT * FROM citas WHERE id_user = :id_user');
            $query->bindParam(':id_user',$id_user,PDO::PARAM_INT);
            $query->execute();
    
            $citas = array();//Genera arreglo vacio
    
    
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $cita = new Cita($row['id_cita'],$row['dia_cita'],$row['hora_cita'],$row['id_user']);
                $citas[] = $cita->getArray();//Push
    
            }
            echo json_encode($citas);
        }
        catch(PDOException $e){
            echo $e;
        }
    } 
    
}

//Actualizar la cita
if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(array_key_exists("date",$_POST)){
        if($_POST["_method"] === "POST"){
            session_start();
            $name = $_SESSION["username"];
            $product_id = $_GET["id"];
            putCita($_POST["text"],$name,$product_id);
        }
        else if($_POST["_method"] === "PUT"){
            putCita($_POST["id"],$_POST["date"],$_POST["time"]);
        }
    }
    else if(array_key_exists("id",$_POST)){
        if($_POST["_method"] === "DELETE"){
            deleteCita($_POST["id"]);
        }
    }
    exit();
}

function putCita($id_cita, $dia_cita, $hora_cita){
    global $connection;

    try{
        $query = $connection->prepare('UPDATE citas SET dia_cita = :dia_cita, hora_cita = :hora_cita WHERE id_cita = :id_cita');
        $query->bindParam(':id_cita', $id_cita, PDO::PARAM_INT);
        $query->bindParam(':dia_cita', $dia_cita, PDO::PARAM_STR);
        $query->bindParam(':hora_cita', $hora_cita, PDO::PARAM_STR);
        $query->execute();

        if($query->rowCount() === 0){
            echo("404: Error en la actualización");
        }
        else{
            header('Location: http://localhost/paginawebdb/view/miscitas.php');
        }

    }
    catch(PDOException $e){
        echo $e;
    }
}


//Cita
function deleteCita($id){
    global $connection;

    try{
        $query = $connection->prepare('DELETE FROM citas WHERE id_cita= :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();

        if($query->rowCount() === 0){
            echo("404: Error en la eliminación");
        }
        else{
            header('Location: http://localhost/paginawebdb/view/miscitas.php');
        }
    }
    catch(PDOException $e){
        echo $e;
    }
}
?>