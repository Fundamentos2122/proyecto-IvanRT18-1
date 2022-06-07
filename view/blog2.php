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
                <img src="../assets/img/Blog-2.png" alt="" width="300px">
                <div id="article-container">

                </div>
            </div>



            <div class="container">
                <section class="entrada-1">
                    <div class="row column align-center">
                        
                        <img src="background-food-green.png" alt="" width="300px">

                        <article class="articulo-blog">
                        <h2>La importancia de la lista de la compra</h2>
                            <p>¿Estás preocupado por tu alimentación y la de tu familia? Dar el salto para cambiar la alimentación tiene un punto de partida, y ese punto es la lista de la compra. Elaborar una buena lista de la compra es un punto clave en la alimentación, principalmente porque será una buena forma de llenar nuestra casa de alimentos saludables, y no de alimentos perjudiciales para nosotros.
                            </p>

                            <h2 class="subtitulo-blog">Por qué hacer una lista de la compra</h2>

                            <p>Principalmente porque nos ayuda a comer mucho más saludable y a optimizar todos los recursos.

                                Con la lista de la compra nos obligamos a revisar la despensa, y sobre todo, ahorramos mucho tiempo y dinero al comprar en el súper. Pero esto no es todo. Con la lista de la compra adecuada, podremos cocinar un día o dos a la semana optimizando mucho nuestro tiempo.

                                ¿Quién no quiere ahorrar dinero, tiempo y comer sano?
                            </p>

                            <h3 class="subtitulo-blog">Tips para hacer una buena lista de la compra</h3>

                            <p>A continuación, te damos algunos tips para hacer una buena lista:

                                Planifica el menú de la semana, tanto las comidas como las cenas, los desayunos y las meriendas.
                                Olvídate de improvisar, la planificación te ayudará a llevar una dieta sana y a ahorrar en la compra.
                                No hagas la lista con hambre, así evitarás incluir alimentos que no son necesarios.
                                Averigua qué alimentos tienes en tu cocina, ¡así no desperdiciarás ningún alimento!
                            </p>

                            <h3 class="subtitulo-blog">Alimentos que debemos incluir</h3>

                            <p>Estos son los alimentos que no pueden faltar en tu lista de la compra para empezar a llevar una dieta sana y equilibrada.

                                Frutas: no puede faltar una selección variada de frutas (arándanos, plátanos, fresas, manzanas, peras, frambuesas, mango…). ¡Las que más te gusten!
                                Verduras: lo mismo sucede con las verduras, y es que estas deben ser la base de nuestra alimentación.
                                Carnes: compra el tipo de carne que más te guste. Puedes incluir pollo, pavo, ternera, cordero.
                                Pescados: la lista de la compra de la semana debe incluir pescados (lenguado, rodaballo, atún rojo, bacalao, boquerones, sardinas, salmonetes, trucha…).
                                Snacks saludables: incluye snacks saludables o los ingredientes para hacer los snacks tú mismo. Por ejemplo: puedes comprar remolachas para hacer chips de remolacha, chips de boniato, puedes comprar frutos secos…
                            </p>
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