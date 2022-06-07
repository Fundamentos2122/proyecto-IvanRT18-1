let PerfilIDLi = document.getElementsByName("PerfilID");
let PerfilContainer = document.getElementById("form-perfil-out");

document.addEventListener("DOMContentLoaded", function () {
  getInfoUser();
});

function getInfoUser() {
  $id = PerfilIDLi[0].attributes[2].value;
  //  console.log(PerfilIDLi[0].attributes[2].value);
  // console.log($id);
  // PerfilIDLi[0].attributes[2].value;
  let xhttp = new XMLHttpRequest();
  xhttp.open("GET", "../controllers/perfilController.php?id=" + $id, true);
  xhttp.onreadystatechange = function () {
    if (this.readyState === 4) {
      if (this.status === 200) {
        console.log(xhttp.responseText);
        let user = JSON.parse(xhttp.responseText);
        paintInfoUser(user);
      } else {
        console.log("Error");
      }
    }
  };

  xhttp.send();
}

function paintInfoUser(Usuario) {
  // let list = getTweets();

  let html = "";

  //   console.log('estoy en paintCitas)');
  //   for (var i = 0; i < list.length; i++) {
  console.log(Usuario);
  html += `<form action="../controllers/perfilController.php" method="POST" autocomplete="off" id="${Usuario.id}">
             <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="id" value="${Usuario.id}" id="form-edit-admin-id">
            <div class="container">
            <div class="input-container">
                <input type="text" name="perfil_nombre"
                value="${Usuario.nombreUser}" required>
            </div>
            <div class="input-container">
                <input type="text" name="perfil_correo"
                value="${Usuario.emailUser}" required>
            </div>
            <div class="input-container">
                <input type="password" name="perfil_password" placeholder="Contraseña"
                value="" required>
            </div>
        </div>
        <input type="submit" class="btn btn-submit" name="btnPerfil"></input>
        </form>`;
  PerfilContainer.innerHTML = html;
  //   }

//   PerfilContainer.innerHTML = html;

  editInfoUser(Usuario.id);
}

function editInfoUser(id) {
    // console.log(id);
    let xhttp = new XMLHttpRequest();

    xhttp.open("GET","../controllers/perfilController.php?id=" + id,true);//Se le cambia el nombre dependiendo de la categoria

    xhttp.onreadystatechange = function(){
        if(this.readyState === 4){
            if(this.status === 200){
                // console.log(this.responseText);
                let opinion = JSON.parse(this.responseText);
                // idEdit.value = opinion.id;
                // textAreaEdit.value = opinion.text;
            }
            else{
                console.log("Error");
            }
        }
    };

    xhttp.send();
}