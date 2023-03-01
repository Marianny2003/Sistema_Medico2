$(document).ready(function() {
  


    function validarCedula(input, div, mensaje){
  parametro = input.val();
  if (parametro==null||parametro=="") {
    div.text(mensaje+" debe introducir datos.") 
    input.attr("style","border-color: red;")                            
    return false
  }else if (isNaN(parametro)) {
    div.text(mensaje+"solo números.") 
    input.attr("style","border-color: red;")            
    return false
  }else if (parametro.length<7) {
    div.text(mensaje+" Ingrese mínimo 7 caracteres.")
    input.attr("style","border-color: red;")              
    return false
  }else if (parametro.length>10) {
    div.text(mensaje+" No ingrese más de 10 caracteres.")
    input.attr("style","border-color: red;")              
    return false
  }else{
    div.text(" ");
    input.attr("style","border-color: none;")
    input.attr("style","backgraund-image: none;");
    return true
  }                  
}

$("#buscar").keyup(()=> {   validarCedula($("#buscar"),$("#error") ,"Error de cédula,")});


 })


 



     