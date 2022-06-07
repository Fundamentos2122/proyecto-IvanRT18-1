const citasList = document.getElementsByClassName("citas-container")[0];
// const modalText = document.getElementById("modalText");
const idEdit = document.getElementById("form-edit-admin-id");
const date = document.getElementById("form-edit-admin-date");
const time = document.getElementById("form-edit-admin-time");
const nombre = document.getElementById("form-edit-admin-name");
const email = document.getElementById("form-edit-admin-email");
const tipo = document.getElementById("form-edit-admin-tipo");
const idDelete = document.getElementById("form-delete-user-id");
const modalDeleteUser = document.getElementById("modalDeleteUser");
const verCitasUser = document.getElementById("verCitasUserBtn");
const idUpdate = document.getElementById("form-edit-admin-id");
const modalUpateCita = document.getElementById("modalVerCitasAdmin");
const citasListAdmin = document.getElementById("citas-admin-container");
const btnUpdate = document.getElementById("EditarInfoBtn");


document.addEventListener("DOMContentLoaded", function () {
  // getCitas();
  getUsers();

  let modals = document.getElementsByClassName("modal");

  for (var i = 0; i < modals.length; i++) {
    modals[i].addEventListener("click", function (e) {
      if (e.target === this) {
        this.classList.remove("show");
      }
    });
  }
});


btnUpdate.addEventListener("click", function(){
  actualizaDatos();
});

function actualizaDatos($nombre, $email, $tipo, $citas){
  
}

/* Usuarios */

function getUsers() {
  let xhttp = new XMLHttpRequest();
  xhttp.open("GET", "../controllers/administradorController.php", true);

  xhttp.onreadystatechange = function () {
    if (xhttp.readyState === 4) {
      if (xhttp.status === 200) {
        console.log(xhttp.responseText);
        listUsers = JSON.parse(xhttp.responseText);
        paintUsers(listUsers);
        console.log(listUsers);
      } else {
        console.log("Error");
      }
    }
  };

  xhttp.send();

  return [];
}

function paintUsers(listUsers) {
  let html = "";

  //   console.log('estoy en paintUsers)');
  for (var i = 0; i < listUsers.length; i++) {
    console.log(listUsers[i]);
    html += `<div class="citas-cards">
                  <div class="cita-info" id="${listUsers[i].idCita}">
                      <p>Nombre: ${listUsers[i].nombreUser}</p>
                      <p>Email: ${listUsers[i].emailUser}</p>
                      <p>Tipo: ${listUsers[i].tipoUser}</p>
                  </div>
              <div class="cita-botones">
                      <button class="btn btn-citas" id="verCitasUserBtn" onclick="editInfo(${listUsers[i].id})">Ver info usuario
                      </button>
                      <button class="btn btn-citas" onclick="deleteUser(${listUsers[i].id})">Eliminar usuario
                      </button>
              </div>
          </div>`;
    citasList.innerHTML = html;
  }

  citasList.innerHTML = html;
}

function editUser(id_cita) {
  // console.log(id);
  let xhttp = new XMLHttpRequest();

  xhttp.open(
    "GET",
    "../controllers/misCitasController.php?id_cita=" + id_cita,
    true
  );

  xhttp.onreadystatechange = function () {
    if (this.readyState === 4) {
      if (this.status === 200) {
        // console.log(xhttp.responseText);
        let cita = JSON.parse(xhttp.responseText);
        // console.log(cita);
        // console.log(cita[0].idCita);
        // console.log(cita[0].diaCita);
        // console.log(cita[0].horaCita);
        // console.log(cita[0].userCita);

        idEdit.value = cita[0].idCita;
        date.value = cita[0].diaCita;

        console.log(idEdit.value);
        console.log(date.value);

        modalText.classList.add("show");
      } else {
        console.log("Error");
      }
    }
  };

  xhttp.send();
}

function deleteUser(id) {
    //  console.log(modalDeleteUser);
  idDelete.value = id;
  modalDeleteUser.classList.add("show"); //AGREGO ESTO
}


