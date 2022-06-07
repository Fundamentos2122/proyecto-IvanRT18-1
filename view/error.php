<?php
$header = 'view/layouts/header.php';
$footer = 'view/layouts/footer.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/css/framework.css" />

  <title>Home | Body Balance</title>
</head>

<body>

  <div class="container-xl">
        <!-- <section id="agenda-guest"> -->
            <div class="row-0 column justify-evenly align-center">
                <?php
                if (isset($_SESSION['message'])) {
                    echo "<h4 class='alert alert-success'>" . $_SESSION['message'] . "</h4>";
                    unset($_SESSION['message']);
                }
                ?>
                <h2>Error</h2>
                <div>
                    <h1>La contraseña es incorrecta</h1>
                </div>
                <form action="" method="" class="form">
                    <div class="input-container">
                      <h2>¿Tienes una cuenta?</h2>
                        <a class="btn btn-agenda" href="../view/iniciarSesion.php">Inicia Sesión</a>
                    </div>
                    <div class="input-container">
                    <h2>¿Aún no tienes una cuenta?</h2>
                    <a class="btn btn-agenda" href="../view/registrate.php">Crea una</a>
                    </div>
                    <!-- <input type="submit" name="agendar_cita-btn" id="btn-agenda" class="btn btn-submit"></input> -->
                </form>
            </div>
        <!-- </section> -->
    </div>



</body>


<footer id="footer">
  <?php include('layouts/footer.php') ?>
</footer>

</html>