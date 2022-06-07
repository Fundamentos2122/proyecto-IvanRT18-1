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
    <title>Iniciar Sesión | Body Balance</title>
    <link rel="stylesheet" href='../assets/css/framework.css'>
</head>

<body>
    <header>
    </header>

    <section id="register-page">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-5 flex justify-center align-center">
                    <img src="../assets/img/background-food-green.png" alt="">
                </div>

                <div class="col-lg-7 flex justify-center align-center">
                    <div class="form">
                        <div class="form-titulo">Inicia Sesión</div>
                        <div class="form-subtitulo">Entra a tu cuenta</div>
                        <form action="../controllers/accessController.php" method="POST" autocomplete="off">
                            <input type="hidden" name="_method" value="POST">
                            <div class="input-container">
                                <input type="email" name="Login_email" placeholder="Correo Electronico" required>
                            </div>
                            <div class="input-container">
                                <input type="password" placeholder="Contraseña" name="Login_contraseña" required>
                            </div>
                            <input type="submit" class="btn btn-submit" name="login_btn"></input>
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