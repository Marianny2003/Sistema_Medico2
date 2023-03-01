 $('#valHistoriaMedica').on('change', function() {

   $.ajax({
        url: '',
        type: 'POST',
        data: {buscarPaciente: $('#valHistoriaMedica').val()},
        success: function(respuesta) {
         console.log(respuesta)
         var seleccionarPaciente = JSON.parse(respuesta)         
         console.log(seleccionarPaciente)
         $("#numHistoriaMedica").val(seleccionarPaciente[0]["numHistoriaMedica"]);
         $("#cedulaPaciente").val(seleccionarPaciente[0]["cedulaPaciente"]);
         $("#nombrePaciente").val(seleccionarPaciente[0]["nombrePaciente"]);
         $("#apellidoPaciente").val(seleccionarPaciente[0]["apellidoPaciente"]);

         }
      });

    })

 
$(document).ready(function() {

      $("#errordescripcionPato").hide();
      $("#errordescripcionHabPsico").hide();
      $("#errordescripcionAntFam").hide();
      $("#errorCedula").hide();


      var errordescripcionPato = false;
      var errordescripcionHabPsico = false;
      var errordescripcionAntFam = false;
      var errorCedula = false;
     
         $("#descripcionPato").focusout(function(){
            campo_1();
         })
          $("#descripcionHabPsico").focusout(function(){
            campo_2();
         })
         $("#descripcionAntFam").focusout(function() {
            campo_3();
         })

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
         

          function campo_1(){
            var campo =  /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var descrip = $("#descripcionPato").val();
            if (campo.test(descrip) && descrip !== '') {
               $("#errordescripcionPato").hide();
               $("#descripcionPato").css("border-bottom","2px solid #008f39");
            } else {
               $("#errordescripcionPato").html("Ingres Solo Caracteres");
               $("#errordescripcionPato").show();
               $("#descripcionPato").css("border-bottom","2px solid #F90A0A");
               errordescripcionPato = true;
            }
         }

          function campo_2(){
            var campo =  /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var descrip = $("#descripcionHabPsico").val();
            if (campo.test(descrip) && descrip !== '') {
               $("#errordescripcionHabPsico").hide();
               $("#descripcionHabPsico").css("border-bottom","2px solid #008f39");
            } else {
               $("#errordescripcionHabPsico").html("Ingrese Solo Caracteres");
               $("#errordescripcionHabPsico").show();
               $("#descripcionHabPsico").css("border-bottom","2px solid #F90A0A");
               errordescripcionHabPsico = true;
            }
         }

          function campo_3(){
            var campo =  /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var descrip = $("#descripcionAntFam").val();
            if (campo.test(descrip) && descrip !== '') {
               $("#errordescripcionAntFam").hide();
               $("#descripcionAntFam").css("border-bottom","2px solid #008f39");
            } else {
               $("#errordescripcionAntFam").html("Ingrese Solo Caracteres");
               $("#errordescripcionAntFam").show();
               $("#descripcionAntFam").css("border-bottom","2px solid #F90A0A");
               errordescripcionAntFam = true;
            }
         }

                  
          $("#enviar").on("click", function(e) {
           

       errorCedula = false;
       errordescripcionPato = false;
       errordescripcionHabPsico = false;
       errordescripcionAntFam = false;
       
            cedula();
            campo_1();
            campo_2();
            campo_3();
           
           

        if (errorCedula === false && errordescripcionPato === false && errordescripcionHabPsico === false && errordescripcionAntFam === false ){
           
           let historiaMedica = $('#valHistoriaMedica').val();
           let descripcionPatologia = $('#descripcionPato').val();
           let descripcionHabPsico = $('#descripcionHabPsico').val();
           let descripcionAntFam = $('#descripcionAntFam').val();
           
           $.ajax({
            type: "POST",
            url: '',
            dataType: "json",
            data:{
               historiaMedica,
               descripcionPatologia,
               descripcionHabPsico,
               descripcionAntFam
             
                }, 
               
               success(registro){
               console.log(registro);
               Swal.fire({ 
                  icon:'success', 
                  title:'Has Registrado existosamente', 
                  html:'<a href="?url=mostrarCatalogo" class="btn"> Ver Registro</a>'});
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


$(document).ready(function() {

      $("#errorCedula").hide();
      $("#errormenarquia").hide();
      $("#errorsixarquia").hide();
      $("#errornps").hide();
      $("#errorcitologia").hide();
      $("#errordescripCito").hide();
      $("#errormamografia").hide();
      $("#errordescripMamo").hide();
      $("#errorgestas").hide();
      $("#errorparas").hide();
      $("#erroraborto").hide();
      

      var errorCedula = false;
      var errormenarquia = false;
      var errorsixarquia = false;
      var errornps = false;
      var errorcitologia = false;      
      var errordescripCito = false;   
      var errormamografia = false;
      var errordescripMamo = false;
      var errorgestas = false;
      var errorparas = false;      
      var erroraborto = false;     
      
         

          $("#valHistoriaMedica2").change(function(){
            cedula();
         });

         $("#menarquia").focusout(function() {
            campo_4();
         })
         $("#sixarquia").focusout(function() {
            campo_5();
          })
         $("#nps").focusout(function() {
            campo_6();
          })
         $("#citologia").focusout(function() {
            campo_7();
             });
         $("#descripCitologia").focusout(function() {
            campo_8();   
         });
           $("#mamografia").focusout(function() {
            campo_9();
         });
         $("#descripMamografia").focusout(function() {
            campo_10();
          });
         $("#gestas").focusout(function() {
            campo_11();
          });
         $("#paras").focusout(function() {
            campo_12();
             });
         $("#aborto").focusout(function() {
            campo_13();   
         });

        


             function cedula() {
         var cedula = $("#valHistoriaMedica2").val();

            if (cedula !== '') {
               $("#errorCedula").html("");
               $("#errorCedula").hide();
               $("#valHistoriaMedica2").removeClass('form-select is-invalid');
               $("#valHistoriaMedica2").addClass('form-select is-valid');
            } else {
               $("#errorCedula").html("Seleccione un paciente");
               $("#errorCedula").show();
               $("#valHistoriaMedica2").removeClass('form-select is-valid');
               $("#valHistoriaMedica2").addClass('form-select is-invalid');
               errorCedula = true;
            }
      
         }
         


         function campo_4() {
            var campo = /^[0-9]{1,2}$/;
            var dato = $("#menarquia").val();
            if (campo.test(dato) && dato !== '') {
               $("#errormenarquia").hide();
               $("#menarquia").css("border-bottom","2px solid #008f39");
            } else {
               $("#errormenarquia").html("Ingrese al menos 1 Digitos");
               $("#errormenarquia").show();
               $("#menarquia").css("border-bottom","2px solid #F90A0A");
               errormenarquia = true;
              
            }
         }

          function campo_5() {
            var campo = /^[0-9]{1,2}$/;
            var dato = $("#sixarquia").val();
            if (campo.test(dato) && dato !== '') {
               $("#errorsixarquia").hide();
               $("#sixarquia").css("border-bottom","2px solid #008f39");
            } else {
               $("#errorsixarquia").html("Ingrese al menos 1 Digitos");
               $("#errorsixarquia").show();
               $("#sixarquia").css("border-bottom","2px solid #F90A0A");
               errorsixarquia = true;
              
            }
         }

              function campo_6(){
            var campo =  /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var descrip = $("#nps").val();
            if (campo.test(descrip) && descrip !== '') {
               $("#errornps").hide();
               $("#nps").css("border-bottom","2px solid #008f39");
            } else {
               $("#errornps").html("Ingrese Solo Caracteres");
               $("#errornps").show();
               $("#nps").css("border-bottom","2px solid #F90A0A");
               errornps = true;
            }
         }

   
         function campo_7() {
            var fechaSeg = Date.parse($("#citologia").val());
            Date.parse($("#citologia").val());
            var hoy = Date.now();
            if (citologia !== '' &&  fechaSeg <= hoy){
             $("#errorcitologia").hide();
               $("#citologia").css("border-bottom","2px solid #008f39");
            } else {
               $("#errorcitologia").html("Seleccione una Fecha Anterior al Dia de Hoy");
               $("#errorcitologia").show();
               $("#citologia").css("border-bottom","2px solid #F90A0A");
               errorcitologia = true;
            }

    }

           function campo_8(){
            var campo =  /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var descrip = $("#descripCitologia").val();
            if (campo.test(descrip) && descrip !== '') {
               $("#errordescripCito").hide();
               $("#descripCitologia").css("border-bottom","2px solid #008f39");
            } else {
               $("#errordescripCito").html("Ingrese Solo Caracteres");
               $("#errordescripCito").show();
               $("#descripCitologia").css("border-bottom","2px solid #F90A0A");
               errordescripCito = true;
            }
         }

          function campo_9() {
            var fechaSeg = Date.parse($("#mamografia").val());
            Date.parse($("#mamografia").val());
            var hoy = Date.now();
            if (mamografia !== '' &&  fechaSeg <= hoy){
             $("#errormamografia").hide();
               $("#mamografia").css("border-bottom","2px solid #008f39");
            } else {
               $("#errormamografia").html("Seleccione una Fecha Anterior al Dia de Hoy");
               $("#errormamografia").show();
               $("#mamografia").css("border-bottom","2px solid #F90A0A");
               errormamografia = true;
            }

    }

           function campo_10(){
            var campo =  /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var descrip = $("#descripMamografia").val();
            if (campo.test(descrip) && descrip !== '') {
               $("#errordescripMamo").hide();
               $("#descripMamografia").css("border-bottom","2px solid #008f39");
            } else {
               $("#errordescripMamo").html("Ingrese Solo Caracteres");
               $("#errordescripMamo").show();
               $("#descripMamografia").css("border-bottom","2px solid #F90A0A");
               errordescripMamo = true;
            }
         }

          function campo_11(){
            var campo =  /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var descrip = $("#gestas").val();
            if (campo.test(descrip) && descrip !== '') {
               $("#errorgestas").hide();
               $("#gestas").css("border-bottom","2px solid #008f39");
            } else {
               $("#errorgestas").html("Ingrese Solo Caracteres o Números");
               $("#errorgestas").show();
               $("#gestas").css("border-bottom","2px solid #F90A0A");
               errorgestas = true;
            }
         }

          function campo_12(){
            var campo =  /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var descrip = $("#paras").val();
            if (campo.test(descrip) && descrip !== '') {
               $("#errorparas").hide();
               $("#paras").css("border-bottom","2px solid #008f39");
            } else {
               $("#errorparas").html("Ingrese Solo Caracteres o Números");
               $("#errorparas").show();
               $("#paras").css("border-bottom","2px solid #F90A0A");
               errorparas = true;
            }
         }

          function campo_13(){
            var campo =  /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\;\(\)\"\@\#\$\=]{1,}$/;
            var descrip = $("#aborto").val();
            if (campo.test(descrip) && descrip !== '') {
               $("#erroraborto").hide();
               $("#aborto").css("border-bottom","2px solid #008f39");
            } else {
               $("#erroraborto").html("Ingrese Solo Caracteres o Números");
               $("#erroraborto").show();
               $("#aborto").css("border-bottom","2px solid #F90A0A");
               erroraborto = true;
            }
         }
    

        
         
          $("#enviar1").on("click", function(e) {
           
      errorCedula = false;
       errormenarquia = false;
       errorsixarquia = false;
       errornps = false;
       errorcitologia = false;      
       errordescripCito = false;   
       errormamografia = false;
       errordescripMamo = false;
       errorgestas = false;
       errorparas = false;      
       erroraborto = false;  
        
            cedula(); 
            campo_4();
            campo_5();
            campo_6();
            campo_7();
            campo_8();
            campo_9();
            campo_10();
            campo_11();
            campo_12();
            campo_13();
           

        if (errorCedula === false && errormenarquia === false && errormenarquia === false && errorsixarquia === false && errornps === false && errordescripCito === false && errormamografia === false && errordescripMamo === false && errorgestas === false && errorparas === false && erroraborto === false){
           
           
           let numHistoriaMedica = $('#valHistoriaMedica2').val();
           let menarquia = $('#menarquia').val();
           let sixarquia = $('#sixarquia').val(); 
           let nps = $('#nps').val();
           let citologia = $('#citologia').val();
           let descripCitologia = $('#descripCitologia').val();
           let mamografia = $('#mamografia').val();
           let descripMamografia = $('#descripMamografia').val();
           let gestas = $('#gestas').val();
           let paras = $('#paras').val();
           let aborto = $('#aborto').val();


           $.ajax({
            type: "POST",
            url: '',
            dataType: "json",
            data:{
               
               numHistoriaMedica,
               menarquia,
               sixarquia,
               nps,
               citologia,
               descripCitologia,
               mamografia,
               descripMamografia,
               gestas,
               paras,
               aborto
                }, 
               
               success(registroCatalogo){
               console.log(registroCatalogo);
               Swal.fire({ 
                  icon:'success', 
                  title:'Has Registrado existosamente', 
                  html:'<a href="?url=mostrarCatalogo" class="btn"> Ver Registro</a>'});
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