<?php
$header = '../view/layouts/header.php';
$footer = '../view/layouts/footer.php';
// include('../controllers/blogController.php');
include('../view/layouts/modalEditaNoticia.php');
include('../view/layouts/modalEliminarNoticia.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Body Balance</title>
    <link rel="stylesheet" href="../assets/css/framework.css">
</head>

<body>
    <header>
        <?php include($header) ?>
    </header>

    <div class="container">
        <div id="Registrar noticia">
            
        </div>
        <section class="entrada-1">
            <div class="row column align-center">
                <!-- <img src="../assets/img/Blog-1.png" alt="" width="300px"> -->
                <div id="article-container">
                </div>
            </div>



            <div class="container">
                <section class="entrada-1">
                    <div class="row column align-center">
                        <!-- <h2>¿Qué pan es más saludable?</h2> -->
                        <!-- <img src="../assets/img/Blog-1.png" alt="" width="300px"> -->

                        <article class="articulo-blog">
                        </article>
                    </div>



                    <!-- <div class="container">
                        <h1>También te puede interesar:</h1>
                        <div class="blog-cards-container">
                            <div class="blog-cards">
                                <a href="../view/blog2.php"><img src="../assets/img/Blog-2.png" alt="" width="170px"></a>
                                <p>La importación de la lista de compras</p>
                            </div>

                            <div class="blog-cards">
                                <a href="../view/blog3.php"><img src="../assets/img/Blog-3.png" alt="" width="170px"></a>
                                <p>¿Son buenos los hidratos de carbono?</p>
                            </div>

                            <div class="blog-cards">
                                <a href="../view/blog4.php"><img src="../assets/img/Blog-4.png" alt="" width="170px"></a>
                                <p>La importación de la lista de compras</p>
                            </div>

                            <div class="blog-cards">
                                <a href="../view/Blog.php"><img src="../assets/img/Blog-1.png" alt="" width="170px"></a>
                                <p>¿Qué pan es más saludable?</p>
                            </div>
                        </div>
                    </div> -->
                </section>
            </div>
        </section>
    </div>
    


</body>

<!-- <script src="../assets/js/blog.js"></script> -->
<?php
        //  session_start();
        if($_SESSION["type"] === "admin") {//Si no es normal
            echo  "<form action=\"../controllers/blogController.php\" method=\"POST\" id=\"form-noticia\" class=\"form\" >
            <input type=\"hidden\" name=\"_method\" value=\"POST\">

                <label for=\"titulo\">Titulo:</label>
                <input name=\"titulo\" autocomplete=\"off\" required></input>
                <input type=\"hidden\" name=\"_method\" value=\"POST\">
           
                <label for=\"intro\">Introduccion:</label>
                <textarea name=\"intro\" required></textarea>
                <input type=\"hidden\" name=\"_method\" value=\"POST\">
            
            <label for=\"sub1\">Subtitulo 1:</label>
            <input name=\"sub1\" autocomplete=\"off\" required></input>
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
           
            <label for=\"con1\">Contenido 1:</label>
            <textarea name=\"con1\" required></textarea>
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
           
            <label for=\"sub2\">Subtitulo 2</label>
            <input name=\"sub2\" autocomplete=\"off\" required></input>
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
           
            <label for=\"con2\">Contenido 2</label>
            <textarea name=\"con2\" required></textarea>
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
           
            <label for=\"sub3\">Subtitulo 3</label>
            <input name=\"sub3\" autocomplete=\"off\" required></input>
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
           
            <label for=\"con3\">Contenido 3</label>
            <textarea name=\"con3\" required></textarea>
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
            
            
            
            <input type=\"submit\" class=\"btn btn-agenda\" value=\"Agregar\">
</form>";                
        }
    ?>

<?php

// echo $_SESSION['type'];
// var_dump($_SESSION);
if ($_SESSION['type'] === 'user' || $_SESSION['type'] === NULL){
    session_start();
    // echo 'im here';
    echo "<script src=\"../assets/js/blog.js\"></script>";
}
else if ($_SESSION['type'] === 'admin'){
    session_start();
    echo "<script src=\"../assets/js/blogAdmin.js\"></script>";
    echo 'admin';
}
?>

<footer id="footer">
    <?php include($footer) ?>
</footer>


<!-- <label for=\"image\">Imagen:</label>
            <input type=\"file\" name=\"image\" required> -->
</html>