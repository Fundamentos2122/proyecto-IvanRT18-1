<?php
    //Inicia una sesión
    session_start();

    //Si no existe una sesion
    if(!array_key_exists("username",$_SESSION)){
        header('Location: http://localhost/paginawebdb/view/iniciarSesion.php');
        exit();
    } 

  $header = 'view/layouts/header.php';
  $footer = 'view/layouts/footer.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/css/framework.css" />

  <title>Home | Body Balance</title>
</head>

<body>
  <header>
    <?php include($header) ?>
  </header>

  <section class="showcase-home">
    <div class="container-xl">
      <div class="row">
        <div class="col-sm-12 col-lg-8 flex justify-center align-center">
          <p>
            Queremos que nos conozcas y descubrir juntos cómo podemos mejorar
            tu salud desde dentro. Para nosotros, cada persona es única,
            también en cuanto a necesidades y hábitos alimentarios se refiere,
            por lo que todos nuestros planes son totalmente personalizados y
            adaptados a cada persona.

            <br><br>

            Es posible alcanzar tus objetivos de una forma saludable sin
            necesidad de recurrir a dietas “Milagro” o productos que pueden
            ser perjudiciales para tu organismo. Y lo más importante,
            conseguirás mantener tus resultados a lo largo del tiempo. Para
            ello evaluaremos tu estado nutricional y así podremos diseñar una
            dieta equilibrada y personalizada que se ajuste a tus necesidades,
            a tu estilo de vida y gustos.

            <br><br>

            Nuestro principal motor es ayudar a las personas a conseguir sus
            objetivos de forma saludable. Déjanos inculcarte nuevos hábitos
            saludables que te ayudarán a vivir de forma sana. Además, desde un
            punto de vista psicológico, veremos qué aspectos pueden influir a
            la hora de conseguir tus objetivos.
          </p>
        </div>

        <div class="col-sm-12 col-lg-4 flex justify-center align-center">
          <img src="../assets/img/background-food-green.png" alt="">
        </div>

        <a class="btn btn-agenda">Agendar</a>
      </div>
    </div>
  </section>


  <section id="banners-home">
    <div class="banner-contacto">
      <h3>¿Tienes preguntas?</h3>
      <h4>Estamos para ayudarte</h4>
      <ul class="banner-cards">
        <li class="banner-item">
          <img src="../assets/img/facebook-logo.png" alt="">
          <div>
            <h5>Facebook</h5>
            <p>Body Balance</p>
          </div>
        </li>
        <li class="banner-item">
          <img src="../assets/img/telephone.png" alt="">
          <div>
            <h5>Whatsapp</h5>
            <p>444719128</p>
          </div>
        </li>
        <li class="banner-item">
          <img src="../assets/img/placeholder.png" alt="">
          <div>
            <h5>Ubicación</h5>
            <p>Dr. Manuel Nava No. 8</p>
          </div>
        </li>
        <li class="banner-item">
          <img src="../assets/img/calendar.png" alt="">
          <div>
            <h5>Horario</h5>
            <p>Lunes - Viernes</p>
            <p>7:00 AM - 6:00 PM</p>
          </div>
        </li>
      </ul>
    </div>
  </section>


  <section id="info-home">
    <div class="container-xl">
      <div class="row">
        <div class="col-lg-8">
          <h2>NOS ADAPTAMOS A TI</h2>
          <h3>Cuentas con todo nuestro apoyo</h3>
          <br>
          <p>
            Tras conocer tu historial clínico, hábitos y problemas de salud
            actuales, analizaremos tu estilo de vida (tipo de trabajo, actividades
            físicas que realizas), horarios, etc.
          </p><br>
          <p>
            Conoceremos tus gustos alimentarios, qué te gusta y qué no. De este
            modo podremos diseñar una dieta equilibrada pero siempre fácil de
            seguir.
          </p><br>
          <p>
            La educación nutricional debe estar formada por un plan de
            alimentación personalizado y equilibrado con las proporciones
            adecuadas, según cada persona, de proteínas, grasas y carbohidratos,
            así como de vitaminas y minerales.
          </p>
        </div>
        <div class="flex justify-center align-center">
          <img src="../assets/img/master-nutricion-clinica-medicina-a.jpg" alt="imagen-home-info-1" />
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-lg-8">
          <h2>PLANES PERSONALIZADOS</h2>
          <h3>Porque no todos somos iguales</h3>
          <br>
          <p>
            Tras hablar contigo y conocer los problemas que te dificultan seguir
            una vida sana y saludable, estableceremos tus objetivos diseñando un
            plan totalmente personalizado y adaptado a tus necesidades, gustos y
            horarios.
          </p><br>
          <p>
            Después un estudio personalizado para lograr tus objetivos y siguiendo
            nuestras pautas para conseguir unos hábitos sanos y equilibrados
            adaptados a tus horarios, gasto energético y gustos alimentarios,
            verás resultados en menos de lo que te imaginas.
          </p><br>
          <p>
            Pero ya sabes que todo no es comer. En nuestra clínica de Nutrición y
            Dietética también te enseñaremos a adquirir nuevos hábitos de
            ejercicio, siempre a tu alcance y teniendo en cuenta tus capacidades
            físicas y deportivas.
          </p>
        </div>

        <div>
          <img src="../assets/img/home image 2.jpg" alt="" />
        </div>
      </div>
    </div>
  </section>



</body>


<footer id="footer">
  <?php include('layouts/footer.php') ?>
</footer>

</html>