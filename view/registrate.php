<?php
$header = '../view/layouts/header.php';
$footer = '../view/layouts/footer.php';

include('../controllers/UsersController.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../assets/css/framework.css'>
    <title>Regístrate | Body Balance</title>
</head>

<body>
    <header>
        <?php include($header) ?>
    </header>

    <section id="register-page">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-5 flex justify-center align-center">
                    <img src="../assets/img/background-food-green.png" alt="">
                </div>

                <div class="col-lg-7 flex justify-center align-center">
                    <div class="form">
                        <div class="form-titulo">Regístrate</div>
                        <div class="form-subtitulo">Vamos a crear tu cuenta</div>
                        <form action="../controllers/UsersController.php" method="POST" autocomplete="off">
                            <div class="input-container">
                                <input type="text" placeholder="Nombre" name="Reg_name" required>
                            </div>
                            <div class="input-container">
                                <input type="email" name="Reg_email" placeholder="Correo Electronico" required>
                            </div>
                            <div class="input-container">
                                <input type="password" placeholder="Contraseña" name="Reg_password" required>
                            </div>
                            <div class="input-container">
                                <input type="password" name="Reg_ConfirmPass" placeholder="Confirma contraseña" required>
                            </div>
                            <input type="submit" name="btn-register-submit" class="btn btn-submit"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<footer id="footer">
    <?php include($footer) ?>
</footer>

</html>