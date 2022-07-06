"use strict";
function setMedico() {
  let selectObra = document.querySelector("[name='select_obra']").value;
  let selectEspecialidad = document.querySelector("[name='select_especialidad']").value;
    let medicos = Array.from(
      document.querySelector("[name='select_medico']").options).forEach(function (item) {
    if(selectEspecialidad == "" && selectObra == ""){
        item.hidden = false;
    }else{
        if (selectObra != "" && selectEspecialidad == "") {
          if (item.dataset.obra != selectObra) {
            item.hidden = true;
          } else {
            item.hidden = false;
          }
        }else if (selectObra == "" && selectEspecialidad != "") {
          if (item.dataset.especialidad != selectEspecialidad) {
            item.hidden = true;
          }else {
            item.hidden = false;
          }
        }else {
          if (item.dataset.especialidad != selectEspecialidad || item.dataset.obra != selectObra){
            item.hidden = true;
          }else {
            item.hidden = false;
          }
        }       
    }
    });
    if(Array.from(document.querySelector("[name='select_medico']").options).filter(op=>op.hidden == false).length == 0){
        document.querySelectorAll(".alertConfirmacion")[0].classList.remove("hidden");
    }else{
        document.querySelectorAll(".alertConfirmacion")[0].classList.add("hidden");
    }
}
function cobraDiferencial(){
    let diferencial = this.options[this.selectedIndex].dataset.diferencial;
    if(diferencial == 1){
        document.querySelectorAll(".alertConfirmacion")[2].classList.remove("hidden");
    }else{
        document.querySelectorAll(".alertConfirmacion")[2].classList.add("hidden");
    }
}

document.querySelector("[name='select_medico']").addEventListener("change", cobraDiferencial);

function distintaObraSocial(){
  let obraMedico = document.querySelector("[name='select_medico']").options[this.selectedIndex].dataset.obra;
  let obraPaciente = document.querySelector("#obra_paciente").value;
  if(obraMedico == obraPaciente){
      document.querySelectorAll(".alertConfirmacion")[1].classList.add("hidden");
  }else{
      document.querySelectorAll(".alertConfirmacion")[1].classList.remove("hidden");
  }
}

document.querySelector("[name='select_medico']").addEventListener("change", distintaObraSocial);

Array.from(
  document.querySelector("#formPaciente").getElementsByTagName("select")
).forEach(function (item) {
  if (item.name != "select_medico") {
    item.addEventListener("change", setMedico);
  }
});
