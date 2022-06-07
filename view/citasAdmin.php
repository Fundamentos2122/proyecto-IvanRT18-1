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
        var_dump($_GET);

        try {
            $id_cita = $_GET["id"];
            var_dump($_GET);

            $query = $connection->prepare('SELECT * FROM citas WHERE id_user = :id'); //Se le cambia el nombre ya sea photocard, cds, etc
            $query->bindParam(':id_user', $id_cita, PDO::PARAM_INT);
            $query->execute();

            $cita;


            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $cita = new Cita($row['id_cita'], $row['dia_cita'], $row['hora_cita'], $row['id_user']);
            }

             var_dump($cita);
            echo json_encode($cita->getArray());
            header('Location: http://localhost/paginawebdb/view/citasAdmin.php');
        } catch (PDOException $e) {
            echo $e;
        }
    } else {
        //Obtener todos los registros
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
            echo $citas;
            echo json_encode($citas);
        }
        catch(PDOException $e){
            echo $e;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus citas | Body Balance</title>
    <link rel="stylesheet" href='../assets/css/framework.css'>
</head>

<body>
    <header>
        <?php include($header) ?>
    </header>


    <div class="container-xl">
        <section id="citas-page">
            <div class="row-0 column justify-evenly align-center">
                <h1>Citas e Información de <span></span></h1>
                <!-- <form action="../controllers/misCitasController.php" method="GET">
                    <input type="submit" class="btn btn-agenda" value="Ver citas" name="verCitasbtn"> -->
                </form>
                <div class="citas-container">
                    <!-- <h2>Próximas citas</h2>
                    <div class="citas-cards">
                        <div class="cita-info">
                            <p>Categoria: Consulta nutricional</p>
                            <p>Día: 03/03/22</p>
                            <p>Hora: 6:45 PM</p>
                        </div>

                        <div class="cita-botones">
                            <a href="" class="btn btn-citas">Modificar cita</a>
                            <a href="" class="btn btn-citas">Cancelar cita</a>
                        </div>
                    </div>
                    <div class="citas-cards">
                        <div class="cita-info">
                            <p>Categoria: Consulta nutricional</p>
                            <p>Día: 03/03/22</p>
                            <p>Hora: 6:45 PM</p>
                        </div>

                        <div class="cita-botones">
                            <a href="" class="btn btn-citas">Modificar cita</a>
                            <a href="" class="btn btn-citas">Cancelar cita</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
    </div>

    

</body>
<!-- <script src="../assets/js/citas.js"></script> -->
<footer id="footer">
    <?php include($footer) ?>
</footer>

</html>