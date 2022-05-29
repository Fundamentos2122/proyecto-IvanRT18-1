<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | Body Balance</title>
    <link rel="stylesheet" href="framework.css">
</head>

<body>
    <header>
        <?php include('templates/header.php') ?>
    </header>

    <div class="container-xl">
        <section id="perfil">
            <div class="row">
                <div class="col-lg-3 flex column justify-center align-center">
                    <img src="img/background-food-green.png" alt="" width="330px">
                    <a class="btn btn-submit">Cambiar foto de perfil</a>
                </div>
                <div class="col-lg-7 col-sm-12">
                    <div class="form">
                        <h2 class="titulo-verde">Perfil</h2>
                        <form action="" autocomplete="off">
                            <div class="input-container">
                                <input type="text" name="perfil_nombre" placeholder="Nombre" required>
                            </div>
                            <div class="input-container">
                                <input type="tel" name="perfil-telefono" placeholder="Telefono">
                            </div>
                            <div class="input-container">
                                <input type="text" name="perfil-direccion" placeholder="Dirección">
                            </div>
                            <div class="input-container">
                                <input type="email" name="perfil-correo" placeholder="Correo Electronico">
                            </div>
                            <div class="input-container">
                                <input type="password" name="perfil-password" placeholder="Contraseña">
                            </div>
                            <input type="submit" class="btn btn-submit"></input>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

<footer id="footer">
    <?php include('templates/footer.php') ?>
</footer>

</html>