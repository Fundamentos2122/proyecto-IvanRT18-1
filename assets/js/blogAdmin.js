let articleList = document.getElementsByClassName("articulo-blog")[0];
const modalEditaNoticias = document.getElementById("modalEditaNoticia");
const modalDeleteNoticia = document.getElementById("modalDeleteNoticia");
const idNoticiaEdit = document.getElementById("form-edit-noticia-id");
const idDeleteNoticia = document.getElementById("form-delete-noticia-id");

const titulo = document.getElementById("form-edit-noticia-titulo");
const introduccion = document.getElementById("form-edit-noticia-intro");
const subtitulo1 = document.getElementById("form-edit-noticia-sub1");
const contenido1 = document.getElementById("form-edit-noticia-con1");
const subtitulo2 = document.getElementById("form-edit-noticia-sub2");
const contenido2 = document.getElementById("form-edit-noticia-con2");
const subtitulo3 = document.getElementById("form-edit-noticia-sub3");
const contenido3 = document.getElementById("form-edit-noticia-con3");


let offset = 3;

document.addEventListener("DOMContentLoaded", function () {
  getArticulos();

  let modals = document.getElementsByClassName("modal");

  console.log(modals);
  for (var i = 0; i < modals.length; i++) {
    modals[i].addEventListener("click", function (e) {
      if (e.target === this) {
        this.classList.remove("show");
      }
    });
  }
});

function getArticulos() {
  let xhttp = new XMLHttpRequest();

  xhttp.open("GET", "../controllers/blogController.php", true);
//   console.log("aqui estoy");
  xhttp.onreadystatechange = function () {
    if (xhttp.readyState === 4) {
      if (xhttp.status === 200) {
        console.log(xhttp.responseText);
        let articulos = JSON.parse(xhttp.responseText);
        paintArticulos(articulos);
        // console.log(list);
      } else {
        console.log("Error");
      }
    }
  };

  xhttp.send();

  return [];
}

function paintArticulos(articulos) {
  let html = "";

  console.log(articulos);
  // console.log(articleList);
  for (var i = 0; i < articulos.length; i++) {
    html += `<div id="${articulos[i].idArticulo}">
      <article class="articulo-blog">
      <a href="../view/noticia.php?id=${articulos[i].idArticulo}"><img src="../assets/img/Blog-1.png" alt="" width="300px"></a>
        <p>${articulos[i].tituloArticulo}</p>
      </article>
      <div class="cita-botones">
                      <button class="btn btn-citas"onclick="editNoticia(${articulos[i].idArticulo})">Editar noticia
                      </button>
                      <button class="btn btn-citas" onclick="deleteNoticia(${articulos[i].idArticulo})">Eliminar noticia
                      </button>
        </div>
      </div>
      `;
  }

  // articleList.innerHTML = html;

  articleList.innerHTML = html;
}

function editNoticia(idArticulo) {
    // console.log(idArticulo);

    // console.log(id);
    let xhttp = new XMLHttpRequest();
  
    xhttp.open("GET","../controllers/blogController.php?id=" + idArticulo,true);
  
    xhttp.onreadystatechange = function(){
        if(this.readyState === 4){
            if(this.status === 200){
                 console.log(xhttp.responseText);
                let noticia = JSON.parse(xhttp.responseText);
                 console.log(noticia);
  
                idNoticiaEdit.value = noticia.idArticulo;
                titulo.value = noticia.tituloArticulo;
                introduccion.value = noticia.introArticulo;
                subtitulo1.value = noticia.Sub1_Articulo;
                contenido1.value = noticia.Cont1_Articulo;
                subtitulo2.value = noticia.Sub2_Articulo;
                contenido2.value = noticia.Cont2_Articulo;
                subtitulo3.value = noticia.Sub3_Articulo;
                contenido3.value = noticia.Cont3_Articulo;

                console.log(idNoticiaEdit.value);
                console.log(titulo.value);
  
                modalEditaNoticias.classList.add("show");
                
            }
            else{
                console.log("Error");
            }
        }
    };
  
    xhttp.send();

  }


  function deleteNoticia(idArticulo) {
    idDeleteNoticia.value = idArticulo;
    modalDeleteNoticia.classList.add("show");
  }