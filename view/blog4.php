<?php
$header = '../view/layouts/header.php';
$footer = '../view/layouts/footer.php';
include('../controllers/blogController.php')
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
        <section class="entrada-1">
            <div class="row column align-center">
                <img src="../assets/img/Blog-4.png" alt="" width="300px">
                <div id="article-container">

                </div>
            </div>



            <div class="container">
                <section class="entrada-1">
                    <div class="row column align-center">
                        <h2>Las legumbres: fuente de proteínas</h2>
                        <img src="background-food-green.png" alt="" width="300px">

                        <article class="articulo-blog">
                            <p>Las legumbres son proteínas. ¿Lo sabías? Son las semillas de las plantas leguminosas, un alimento esencial para nuestra salud y es un deber incluirlas en nuestra dieta, en general en la alimentación de nuestra familia, ya que son beneficiosas para niños y adultos sin distinción. Una de sus principales características y por lo que son tan apreciadas es porque están llenas de nutrientes y tienen un alto contenido de proteínas, lo que hace que sea un alimento muy especial y necesario.

¿Quieres saber más sobre las legumbres y sus nutrientes?
                            </p>

                            <h2 class="subtitulo-blog">Beneficios de consumir legumbres</h2>

                            <p>El consumo de las legumbres es muy beneficioso para nuestro organismo. Entre todas las ventajas, destacan:

Su alto contenido en fibra. La fibra que contienen ayuda a reducir el colesterol malo que tenemos en el cuerpo y controla los niveles de glucosa.
Su elevado contenido en proteínas hace que sean un alimento perfecto para las personas que optan por dietas veganas o vegetarianas.
Elevado contenido en vitamina B. Los alimentos que contienen vitamina B son buenos para el sistema nervioso y para el mantenimiento y la salud de la piel, las uñas y el cabello.
Son beneficiosas para reducir la hipertensión y combaten y reducen las enfermedades cardiovasculares.
                            </p>

                            <h3 class="subtitulo-blog">Tipos de legumbres</h3>

                            <p>¿Sabías que existen muchos tipos de legumbres diferentes?  En este apartado he querido hacer un pequeño listado de los tipos más comunes y más demandados en las dietas:

Guisantes: son muy ricos en fibra y no son lo que más proteínas aportan al organismo. Muchas veces se confunden con una verdura tradicional pero son un tipo de legumbre.
Garbanzos: es un tipo de legumbre que puede cocinarse de muchas formas, aunque en nuestra dieta mediterránea lo vemos mucho en platos típicos como el cocido.
Habas: las habas quizá no sean tan conocidas, pero pueden comerse de muchas formas y son muy nutritivas. ¡Salteadas con jamón, solas, e incluso en tortilla!
Lentejas: las lentejas son las legumbres más ‘famosas’ del mundo y uno de los tipos más demandados. Son una gran fuente de hierro y pueden consumirse en guisado, ensalada, etcétera. Existen muchas variedades, como la castellana, la roja, la pardina…
Soja: puede que no sea tan conocida, aunque poco a poco vamos incluyéndola en nuestra dieta. ¡Contiene un montón de nutrientes!
                            </p>

                            <h3 class="subtitulo-blog">Características de las legumbres</h3>

                            <p>Para acabar con el post queremos contarte cuáles son las principales características de las legumbres. Este tipo de alimento son semillas de plantas. Estas plantas se cosechan con la única intención de extraer su semilla seca que es la legumbre, y su principal característica es la que venimos diciéndote durante todo el post: que es una gran fuente de proteína. Su aporte nutricional es muy elevado.
                            </p>

                            <p>No queremos abandonar el artículo sin hacer mención a la digestión de este alimento. A muchas personas les cuesta digerirlo y tras su consumo acaban con hinchazón abdominal y/o gases. Hay quienes pueden ser intolerantes y luego hay quienes las consumen incorrectamente (cantidades demasiado abundantes, una ingesta del alimento muy rápida…)</p>

                        </article>
                    </div>



                    <div class="container">
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
                    </div>
                </section>
            </div>
        </section>
    </div>


</body>
<script src="../assets/js/blog.js"></script>
<footer id="footer">
    <?php include($footer) ?>
</footer>

</html>