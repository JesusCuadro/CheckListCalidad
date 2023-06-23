let divs = ["requerimientos", "diseño", "analisis", "desarrollo", "producto"];
let divIndex = 0;

const anteriorBtn = document.getElementById("anteriorBtn");
anteriorBtn.disabled = true; 

const siguienteBtn = document.getElementById("siguienteBtn");

  function mostrarDivAnterior() {
    divIndex--;
    if (divIndex < 0) {
      divIndex = divs.length - 1;
    }
    mostrarDivActual();
  }

  function mostrarDivSiguiente() {
    divIndex++;
    if (divIndex >= divs.length) {
      divIndex = 0;
    }
    mostrarDivActual();
  }

  function mostrarDivActual() {
    for (let i = 0; i < divs.length; i++) {

      let div = document.getElementById(divs[i]);

      if (i === divIndex) {
        div.style.display = "block";
      } else {
        div.style.display = "none";
      }

      if(divIndex === 0){
        jQuery( document ).ready(function() { 
          jQuery('#anteriorBtn').prop("disabled", true);
       });
       } else{
        jQuery( document ).ready(function() { 
          jQuery('#anteriorBtn').prop("disabled", false);
       });
       }

       if(i === divIndex){
        jQuery( document ).ready(function() { 
          jQuery('#siguienteBtn').prop("disabled", true);
       });
       } else{
        jQuery( document ).ready(function() { 
          jQuery('#siguienteBtn').prop("disabled", false);
       });
       }
    }

  }