<?php
session_start();


?>

<nav class="navbar">

    <?php
    if(!isset($_SESSION['nombre'])){
        echo '<div class="nav-up">
        <div class="logo-nav">
            <a href="index.php"><img src="../assets/img/logo.png" alt="logo pagina" /></a>
        </div>

        <div class="btns-nav">
            <a class="btn btn-login" href="../view/iniciarSesion.php">Iniciar sesión</a>
            <a class="btn btn-register" href="../view/registrate.php">Regístrarse</a>
        </div>
    </div>';
    }
    else if($_SESSION['nombre']){
        echo 'bienvenido ' . $_SESSION['nombre'];
        echo '<div class="nav-up">
        <div class="logo-nav">
            <a href="index.php"><img src="../assets/img/logo.png" alt="logo pagina" /></a>
        </div>

        <div class="btns-nav">
            <a class="btn btn-login" href="../view/perfil.php">Mi perfil</a>
            <a class="btn btn-register" href="../view/registrate.php">Cierra Sesión</a>
        </div>
    </div>';
    }
    ?>

    <?php
    ?>

    
    <div class="menu-nav">
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../view/agenda-cita-username.php">Agenda hoy</a></li>
            <li><a href="../view/aboutUs.php">Sobre nosotros</a></li>
            <li><a href="../view/Blog.php">Noticias</a></li>
            <li><a href="../view/contact-us.php">Contactanos</a></li>
            <li><a href="../view/perfil.php">Perfil</a></li>
        </ul>
    </div>
</nav>