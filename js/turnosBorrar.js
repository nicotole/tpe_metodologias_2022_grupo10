"use strict"
function borrarTurno() {
  let text = "Desea eliminar el turno seleccionado?"      
  if (confirm(text) == true) {
    window.location.href = "elimarTurno/" + this.dataset.id_turno;
  } else {
    text = "You canceled!";
  }
}
for (const item of document.querySelectorAll('.borrarTurno')) {
  item.addEventListener("click", borrarTurno);
}
  
      

