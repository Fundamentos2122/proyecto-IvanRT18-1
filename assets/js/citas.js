const citasList = document.getElementsByClassName("citas-container")[0];
const modalText = document.getElementById("modalText");
const idEdit = document.getElementById("form-edit-id");
const date = document.getElementById("form-edit-date");
const idDelete = document.getElementById("form-delete-id");
const modalDeleteText = document.getElementById("modalDeleteText");

document.addEventListener("DOMContentLoaded", function(){
    getCitas();

    let modals = document.getElementsByClassName("modal");

    for(var i = 0; i < modals.length; i++) {
        modals[i].addEventListener("click", function(e) {
            if(e.target === this){
                this.classList.remove("show");
            }
        });
    }
});


function getCitas() {
  let xhttp = new XMLHttpRequest();

  xhttp.open("GET", "../controllers/misCitasController.php", true);

  xhttp.onreadystatechange = function () {
    if (this.readyState === 4) {
      if (this.status === 200) {
        // console.log(xhttp.responseText);
        let list = JSON.parse(this.responseText);
        paintCitas(list);
        console.log(list);
      } else {
        console.log("Error");
      }
    }
  };

  xhttp.send();

  return [];
}

function paintCitas(list) {
  // let list = getTweets();

  let html = "";

//   console.log('estoy en paintCitas)');
  for (var i = 0; i < list.length; i++) {
      console.log(list[i])
    html += `<div class="citas-cards">
                <div class="cita-info" id="${list[i].idCita}">
                    <p>Día: ${list[i].diaCita}</p>
                    <p>Hora: ${list[i].horaCita}</p>
                </div>
            <div class="cita-botones">
                    <button class="btn btn-citas" onclick="editCita(${list[i].idCita})">Modificar Cita
                    </button>
                    <button class="btn btn-citas" onclick="deleteCita(${list[i].idCita})">Cancelar Cita
                    </button>
            </div>
        </div>`;
        citasList.innerHTML = html;
  }

  citasList.innerHTML = html;
}


function editCita(id_cita) {
  // console.log(id);
  let xhttp = new XMLHttpRequest();

  xhttp.open("GET","../controllers/misCitasController.php?id_cita=" + id_cita,true);

  xhttp.onreadystatechange = function(){
      if(this.readyState === 4){
          if(this.status === 200){
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
              
          }
          else{
              console.log("Error");
          }
      }
  };

  xhttp.send();
}

function deleteCita(id_cita) {
  idDelete.value = id_cita;
  modalDeleteText.classList.add("show");//AGREGO ESTO
}