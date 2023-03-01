    $('#valHistoriaMedica').on('change', function() {

   $.ajax({
        url: '',
        type: 'POST',
        data: {buscarPaciente: $('#valHistoriaMedica').val()},
        success: function(respuesta) {
         console.log(respuesta)
         var seleccionarPaciente = JSON.parse(respuesta)         
         console.log(seleccionarPaciente)
         $("#nombrePaciente").val(seleccionarPaciente[0]["nombrePaciente"]);
         $("#apellidoPaciente").val(seleccionarPaciente[0]["apellidoPaciente"]);
         $("#correoPaciente").val(seleccionarPaciente[0]["correoPaciente"]);
         $("#telefonoPaciente").val(seleccionarPaciente[0]["telefonoPaciente"]);

         }
      });

    })

$(document).ready(function() {
      
      $("#error1").hide();
      $("#error2").hide();
      $("#error3").hide();
      $("#error4").hide();
      $("#error5").hide();
      $("#error6").hide();
      $("#error7").hide();
      $("#error8").hide();
      $("#error9").hide();
      $("#errorCedula").hide();

         var error_nombre = false;
         var error_apellido = false;
         var error_edad = false;
         var error_sexo = false;
         var error_fecha = false;
         var error_lugar = false;
         var error_direccion = false;
         var error_estado= false;      
         var error_emergencia = false;
         var errorCedula = false;
         $("#segundonombre").focusout(function(){
            chequeo_nombre();
         });
          $("#segundoapellido").focusout(function(){
            chequeo_apellido();
         });
         $("#edad").focusout(function() {
            chequeo_edad();
         });
         $("#sexo").focusout(function() {
            chequeo_sexo();
         });
         $("#fecha").focusout(function() {
            chequeo_fecha();
         });
         $("#lugar").focusout(function() {
            chequeo_lugar();
          });
         $("#direccion").focusout(function() {
            chequeo_direccion();
          });
         $("#estado").focusout(function() {
            chequeo_estado();
             });
         $("#emergencia").focusout(function() {
            chequeo_emergencia();   

         });

         $("#valHistoriaMedica").change(function(){
            cedula();
         });


         function cedula() {
         var cedula = $("#valHistoriaMedica").val();

            if (cedula !== '') {
               $("#errorCedula").html("");
               $("#errorCedula").hide();
               $("#valHistoriaMedica").removeClass('form-select is-invalid');
               $("#valHistoriaMedica").addClass('form-select is-valid');
            } else {
               $("#errorCedula").html("Seleccione un paciente");
               $("#errorCedula").show();
               $("#valHistoriaMedica").removeClass('form-select is-valid');
               $("#valHistoriaMedica").addClass('form-select is-invalid');
               errorCedula = true;
            }
      
         }

            function chequeo_nombre() {
            var chequeo = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var nombre = $("#segundonombre").val();
            if (chequeo.test(nombre) && nombre !== '') {
               $("#error1").hide();
               $("#segundonombre").css("border-bottom","2px solid #008f39");
            } else {
               $("#error1").html("Solo Caracteres");
               $("#error1").show();
               $("#segundonombre").css("border-bottom","2px solid #F90A0A");
               error_nombre = true;
            }
         }

          function chequeo_apellido() {
            var chequeo = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var apellido = $("#segundoapellido").val();
            if (chequeo.test(apellido) && apellido !== '') {
               $("#error2").hide();
               $("#segundoapellido").css("border-bottom","2px solid #008f39");
            } else {
               $("#error2").html("Solo Caracteres");
               $("#error2").show();
               $("#segundoapellido").css("border-bottom","2px solid #F90A0A");
               error_apellido = true;
            }
         }


         function chequeo_edad() {
            var campo = /^[0-9]{1,2}$/;
            var dato = $("#edad").val();
            if (campo.test(dato) && dato !== '') {
               $("#error3").hide();
               $("#edad").css("border-bottom","2px solid #008f39");
            } else {
               $("#error3").html("Ingrese Solo Digitos");
               $("#error3").show();
               $("#edad").css("border-bottom","2px solid #F90A0A");
               error_edad = true;
              
            }
         }


            function chequeo_sexo() { 
            var sexo = $("#sexo").val();
            if (sexo != 0) {
               $("#error4").hide();
               $("#sexo").css("border-bottom","2px solid #008f39");
            } else {
               $("#error4").html("Sexo Incorrecto");
               $("#error4").show();
               $("#sexo").css("border-bottom","2px solid #F90A0A");
               error_sexo = true;
            }
         }

          function chequeo_fecha() { 
             var fechaSeg = Date.parse($("#fecha").val());
            Date.parse($("#fecha").val());
            var hoy = Date.now();
            if (fecha !== '' &&  fechaSeg <= hoy){
             $("#error5").hide();
               $("#fecha").css("border-bottom","2px solid #008f39");
            } else {
               $("#error5").html("Seleccione la Fecha");
               $("#error5").show();
               $("#fecha").css("border-bottom","2px solid #F90A0A");
               error_fecha = true;
            }         
         }

         function chequeo_lugar() {
            var chequeo = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/ ;
            var lugar = $("#lugar").val();
            if (chequeo.test(lugar) && lugar !== '') {
               $("#error6").hide();
               $("#lugar").css("border-bottom","2px solid #008f39");
            } else {
               $("#error6").html("Solo Caracteres");
               $("#error6").show();
               $("#lugar").css("border-bottom","2px solid #F90A0A");
               error_lugar = true;
            }
         }


         function chequeo_direccion() {
            var chequeo = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/ ;
            var direccion = $("#direccion").val();
            if (chequeo.test(direccion) && direccion !== '') {
               $("#error7").hide();
               $("#direccion").css("border-bottom","2px solid #008f39");
            } else {
               $("#error7").html("Solo Caracteres");
               $("#error7").show();
               $("#direccion").css("border-bottom","2px solid #F90A0A");
               error_direccion = true;
            }
         }
          
         function chequeo_estado() {
            var chequeo = /^[ a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var estado = $("#estado").val();
            if (chequeo.test(estado) && estado !== '') {
               $("#error8").hide();
               $("#estado").css("border-bottom","2px solid #008f39");
            } else {
               $("#error8").html("Solo Caracteres");
               $("#error8").show();
               $("#estado").css("border-bottom","2px solid #F90A0A");
               error_estado = true;
            }
         }

         function chequeo_emergencia() {
            var chequeo = /^[0-9]{11,11}$/;
            var telefono = $("#emergencia").val();
            if (chequeo.test(telefono) && telefono !== '') {
               $("#error9").hide();
               $("#emergencia").css("border-bottom","2px solid #008f39");
            } else {
               $("#error9").html("Al menos 11 digitos");
               $("#error9").show();
               $("#emergencia").css("border-bottom","2px solid #F90A0A");
               error_emergencia = true;
              
            }
         }


          $("#enviar").on("click", function(e) {
             errorCedula = false;
             error_nombre = false;
             error_apellido = false;
             error_edad = false;
             error_sexo = false;
             error_fecha = false;
             error_lugar = false;
             error_direccion = false;
             error_estado = false;
             error_emergencia = false;
           


            cedula();
            chequeo_nombre();
            chequeo_apellido();
            chequeo_edad();
            chequeo_sexo();
            chequeo_fecha();
            chequeo_lugar();
            chequeo_direccion();
            chequeo_estado();
            chequeo_emergencia();
           

           if (errorCedula === false && error_nombre === false && error_apellido === false && error_edad === false 
                && error_sexo === false && error_fecha === false && error_lugar === false && error_direccion === false
                && error_estado === false && error_emergencia === false) {
               
            let numHistoriaMedica = $('#valHistoriaMedica').val();
            let segundoNombre = $('#segundonombre').val();
            let segundoApellido = $('#segundoapellido').val();
            let edadPaciente = $('#edad').val();
            let sexoPaciente = $('#sexo').val();
            let fechaNacimientoPaciente = $('#fecha').val();
            let lugarNacimientoPaciente = $('#lugar').val();
            let direccionPaciente = $('#direccion').val();
            let estado = $('#estado').val();
            let contactoEmergencia = $('#emergencia').val();        

            $.ajax({
            type: "POST",
            url: '',
            dataType: "json",
            data:{  
            numHistoriaMedica,
            segundoNombre,
            segundoApellido,
            edadPaciente,
            sexoPaciente,
            fechaNacimientoPaciente,
            lugarNacimientoPaciente,
            direccionPaciente,
            estado,
            contactoEmergencia           
            },

            success(registroPaciente){
               console.log(registroPaciente);
               Swal.fire({
                   icon:'success', 
                  title:'Has Registrado existosamente', 
                  html:'<a href="?url=mostrarpaciente" class="btn"> Ver Registro</a>'});
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

