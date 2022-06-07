<?php
$header = '../view/layouts/header.php';
$footer = '../view/layouts/footer.php';

// include('../controllers/administradorController.php');
include('../view/layouts/modal_citas.php');
include('../view/layouts/modaleDeleteUser.php');
include('../view/layouts/modalVerCitasAdmin.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Body Balance</title>
    <link rel="stylesheet" href="../assets/css/framework.css">

</head>

<body>
    <header>
        <?php include($header) ?>

    </header>


    <div class="container-xl">
        <section id="citas-page">
            <div class="row-0 column justify-evenly align-center">
                <div class="citas-container">
                    <h2>Usuarios</h2>
                    <!-- <div class="citas-cards">
                        <div class="cita-info">
                            <p>Nombre: Juán Pérez</p>
                            <p>Correo Electronico: juanperez@outlook.com</p>
                        </div>

                        <div class="cita-botones">
                            <a href="" class="btn btn-citas">Ver citas de este usuario</a>
                            <a href="" class="btn btn-citas">Dar de baja</a>
                        </div>
                    </div>
                    <div class="citas-cards">
                        <div class="cita-info">
                            <p>Nombre: Juán Pérez</p>
                            <p>Correo Electronico: juanperez@outlook.com</p>
                        </div>

                        <div class="cita-botones">
                            <a href="" class="btn btn-citas">Ver citas de este usuario</a>
                            <a href="" class="btn btn-citas">Dar de baja</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
    </div>
</body>
<script src="../assets/js/administrador.js"></script>

<?php
        // session_start();
        if($_SESSION["type"] !== "normal") {//Si no es normal
            echo  "<form action=\"../controllers/UsersController.php\" method=\"POST\" id=\"form-noticia\" class=\"form\" autocomplete=\"off\" >
            <input type=\"hidden\" name=\"_method\" value=\"POST\">

                <input name=\"Reg_name\" placeholder=\"Nombre\" autocomplete=\"off\" required></input>
            
            <input name=\"Reg_email\" placeholder=\"Email\" autocomplete=\"off\" required></input>

            
            <input type=\"password\" name=\"Reg_password\" placeholder=\"Contraseña\" autocomplete=\"off\" required></input>

            <input type=\"submit\" class=\"btn btn-agenda\" value=\"Agregar\" name=\"btn-register-submit\" >
</form>";     
        }
    ?>
<footer id="footer">
    <?php include($footer) ?>
</footer>

</html>