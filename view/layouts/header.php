<?php
session_start();


?>

<nav class="navbar">

    <?php
    if (!isset($_SESSION['name'])) {
        echo '<div class="nav-up">
        <div class="logo-nav">
            <a href="index.php"><img src="../assets/img/logo.png" alt="logo pagina" /></a>
        </div>

        <div class="btns-nav">
            <a class="btn btn-login" href="../view/iniciarSesion.php">Iniciar sesión</a>
            <a class="btn btn-register" href="../view/registrate.php">Regístrarse</a>
        </div>
    </div>';
    } else if ($_SESSION['name'] && $_SESSION['type'] === 'user') {
        echo 'bienvenido ' . $_SESSION['name'];
        // echo $_SESSION['id'];
        // echo $_SESSION['email'];
        // echo $_SESSION['type'];
        echo '<div class="nav-up">
        <div class="logo-nav">
            <a href="index.php"><img src="../assets/img/logo.png" alt="logo pagina" /></a>
        </div>

        <div class="btns-nav">
            <a class="btn btn-login" href="../view/miscitas.php">Mis citas</a>
            <div> <form action="../controllers/accessController.php" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" class="btn btn-register" value="Cerrar sesión">
        </form></div>
        </div>
    </div>';
    } else if ($_SESSION['type'] === 'admin') {
        echo 'eres el admin';
        // echo $_SESSION['id'];
        // echo $_SESSION['email'];
        // echo $_SESSION['type'];
        echo '<div class="nav-up">
        <div class="logo-nav">
            <a href="index.php"><img src="../assets/img/logo.png" alt="logo pagina" /></a>
        </div>

        <div class="btns-nav">
            <a class="btn btn-citas" href="../view/administrador.php">Administrador</a>
            <div> <form action="../controllers/accessController.php" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" class="btn btn-register" value="Cerrar sesión">
        </form></div>
        </div>
    </div>';
    }
    ?>

    <?php
    ?>


    <div class="menu-nav">
        <ul>
            <li><a href="../view/index.php">Inicio</a></li>
            <li><a href="../view/agenda-cita-username.php">Agenda hoy</a></li>
            <li><a href="../view/aboutUs.php">Sobre nosotros</a></li>
            <li><a href="../view/Blog.php">Noticias</a></li>
            <li><a href="../view/contact-us.php">Contactanos</a></li>
            <li><a href="../view/perfil.php" id="PerfiID" value="<?php 
            if(array_key_exists("id",$_SESSION)){echo $_SESSION['id'];}
            else{}?>">Perfil</a>
                <input type="hidden" name="PerfilID" id="<?php if(array_key_exists("id",$_SESSION)){echo $_SESSION['id'];}else{}?>" value="<?php if(array_key_exists("id",$_SESSION)){echo $_SESSION['id'];}else{}?>">
            </li>
        </ul>
    </div>
</nav>