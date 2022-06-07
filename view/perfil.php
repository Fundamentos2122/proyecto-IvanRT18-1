<?php
$header = '../view/layouts/header.php';
$footer = '../view/layouts/footer.php';

include('../controllers/accessController.php');
include('../controllers/perfilController.php');

// session_start();
// echo $usuarioSesion;
// echo $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | Body Balance</title>
    <link rel="stylesheet" href="../assets/css/framework.css">

</head>

<body>
    <header>
        <?php include($header) ?>
    </header>

    <div class="container-xl">
        <section id="perfil">
            <div class="row">
                <!-- <div class="col-lg-3 flex column justify-center align-center">
                    <img src="../assets/img/background-food-green.png" alt="" width="330px">
                    <a class="btn btn-submit" id="cambiarFotoBtn">Cambiar foto de perfil</a>
                </div> -->
                <div class="col-lg-7 col-sm-12">
                    <h2 class="titulo-verde">Perfil</h2>
                    <div class="form" id="form-perfil-out">
                        <?php if(!array_key_exists("id",$_SESSION)){
                            echo '<h2>No tienes un perfil</h2>
                            <form action="" method="" class="form">
                    <div class="input-container">
                      <h2>Entra a tu cuenta</h2>
                        <a class="btn btn-agenda" href="../view/iniciarSesion.php">Inicia Sesión</a>
                    </div>
                    <div class="input-container">
                    <h2>¿Aún no tienes una cuenta?</h2>
                    <a class="btn btn-agenda" href="../view/registrate.php">Crea una</a>
                    </div>
                    <!-- <input type="submit" name="agendar_cita-btn" id="btn-agenda" class="btn btn-submit"></input> -->
                </form>
                            ';
    } ?>
                         <!-- <form action="../controllers/perfilController.php" method="POST" autocomplete="off" id="form-perfil"> -->
                            <!-- <div class="input-container">
                                <input type="text" name="perfil_nombre" value="" required>
                            </div>
                        
                            <div class="input-container">
                                <input type="email" name="perfil_correo" value="">
                            </div>
                            <div class="input-container">
                                <input type="password" name="perfil_password" value="">
                            </div>
                            <input type="submit" class="btn btn-submit" name="btnPerfil"></input> -->
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>
<script src="../assets/js/perfil.js"></script>

<footer id="footer">
    <?php include($footer) ?>
</footer>

</html>