/* Citas */

function getCitas(id) {
  let xhttp = new XMLHttpRequest();

  xhttp.open("GET", "../controllers/misCitasController.php?id=" + id, true);

  xhttp.onreadystatechange = function () {
    if (xhttp.readyState === 4) {
      if (xhttp.status === 200) {
        console.log(xhttp.responseText);
        let list = JSON.parse(xhttp.responseText);
        paintCitas(list, id);
        console.log(list);
      } else {
        console.log("Error");
      }
    }
  };

  xhttp.send();

  return [];
}

// let usuarios;

function paintCitas(list, id) {
  // let list = getTweets();
  // usuarios = array();
  let html = "";
  //   console.log('estoy en paintCitas)');
  for (var i = 0; i < list.length; i++) {
    console.log(list[i]);
    html += `<div class="citas-admin-container" name="id_cita" value"${list[i].idCita}">
                <h2>Numero de cita: <span>${list[i].idCita}</span></h2>
                <p for="text">Día cita:</p>
                <input type="hidden" name="id_cita" value="${list[i].idCita}" id="form-edit-admin-id_Cita">
                <input type="date" id="form-edit-admin-date" name="date" value="${list[i].diaCita}"></input>
                <p for="text">Hora cita:</p>
                <input type="time" autocomplete="off" id="form-edit-admin-time" name="time" value="${list[i].horaCita}"></input>
            </div>
            <input type="submit" class="btn btn-agenda" value="Guardar" name="EditaCitaBtn" id="EditarInfoBtn" onclick="editCita(${list[i].idCita})"></input>`;
            citasListAdmin.innerHTML = html;
  }
  
  // html += `<input type="submit" class="btn btn-agenda" value="Guardar" name="EditaCitaBtn" id="EditarInfoBtn" onclick="actualizaDatos(${listUsers[2].nombreUser})"></input>`;

  citasListAdmin.innerHTML = html;

}

//Esto es para obtener el texto y empezar a editarlo
function editCita(id) {
  localStorage.clear();
  // console.log(id);
  let xhttp = new XMLHttpRequest();

  xhttp.open("POST","../controllers/administradorController.php?id=" + id,true);//Se le cambia el nombre dependiendo de la categoria

  xhttp.onreadystatechange = function(){
      if(this.readyState === 4){
          if(this.status === 200){
              // console.log(this.responseText);
              let cita = JSON.parse(this.responseText);
              idEdit.value = cita.idCita;
              date.value = cita.diaCita;
              time.value = cita.horaCita;

              // btnSaveEdit.setAttribute("onclick", "saveEdit(" + product.id + ")"); ESTO ES POR AJAX
              modalUpateCita.classList.add("show");
              // console.log(list);
          }
          else{
              console.log("Error");
          }
      }
  };

  xhttp.send();
  localStorage.clear();
}


function editInfo(id) {
//    console.log(id);
//    modalUpateCita.classList.add("show");

  let xhttp = new XMLHttpRequest();

  xhttp.open(
    "GET",
    "../controllers/administradorController.php?id=" + id,
    true
  );

  xhttp.onreadystatechange = function () {
    if (this.readyState === 4) {
      if (this.status === 200) {
         console.log(xhttp.responseText);
        let info = JSON.parse(xhttp.responseText);
        // console.log(info);
        // console.log(info.id);
        // console.log(info.nombreUser);
        // console.log(info.emailUser);
        // console.log(info.tipoUser);

        idEdit.value = info.id;
        nombre.value = info.nombreUser;
        email.value = info.emailUser;
        tipo.value = info.tipoUser;

        modalUpateCita.classList.add("show");
      } else {
        console.log("Error");
      }
    }
  };

  xhttp.send();

  getCitas(id);
}

function deleteCita(id_cita) {
  idDelete.value = id_cita;
  modalDeleteText.classList.add("show"); //AGREGO ESTO
}