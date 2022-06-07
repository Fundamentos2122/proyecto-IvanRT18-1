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
                <img src="../assets/img/Blog-3.png" alt="" width="300px">
                <div id="article-container">

                </div>
            </div>



            <div class="container">
                <section class="entrada-1">
                    <div class="row column align-center">
                        <h2>¿Son buenos los hidratos de carbono?</h2>
                        <img src="background-food-green.png" alt="" width="300px">

                        <article class="articulo-blog">
                            <p>Es la pregunta más habitual de nuestros pacientes, e imaginamos que de muchos de vosotros. Los hidratos de carbono son un tema de conflicto en muchas conversaciones. Unos dicen que son saludables, otros que no, unos que engordan, otros que son necesarios para aportar energía… ¿Qué es cierto de todo esto? ¿Son saludables? ¿Qué tipos de hidratos de carbono existen?
                            </p>

                            <h2 class="subtitulo-blog">¿Son saludables?</h2>

                            <p>¿Y estos nutrientes son saludables? Sus beneficios son numerosos, desde el aporte de energía del que te hablábamos, hasta la regulación de los niveles de azúcar en sangre, su ayuda en el metabolismo de proteínas, su intervención en la disminución de la fatiga y también en la recuperación muscular.

                                A pesar de ello, muchos son los que piensan que no son saludables. ¿Es una creencia errónea? ¿Por qué se piensa esto?

                                Sí que es una creencia errónea porque todos los nutricionistas recomendamos dietas equilibradas y variadas, y esto incluye los hidratos de carbono. De hecho, según las últimas recomendaciones de los expertos, los alimentos que contienen hidratos deberían representar alrededor de un 40% de nuestras calorías diarias como mínimo, pero siempre que sean hidratos que posean un bajo índice glucémico, porque los que lo tienen alto pueden generan un mayor incremento de la glucosa en sangre.

                                ¿Cuáles son los más saludables? Los carbohidratos que se encuentran en los cereales de grano entero y también en las frutas y legumbres. No obstante, hay determinadas personas, con determinada actividad (por ejemplo deportistas de elite) que requieren que en sus dietas los hidratos de carbono ocupan un lugar más privilegiado.
                            </p>

                            <h3 class="subtitulo-blog">Tipos de hidratos de carbono</h3>

                            <p>Estos son los principales tipos de hidratos de carbono:

Azúcares: son los carbohidratos más simples. Suelen llevarlo los dulces, alimentos procesados, refrescos, etcétera.
                            </p>

                            <p>Almidones: son los carbohidratos complejos que están hechos de muchos azúcares simples unidos. Son los cereales, también la pasta, e incluso algunos cereales y verduras. Las patatas también las incluimos en este grupo.
                            </p>

                            <p>Fibra: la fibra también es un carbohidrato complejo. Son necesarios para ayudar a bajar el colesterol y el azúcar en la sangre. Sobre todo se encuentran en frutas, verduras e incluso en algunos frutos secos como en las nueces.</p>

                            <p>Existen hidratos de carbono saludables. No es bueno eliminar ningún nutriente de la dieta salvo recomendación médica. Lo saludable es siempre llevar una dieta variada y equilibrada y combinarla con ejercicio y actividad.

Si necesitas ayuda para comer de manera más saludable contacta con nosotros. Te ayudaremos a cambiar tus hábitos de vida y tus hábitos alimentarios para que te sientas mucho mejor.

¡Es más fácil de lo que crees!</p>
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