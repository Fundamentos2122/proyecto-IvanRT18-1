let btn_agenda = document.getElementById('btn-agenda');


/* Alerta que se muestra cuando se agenda una cita*/
btn_agenda.addEventListener('click', alerta_Cita);

function alerta_Cita() {
  alert("Tu cita se ha registrado correctamentre");
}



let btn_comentario = document.getElementById('btn_comentario');

btn_comentario.addEventListener('click', alerta_Comentario);

function alerta_Comentario() {
  alert("Tu comentario se ha registrado correctamentre");
}



