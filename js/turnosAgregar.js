"use strict"
function setDni() {
    
  let dni = this.options[this.selectedIndex].value;
  let afiliado = this.options[this.selectedIndex].dataset.afiliado;
  document.querySelector("#paciente_dni").value = dni;  
  document.querySelector("#afiliado").value = afiliado;  
    
}
document.querySelector("[name='select_paciente']").addEventListener("change", setDni);