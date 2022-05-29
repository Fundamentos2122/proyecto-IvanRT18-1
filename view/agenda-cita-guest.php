<?php
$header = '../view/layouts/header.php';
$footer = '../view/layouts/footer.php';
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
    <header>
        <?php include($header) ?>
    </header>



    <div class="container-xl">
        <section id="agenda-guest">
            <div class="row-0 column justify-evenly align-center">
                <h1>Agenda tu cita</h1>
                <div>
                    <h2>Importante</h2>
                    <p>Requieres de una cuenta para poder agendar una cita.</p>
                </div>
                <div class="opciones-agenda">
                    <div class="opciones">
                        <p>¿Ya eres cliente? <span><a href="iniciarSesion.php">Inicia Sesión</a></span></p>
                    </div>
                    <div class="opciones">
                        <p>¿Aún no tienes cuenta? <span><a href="registrate.php">Crea una</a></span></p>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>
<footer id="footer">
    <?php include($footer) ?>
</footer>

</html>