<?php
$header = '../view/layouts/header.php';
$footer = '../view/layouts/footer.php';
// include('../controllers/misCitasController.php');
include('../view/layouts/modal_citas.php');
include('../view/layouts/modalDeleteCita.php');


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
                <h1>Tus citas</h1>
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
<script src="../assets/js/citas.js"></script>
<footer id="footer">
    <?php include($footer) ?>
</footer>

</html>