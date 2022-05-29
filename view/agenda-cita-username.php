<?php
$header = '../view/layouts/header.php';
$footer = '../view/layouts/footer.php';

include('../controllers/guardaCita-Controller.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda cita | Body Balance</title>
    <link rel="stylesheet" href="../assets/css/framework.css">

</head>

<body>
    <?php include($header) ?>
    </header>


    <div class="container-xl">
        <section id="agenda-guest">
            <div class="row-0 column justify-evenly align-center">
                <?php
                if (isset($_SESSION['message'])) {
                    echo "<h4 class='alert alert-success'>" . $_SESSION['message'] . "</h4>";
                    unset($_SESSION['message']);
                }
                ?>
                <h2>Agenda tu cita</h2>
                <div>
                    <p>Agendando cita para: <span>username</span></p>
                </div>
                <form action="../controllers/guardaCita-Controller.php" method="POST" class="form">
                    <div class="input-container">
                        <label for="cita_dia">Día:</label>
                        <input type="date" name="cita_dia" id="">
                    </div>
                    <div class="input-container">
                        <label for="cita_hora">Hora:</label>
                        <input type="time" name="cita_hora" id="">
                    </div>
                    <input type="submit" name="agendar_cita-btn" id="btn-agenda" class="btn btn-submit"></input>
                </form>
            </div>
        </section>
    </div>
<script src="../assets/js/app.js"></script>
</body>
<footer id="footer">
    <?php include($footer) ?>

</html>