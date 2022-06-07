<?php
$header = '../view/layouts/header.php';
$footer = '../view/layouts/footer.php';

include('../controllers/contactosController.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos | Body Balance</title>
    <link rel="stylesheet" href="../assets/css/framework.css">
</head>

<body>
    <header>
        <?php include($header) ?>
    </header>

    <div class="container-xl">
        <section id="contacto">
            <div class="row">
                <div class="col-lg-6 flex column justify-center align-center ">
                    <p>Si quieres contactar con nosotros, puedes rellenar el formulario de contacto y te contestaremos en un plazo de 24 horas, pedir cita directamente o llamarnos por teléfono. Estaremos encantados de atenderte.</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.522549507973!2d-101.01753138512572!3d22.144172585404874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842a98d23271e7af%3A0x45f7ab1a9dba5f87!2sFacultad%20de%20Ingenier%C3%ADa%20UASLP%2C%20Edificio%20T!5e0!3m2!1ses-419!2smx!4v1649882873687!5m2!1ses-419!2smx" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form">
                        <h2 class="form-titulo">Contacto</h2>
                        <form action="../controllers/contactosController.php" method="POST" autocomplete="off">
                            <div class="input-container">
                                <input type="name" placeholder="Nombre" required name="name_contact">
                            </div>
                            <div class="input-container">
                                <input type="tel" placeholder="Telefono" required name="phone_contact">
                            </div>
                            <div class="input-container">
                                <input type="email" placeholder="Correo Electronico" required name="email_contact">
                            </div>
                            <div class="input-container">
                                <textarea name="comentario" id="" cols="20" rows="5" placeholder="Comentario" required></textarea>
                            </div>
                            <input type="submit" class="btn btn-submit" name="send_Contact" id="btn_comentario"></input>
                        </form>
                    </div>
                </div>
        </section>
    </div>

</body>
<script src="../assets/js/app.js"></script>
<footer id="footer">
    <?php include($footer) ?>
</footer>


</html>