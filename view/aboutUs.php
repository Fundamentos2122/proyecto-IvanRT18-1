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
    <title>Sobre nosotros | Body Balance</title>
    <link rel="stylesheet" href='../assets/css/framework.css'>
</head>

<body>
    <header>
        <?php include($header) ?>
    </header>

    <section id="about-us-1">
        <div class="container-xl">
            <div class="row">
                <img src="img/logo.png" alt="" width="250px">
            </div>
            <div class="row">
                <h1 class="titulo-verde">Sobre nosotros</h1>
            </div>
            <div class="row align-center padding-general">
                <div class="col-9">
                    <p>
                        Queremos que nos conozcas y descubrir juntos cómo podemos mejorar tu salud desde dentro. Para
                        nosotros, cada persona es única, también en cuanto a necesidades y hábitos alimentarios se
                        refiere, por lo que todos nuestros planes son totalmente personalizados y adaptados a cada
                        persona.
                    </p>
                    <br>
                    <p>
                        Es posible alcanzar tus objetivos de una forma saludable sin necesidad de recurrir a dietas
                        “Milagro” o productos que pueden ser perjudiciales para tu organismo. Y lo más importante,
                        conseguirás mantener tus resultados a lo largo del tiempo. Para ello evaluaremos tu estado
                        nutricional y así podremos diseñar una dieta equilibrada y personalizada que se ajuste a tus
                        necesidades, a tu estilo de vida y gustos.
                    </p>
                    <p>
                        Nuestro principal motor es ayudar a las personas a conseguir sus objetivos de forma saludable.
                        Déjanos inculcarte nuevos hábitos saludables que te ayudarán a vivir de forma sana. Además,
                        desde un punto de vista psicológico, veremos qué aspectos pueden influir a la hora de conseguir
                        tus objetivos.
                    </p>
                </div>
                <img src="../assets/img/background-food-green.png" alt="" width="300px">
            </div>
        </div>
    </section>



</body>
<footer id="footer">
    <?php include($footer) ?>
</footer>

</html>