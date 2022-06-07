let articleList = document.getElementsByClassName("articulo-blog")[0];

let offset = 3;

document.addEventListener("DOMContentLoaded", function () {
  getArticulos();
});

function getArticulos() {
  let xhttp = new XMLHttpRequest();

  xhttp.open("GET", "../controllers/blogController.php", true);
console.log('aqui estoy');
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
  let html = '';

  console.log(articulos);
  // console.log(articleList);
  for(var i = 0; i < articulos.length; i++) {
    html += `<form id="${articulos[i].idArticulo}">
      <article class="articulo-blog">
      <a href="../view/noticia.php?id=${articulos[i].idArticulo}"><img src="../assets/img/Blog-1.png" alt="" width="300px"></a>
        <p>${articulos[i].tituloArticulo}</p>
      </article>
      </form>`;
  }
  
  // articleList.innerHTML = html;

  articleList.innerHTML = html;
}
