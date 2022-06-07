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
<footer id="footer">
    <?php include($footer) ?>
</footer>


    <script>
        var list;
        // console.log(list);
        getProduct();
        
        function getProduct(){
            let xhttp = new XMLHttpRequest();

            xhttp.open("GET","../controllers/blogController.php?id=<?php echo $_GET["id"];?>",true);//Se le puso esto

            xhttp.onreadystatechange = function(){
                
                if(this.readyState === 4){
                    
                    if(this.status === 200){
                    // console.log(this.responseText);
                    list = JSON.parse(this.responseText);
                    // console.log(list);
                    paintProduct(list);
                    }
                    else{
                        console.log("Error");
                    }
                }
            };

        xhttp.send();

        return [];
        }

        function paintProduct(list) {
    // let list = getTweets();
        let html = '';
        // console.log(list);
        // console.log(name);
        html += `<form id="${list.idArticulo}">
      <article class="articulo-blog"><img src="../assets/img/Blog-1.png" alt="" width="300px">
        <h2>${list.tituloArticulo}</h2>
        <p>${list.introArticulo}</p>
        <h3 class"subtitulo-articulo">${list.Sub1_Articulo}</h3>
        <p>${list.Cont1_Articulo}</p>
        <h3 class"subtitulo-articulo">${list.Sub2_Articulo}</h3>
        <p>${list.Cont2_Articulo}</p>
        <h3 class"subtitulo-articulo">${list.Sub3_Articulo}</h3>
        <p>${list.Cont3_Articulo}</p>
      </article>
      </form>`;

        const productInfo = document.getElementsByClassName("articulo-blog")[0];
        productInfo.innerHTML = html;
        }


    </script>
    <?php 
    // include("../views/layouts/modal_opinions.php"); 
    // include("../views/layouts/modal_delete_opinions.php");
    // include("../assets/js/script_product.php");
    ?>
</body>
</html>

<?php
    // echo $_GET["id"];
    // echo $_GET["type"];
?>