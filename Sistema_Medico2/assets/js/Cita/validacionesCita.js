$(document).ready(function() {

      $("#errorCe").hide();
      $("#errorNom").hide();
      $("#errorApe").hide();
      $("#errorCo").hide();
      $("#errorTele").hide();
      $("#errorFe").hide();
      $("#errorHo").hide();
      $("#errorMoti").hide();

      var errorCedula = false;
      var errorNombre = false;
      var errorApellido = false;
      var errorCorreo = false;
      var errorTelefono = false;
      var errorFecha = false;
      var errorHora = false;      
      var errorMotivo = false;        

        $("#cedula").focusout(function(){
            campo_cedula();
         })
          $("#nombre").focusout(function(){
            campo_nombre();
         })
         $("#apellido").focusout(function() {
            campo_apellido();
         })
         $("#correo").focusout(function() {
            campo_correo();
         })
         $("#telefono").focusout(function() {
            campo_telefono();
          })
         $("#fecha").focusout(function() {
            campo_fecha();
          })
         $("#hora").focusout(function() {
            campo_hora();
             })
         $("#motivo").focusout(function() {
            campo_motivo();   
         })

        
          function campo_cedula() {
            var campo = /^[0-9]{7,8}$/
            var cedula = $("#cedula").val();
            if (campo.test(cedula) && cedula !== ''){
               $("#errorCe").hide();
               $("#cedula").css("border-bottom","2px solid #008f39");
            }else{
               $("#errorCe").html("Al menos 7 carácteres");
               $("#errorCe").show();
               $("#cedula").css("border-bottom","2px solid #F90A0A");
                errorCedula = true;
            }
         }

          function campo_nombre() {
            var campo =  /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var nombre = $("#nombre").val();
            if (campo.test(nombre) && nombre !== '') {
               $("#errorNom").hide();
               $("#nombre").css("border-bottom","2px solid #008f39");
            } else {
               $("#errorNom").html("Solo caracteres");
               $("#errorNom").show();
               $("#nombre").css("border-bottom","2px solid #F90A0A");
               errorNombre = true;
            }
         }

          function campo_apellido() {
            var campo =  /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var apellido = $("#apellido").val();
            if (campo.test(apellido) && apellido !== '') {
               $("#errorApe").hide();
               $("#apellido").css("border-bottom","2px solid #008f39");
            } else {
               $("#errorApe").html("Solo caracteres");
               $("#errorApe").show();
               $("#apellido").css("border-bottom","2px solid #F90A0A");
               errorApellido = true;
            }
         }

         function campo_correo() {
            var campo = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var correo = $("#correo").val();
            if (campo.test(correo) && correo !== '') {
               $("#errorCo").hide();
               $("#correo").css("border-bottom","2px solid #008f39");
            } else {
               $("#errorCo").html("Debe Ingresar el Correo Correctamente(doc@gmail.com)");
               $("#errorCo").show();
               $("#correo").css("border-bottom","2px solid #F90A0A");
               errorCorreo = true;
            }
         }

         function campo_telefono() {
            var campo = /^[0-9]{11,11}$/;
            var telefono = $("#telefono").val();
            if (campo.test(telefono) && telefono !== '') {
               $("#errorTele").hide();
               $("#telefono").css("border-bottom","2px solid #008f39");
            } else {
               $("#errorTele").html("Al menos 11 digitos");
               $("#errorTele").show();
               $("#telefono").css("border-bottom","2px solid #F90A0A");
               errorTelefono = true;
              
            }
         }

   
         function campo_fecha() {
            var fechaSeg = Date.parse($("#fecha").val());
            Date.parse($("#fecha").val());
            var hoy = Date.now();
            if (fecha !== '' &&  fechaSeg >= hoy){
             $("#errorFe").hide();
               $("#fecha").css("border-bottom","2px solid #008f39");
            } else {
               $("#errorFe").html("Seleccione una Fecha Actual o Porterior");
               $("#errorFe").show();
               $("#fecha").css("border-bottom","2px solid #F90A0A");
               error_fecha = true;
            }

    }
    


           function campo_hora() {
            var campo = /^([01]?[0-9]|2[0-3]):[0-5][0-9]*$/;
            var hora = $("#hora").val();
            if (campo.test(hora) && hora !== '') {
               $("#errorHo").hide();
               $("#hora").css("border-bottom","2px solid #008f39");
            } else {
               $("#errorHo").html("Ingrese la hora");
               $("#errorHo").show();
               $("#hora").css("border-bottom","2px solid #F90A0A");
               errorHora = true;
            }
         }
   
           function campo_motivo() {
            var campo = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{2,}$/;;
            var motivo = $("#motivo").val();
            if (campo.test(motivo) && motivo !== '') {
               $("#errorMoti").hide();
               $("#motivo").css("border-bottom","2px solid #008f39");
            } else {
               $("#errorMoti").html("Solo caracteres");
               $("#errorMoti").show();
               $("#motivo").css("border-bottom","2px solid #F90A0A");
               errorMotivo = true;
            }
         }
         
          $("#enviar").on("click", function(e) {
             errorCedula = false;
             errorNombre = false;
             errorApellido = false;
             errorCorreo = false;
             errorTelefono = false;
             errorFecha = false;
             errorHora = false;      
             errorMotivo = false;
        
            campo_cedula();
            campo_nombre();
            campo_apellido();
            campo_correo();
            campo_telefono();
            campo_fecha();
            campo_hora();
            campo_motivo();
           

        if (errorCedula === false && errorNombre === false && errorApellido === false && errorCorreo === false && errorTelefono === false && errorFecha === false && errorHora === false && errorMotivo === false){
           
           
           let cedulaPaciente = $('#cedula').val();
           let nombrePaciente = $('#nombre').val();
           let apellidoPaciente = $('#apellido').val();
           let correoPaciente = $('#correo').val();
           let telefonoPaciente = $('#telefono').val(); 
           let fechaCita = $('#fecha').val();
           let horaCita = $('#hora').val();
           let motivoCita = $('#motivo').val();

           $.ajax({
            type: "POST",
            url: '',
            dataType: "json",
            data:{
               cedulaPaciente,
               nombrePaciente,
               apellidoPaciente,
               correoPaciente,
               telefonoPaciente,
               fechaCita,
               horaCita,
               motivoCita
                }, 
               
               success(registroCita){
               console.log(registroCita);
               Swal.fire({ 
                  icon:'success', 
                  title:'Has Registrado existosamente', 
                  html:'<a href="?url=consultaCita" class="btn"> Ver Registro</a>'});
               $('#limpiar').trigger('reset');
               $('.cerrar').click();  
             } 

      })
            e.preventDefault();
        }else{
            Swal.fire({
                  icon: 'error', 
                  title: 'Ingresa los datos correctamente',
                  showConfirmButton: false,
                  timer: 3000
               })
            }
            e.preventDefault();
             })
           })
      