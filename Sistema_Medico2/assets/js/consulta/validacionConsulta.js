 

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

$(document).ready(function(){


	$("#errorFecha").hide();
	$("#errorHora").hide();
	$("#errorCedula").hide();
	
	$("#errorExaFuncional").hide();
	$("#errorSisCardio").hide();
	$("#errorSisRespiratorio").hide();
	$("#errorSisGastro").hide();
	$("#errorSisGenito").hide();
	$("#errorSisOsteo").hide();
	$("#errorSisNeuro").hide();
	$("#errorSisEndo").hide();

	$("#errorExaFisico").hide();
	$("#errorSigSedente").hide();
	$("#errorSigDecubito").hide();
	$("#errorSigBidepestacion").hide();
	$("#errorTalla").hide();
	$("#errorPeso").hide();
	$("#errorIMC").hide();
	$("#errorFrecuRespiratoria").hide();
	$("#errorFrecuCardiaca").hide();
	$("#errorTemperatura").hide();
	$("#errorPreArterial").hide();

	$("#errorDiagnostico").hide();
	$("#errorTratamiento").hide();
	$("#errorIndicaciones").hide();

	var errorFecha = false;
	var errorHora = false;
	var errorCedula = false;


	var errorExaFuncional = false;
	var errorSisCardio = false;
	var errorSisRespiratorio = false;
	var errorSisGastro = false;
	var errorSisGenito = false;
	var errorSisOsteo = false;
	var errorSisNeuro = false;
	var errorSisEndo = false;

	var errorExaFisico = false;
	var errorSigDecubito = false;
	var errorSigSedente = false;
	var errorSigBidepestacion = false;
	var errorTalla = false;
	var errorPeso = false;
	var errorIMC = false;
	var errorFrecuRespiratoria = false;
	var errorFrecuCardiaca = false;
	var errorTemperatura = false;
	var errorPreArterial = false;

	var errorDiagnostico = false;
	var errorIndicaciones = false;
	var errorTratamiento = false;


	$("#valFecha").change(function(){
    	fecha();
    });

    $("#valHora").focusout(function(){
    	hora();
    });

    $("#valHistoriaMedica").change(function(){
    	cedula();
    });

	$("#valExaFuncional").focusout(function(){
    	exaFuncional();
    });

   $("#valSisCardio").focusout(function(){
    	sisCardio();
    });

   $("#valSisRespiratorio").focusout(function(){
    	sisRespiratorio();
    });

   $("#valSisGastro").focusout(function(){
    	sisGastro();
    });

   $("#valSisGenito").focusout(function(){
    	sisGenito();
    });

   $("#valSisOsteo").focusout(function(){
    	sisOsteo();
    });

   $("#valSisNeuro").focusout(function(){
    	sisNeuro();
    });

   $("#valSisEndo").focusout(function(){
    	sisEndo();
    });

   $("#valExaFisico").focusout(function(){
    	exaFisico();
    });

   $("#valSigSedente").focusout(function(){
    	sigSedente();
    });

   $("#valSigDecubito").focusout(function(){
    	sigDecubito();
    });

   $("#valSigBidepestacion").focusout(function(){
    	sigBidepestacion();
    });

   $("#valTalla").focusout(function(){
    	talla();
    });

   $("#valPeso").focusout(function(){
    	peso();
    });

   $("#valIMC").focusout(function(){
    	IMC();
    });

   $("#valFrecuRespiratoria").focusout(function(){
    	frecuRespiratoria();
    });

   $("#valFrecuCardiaca").focusout(function(){
    	frecuCardiaca();
    });

   $("#valTemperatura").focusout(function(){
    	temperatura();
    });

   $("#valPreArterial").focusout(function(){
    	preArterial();
    });

   $("#valDiagnostico").focusout(function(){
    	diagnostico();
    });

   $("#valTratamiento").focusout(function(){
    	tratamiento();
    });

   $("#valIndicaciones").focusout(function(){
    	indicaciones();
    });


	   function fecha() {
            var fechaSeg = Date.parse($("#valFecha").val());
            Date.parse($("#valFecha").val());
            var hoy = Date.now();
            if (fecha !== '' &&  fechaSeg <= hoy){
               $("#errorFecha").html("");
               $("#valFecha").css("border-bottom","2px solid #008f39");
            } else {
               $("#errorFecha").html("Seleccione la Fecha");
               $("#errorFecha").show();
               $("#valFecha").css("border-bottom","2px solid #F90A0A");
               errorfecha = true;
            }
   		}

     function hora() {
		var validacion = /^([01]?[0-9]|2[0-3]):[0-5][0-9]*$/;
		var hora = $("#valHora").val();
		if (validacion.test(hora) && hora !== '') {
		   $("#errorHora").html("");
		   $("#valHora").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorHora").html("Ingrese una hora");
		   $("#errorHora").show();
		   $("#valHora").css("border-bottom","2px solid #F90A0A");
		   errorHora = true;
		}
         }

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

    function exaFuncional() {
		var validacion = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{1,}$/;
		var funcional = $("#valExaFuncional").val();
		if (validacion.test(funcional) && funcional !== '') {
		   $("#errorExaFuncional").html("");
		   $("#valExaFuncional").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorExaFuncional").html("Realice el examen funcional");
		   $("#errorExaFuncional").show();
		   $("#valExaFuncional").css("border-bottom","2px solid #F90A0A");
		   errorExaFuncional = true;
		}
         }

    function sisCardio() {
		var validacion = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{1,}$/;
		var cardio = $("#valSisCardio").val();
		if (cardio == '') {
		   $("#errorSisCardio").html("");
		   $("#valSisCardio").css("border-bottom","2px solid #008f39");
		} else if(validacion.test(cardio)){
			$("#errorSisCardio").html("");
		    $("#valSisCardio").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorSisCardio").html("Ingrese solo valores validos");
		   $("#errorSisCardio").show();
		   $("#valSisCardio").css("border-bottom","2px solid #F90A0A");
		   errorSisCardio = true;
		}
         }

    function sisRespiratorio() {
		var validacion = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{1,}$/;
		var respiratorio = $("#valSisRespiratorio").val();
		if (respiratorio == '') {
		   $("#errorSisRespiratorio").html("");
		   $("#valSisRespiratorio").css("border-bottom","2px solid #008f39");
		} else if(validacion.test(respiratorio)){
			$("#errorSisRespiratorio").html("");
		    $("#valSisRespiratorio").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorSisRespiratorio").html("Ingrese solo valores validos");
		   $("#errorSisRespiratorio").show();
		   $("#valSisRespiratorio").css("border-bottom","2px solid #F90A0A");
		   errorSisRespiratorio = true;
		}
         }

    function sisGastro() {
		var validacion = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{1,}$/;
		var gastro = $("#valSisGastro").val();
		if (gastro == '') {
		   $("#errorSisGastro").html("");
		   $("#valSisGastro").css("border-bottom","2px solid #008f39");
		} else if(validacion.test(gastro)){
			$("#errorSisGastro").html("");
		    $("#valSisGastro").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorSisGastro").html("Ingrese solo valores validos");
		   $("#errorSisGastro").show();
		   $("#valSisGastro").css("border-bottom","2px solid #F90A0A");
		   errorSisGastro = true;
		}
         }

    function sisGenito() {
		var validacion = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{1,}$/;
		var genito = $("#valSisGenito").val();
		if (genito == '') {
		   $("#errorSisGenito").html("");
		   $("#valSisGenito").css("border-bottom","2px solid #008f39");
		} else if(validacion.test(genito)){
			$("#errorSisGenito").html("");
		    $("#valSisGenito").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorSisGenito").html("Ingrese solo valores validos");
		   $("#errorSisGenito").show();
		   $("#valSisGenito").css("border-bottom","2px solid #F90A0A");
		   errorSisGenito = true;
		}
         }

    function sisOsteo() {
		var validacion = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{1,}$/;
		var osteo = $("#valSisOsteo").val();
		if (osteo == '') {
		   $("#errorSisOsteo").html("");
		   $("#valSisOsteo").css("border-bottom","2px solid #008f39");
		} else if(validacion.test(osteo)){
			$("#errorSisOsteo").html("");
		    $("#valSisOsteo").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorSisOsteo").html("Ingrese solo valores validos");
		   $("#errorSisOsteo").show();
		   $("#valSisOsteo").css("border-bottom","2px solid #F90A0A");
		   errorSisOsteo = true;
		}
         }

    function sisNeuro() {
		var validacion = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{1,}$/;
		var neuro = $("#valSisNeuro").val();
		if (neuro == '') {
		   $("#errorSisNeuro").html("");
		   $("#valSisNeuro").css("border-bottom","2px solid #008f39");
		} else if(validacion.test(neuro)){
			$("#errorSisNeuro").html("");
		    $("#valSisNeuro").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorSisNeuro").html("Ingrese solo valores validos");
		   $("#errorSisNeuro").show();
		   $("#valSisNeuro").css("border-bottom","2px solid #F90A0A");
		   errorSisNeuro = true;
		}
         }

    function sisEndo() {
		var validacion = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{1,}$/;
		var endo = $("#valSisEndo").val();
		if (endo == '') {
		   $("#errorSisEndo").html("");
		   $("#valSisEndo").css("border-bottom","2px solid #008f39");
		} else if(validacion.test(endo)){
			$("#errorSisEndo").html("");
		    $("#valSisEndo").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorSisEndo").html("Ingrese solo valores validos");
		   $("#errorSisEndo").show();
		   $("#valSisEndo").css("border-bottom","2px solid #F90A0A");
		   errorSisEndo = true;
		}
         }

   /*Examen Fisico*/

    function exaFisico() {
		var validacion = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{1,}$/;
		var fisico = $("#valExaFisico").val();
		if (validacion.test(fisico) && fisico !== '') {
		   $("#errorExaFisico").html("");
		   $("#valExaFisico").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorExaFisico").html("Realice el examen fìsico");
		   $("#errorExaFisico").show();
		   $("#valExaFisico").css("border-bottom","2px solid #F90A0A");
		   errorExaFisico = true;
		}
         }

    function sigSedente() {
		var validacion = /^[0-9\s\*\/\-]{1,}$/;
		var sedente = $("#valSigSedente").val();
		if (validacion.test(sedente) && sedente !== '') {
		   $("#errorSigSedente").html("");
		   $("#valSigSedente").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorSigSedente").html("Ingrese los datos correctamente");
		   $("#errorSigSedente").show();
		   $("#valSigSedente").css("border-bottom","2px solid #F90A0A");
		   errorSigSedente = true;
		}
         }

    function sigDecubito() {
		var validacion = /^[0-9\s\*\/\-]{1,}$/;
		var decubito = $("#valSigDecubito").val();
		if (validacion.test(decubito) && decubito !== '') {
		   $("#errorSigDecubito").html("");
		   $("#valSigDecubito").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorSigDecubito").html("Ingrese los datos correctamente");
		   $("#errorSigDecubito").show();
		   $("#valSigDecubito").css("border-bottom","2px solid #F90A0A");
		   errorSigDecubito = true;
		}
         }

    function sigBidepestacion() {
		var validacion = /^[0-9\s\*\/\-]{1,}$/;
		var bidepestacion = $("#valSigBidepestacion").val();
		if (validacion.test(bidepestacion) && bidepestacion !== '') {
		   $("#errorSigBidepestacion").html("");
		   $("#valSigBidepestacion").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorSigBidepestacion").html("Ingrese los datos correctamente");
		   $("#errorSigBidepestacion").show();
		   $("#valSigBidepestacion").css("border-bottom","2px solid #F90A0A");
		   errorSigBidepestacion = true;
		}
         }

    function talla() {
		var validacion = /^[0-9]{1,20}$/;
		var validacion2 = /^[0-9]+.[0-9]{1,20}$/;
		var talla = $("#valTalla").val();
		if (validacion.test(talla) && talla !== '') {
		   $("#errorTalla").html("");
		   $("#valTalla").css("border-bottom","2px solid #008f39");
		} else if(validacion2.test(talla) && talla !== ''){
		   $("#errorTalla").html("");
		   $("#valTalla").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorTalla").html("Ingrese la talla");
		   $("#errorTalla").show();
		   $("#valTalla").css("border-bottom","2px solid #F90A0A");
		   errorTalla = true;
		}
         }

    function peso() {
		var validacion = /^[0-9]{1,20}$/;
		var validacion2 = /^[0-9]+.[0-9]{1,20}$/;
		var peso = $("#valPeso").val();
		if (validacion.test(peso) && peso !== '') {
		   $("#errorPeso").html("");
		   $("#valPeso").css("border-bottom","2px solid #008f39");
		} else if(validacion2.test(peso) && peso !== ''){
		   $("#errorPeso").html("");
		   $("#valPeso").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorPeso").html("Ingrese el peso");
		   $("#errorPeso").show();
		   $("#valPeso").css("border-bottom","2px solid #F90A0A");
		   errorPeso = true;
		}
         }


    function IMC() {
		var validacion = /^[0-9]{1,20}$/;
		var validacion2 = /^[0-9]+.[0-9]{1,20}$/;
		var IMC = $("#valIMC").val();
		if (validacion.test(IMC) && IMC !== '') {
		   $("#errorIMC").hide();
		   $("#valIMC").css("border-bottom","2px solid #008f39");
		} else if(validacion2.test(IMC) && IMC !== ''){
			$("#errorIMC").hide();
		   $("#valIMC").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorIMC").html("Ingrese el Ìndice de masa corporal");
		   $("#errorIMC").show();
		   $("#valIMC").css("border-bottom","2px solid #F90A0A");
		   errorIMC = true;
		}
         }

    function frecuRespiratoria() {
		var validacion = /^[0-9]{1,20}$/;
		var frecuRespiratoria = $("#valFrecuRespiratoria").val();
		if (validacion.test(frecuRespiratoria) && frecuRespiratoria !== '') {
		   $("#errorFrecuRespiratoria").html("");
		   $("#valFrecuRespiratoria").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorFrecuRespiratoria").html("Ingrese la frecuencia respiratoria");
		   $("#errorFrecuRespiratoria").show();
		   $("#valFrecuRespiratoria").css("border-bottom","2px solid #F90A0A");
		   errorFrecuRespiratoria = true;
		}
         }

    function frecuCardiaca() {
		var validacion = /^[0-9]{1,20}$/;
		var frecuCardiaca = $("#valFrecuCardiaca").val();
		if (validacion.test(frecuCardiaca) && frecuCardiaca !== '') {
		   $("#errorFrecuCardiaca").html("");
		   $("#valFrecuCardiaca").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorFrecuCardiaca").html("Ingrese la frecuencia cardiaca");
		   $("#errorFrecuCardiaca").show();
		   $("#valFrecuCardiaca").css("border-bottom","2px solid #F90A0A");
		   errorFrecuCardiaca = true;
		}
         }

    function temperatura() {
		var validacion = /^[0-9]{1,20}$/;
		var validacion2 = /^[0-9]+.[0-9]{1,20}$/;
		var temperatura = $("#valTemperatura").val();
		if (validacion.test(temperatura) && temperatura !== '') {
		   $("#errorTemperatura").html("");
		   $("#valTemperatura").css("border-bottom","2px solid #008f39");
		} else if(validacion2.test(temperatura) && temperatura !== ''){
		   $("#errorTemperatura").html("");
		   $("#valTemperatura").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorTemperatura").html("Ingrese la temperatura");
		   $("#errorTemperatura").show();
		   $("#valTemperatura").css("border-bottom","2px solid #F90A0A");
		   errorTemperatura = true;
		}
         }

    function preArterial() {
		var validacion = /^[0-9]+-[0-9]{1,20}$/;
		var preArterial = $("#valPreArterial").val();
		if (validacion.test(preArterial) && preArterial !== '') {
		   $("#errorPreArterial").hide();
		   $("#valPreArterial").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorPreArterial").html("Ingrese la presiòn arterial");
		   $("#errorPreArterial").show();
		   $("#valPreArterial").css("border-bottom","2px solid #F90A0A");
		   errorPreArterial = true;
		}
         }

    function diagnostico() {
		var validacion = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{1,}$/;
		var diagnostico = $("#valDiagnostico").val();
		if (validacion.test(diagnostico) && diagnostico !== '') {
		   $("#errorDiagnostico").html("");
		   $("#valDiagnostico").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorDiagnostico").html("Ingrese un diagnòstico");
		   $("#errorDiagnostico").show();
		   $("#valDiagnostico").css("border-bottom","2px solid #F90A0A");
		   errorDiagnostico = true;
		}
         }

    function tratamiento() {
		var validacion = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{1,}$/;
		var tratamiento = $("#valTratamiento").val();
		if (validacion.test(tratamiento) && tratamiento !== '') {
		   $("#errorTratamiento").html("");
		   $("#valTratamiento").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorTratamiento").html("Ingrese un tratamiento");
		   $("#errorTratamiento").show();
		   $("#valTratamiento").css("border-bottom","2px solid #F90A0A");
		   errorTratamiento = true;
		}
         }

    function indicaciones() {
		var validacion = /^[a-zA-Z0-9À-ÿ\s\*\/\-\_\.\,\;\(\)\"\@\#\$\=]{1,}$/;
		var indicaciones = $("#valIndicaciones").val();
		if (validacion.test(indicaciones) && indicaciones !== '') {
		   $("#errorIndicaciones").html("");
		   $("#valIndicaciones").css("border-bottom","2px solid #008f39");
		} else {
		   $("#errorIndicaciones").html("Ingrese las indicaciones");
		   $("#errorIndicaciones").show();
		   $("#valIndicaciones").css("border-bottom","2px solid #F90A0A");
		   errorIndicaciones = true;
		}
         }



    



	$("#enviar").on("click", function(e){


		errorFecha = false;
		errorHora = false;
		errorCedula = false;
		errorExaFuncional = false;
		errorSisCardio = false;
		errorSisRespiratorio = false;
		errorSisGastro = false;
		errorSisGenito = false;
		errorSisOsteo = false;
		errorSisNeuro = false;
		errorSisEndo = false;
		errorExaFisico = false;
		errorSigSedente = false;
		errorSigDecubito = false;
		errorSigBidepestacion = false;
		errorTalla = false;
		errorPeso = false;
		errorIMC = false;
		errorFrecuRespiratoria = false;
		errorFrecuCardiaca = false;
		errorTemperatrura = false;
		errorPreArterial = false;
		errorDiagnostico = false;
		errorTratamiento = false;
		errorIndicaciones = false;

		fecha();
		hora();
		cedula();
		exaFuncional();
		sisCardio();
		sisRespiratorio();
		sisGastro();
		sisGenito();
		sisOsteo();
		sisNeuro();
		sisEndo();
		exaFisico();
		sigSedente();
		sigDecubito();
		sigBidepestacion();
		talla();
		peso();
		IMC();
		frecuRespiratoria();
		frecuCardiaca();
		temperatura();
		preArterial();
		diagnostico();
		tratamiento();
		indicaciones();

		if (errorExaFuncional === false && errorSisCardio === false && errorSisRespiratorio === false
		 && errorSisGastro === false && errorSisGenito === false && errorSisOsteo === false && errorSisNeuro === false && errorSisEndo === false
		 && errorExaFisico === false && errorSigSedente === false && errorSigDecubito === false && errorSigBidepestacion === false && errorTalla === false && errorPeso === false 
		 && errorIMC === false && errorFrecuRespiratoria === false && errorFrecuCardiaca === false && errorTemperatrura === false 
		 && errorPreArterial === false && errorDiagnostico === false && errorTratamiento === false && errorIndicaciones === false) {


		let fechaConsulta = $('#valFecha').val();
		let horaConsulta = $('#valHora').val();
		let historiaMedica = $('#valHistoriaMedica').val()
		let exaFuncional = $('#valExaFuncional').val();
		let checkCardio = $('#valCheckCardio').val();
		let sisCardio = $('#valSisCardio').val();
		let checkRespiratorio = $('#valCheckRespiratorio').val();
		let sisRespiratorio = $('#valSisRespiratorio').val();
		let checkGastro = $('#valCheckGastro').val();
		let sisGastro = $('#valSisGastro').val();
		let checkGenito = $('#valCheckGenito').val();
		let sisGenito = $('#valSisGenito').val();
		let checkOsteo = $('#valCheckOsteo').val();
		let sisOsteo = $('#valSisOsteo').val();
		let checkNeuro = $('#valCheckNeuro').val();
		let sisNeuro = $('#valSisNeuro').val();
		let checkEndo = $('#valCheckEndo').val();
		let sisEndo = $('#valSisEndo').val();
		let exaFisico = $('#valExaFisico').val();
		let sigSedente = $('#valSigSedente').val();
		let sigDecubito = $('#valSigDecubito').val();
		let sigBidepestacion = $('#valSigBidepestacion').val();
		let talla = $('#valTalla').val();
		let peso = $('#valPeso').val();
		let IMC = $('#valIMC').val();
		let frecuRespiratoria = $('#valFrecuRespiratoria').val();
		let frecuCardiaca = $('#valFrecuCardiaca').val();
		let temperatura = $('#valTemperatura').val();
		let preArterial = $('#valPreArterial').val();
		let exaPrevio = $('#valExaPrevio').val()
		let diagnostico = $('#valDiagnostico').val();
		let tratamiento = $('#valTratamiento').val();
		let indicaciones = $('#valIndicaciones').val();



			$.ajax({

				type: "POST",
				url: '',
				dataType: "json",
				data:{
				fechaConsulta,
				horaConsulta,
				historiaMedica,
				exaFuncional,
				checkCardio,
				sisCardio,
				checkRespiratorio,
				sisRespiratorio,
				checkGastro,
				sisGastro,
				checkGenito,
				sisGenito,
				checkOsteo,
				sisOsteo,
				checkNeuro,
				sisNeuro,
				checkEndo,
				sisEndo,
				exaFisico,
				sigSedente,
				sigDecubito,
				sigBidepestacion,
				talla,
				peso,
				IMC,
				frecuRespiratoria,
				frecuCardiaca,
				temperatura,
				preArterial,
				exaPrevio,
				diagnostico,
				tratamiento,
				indicaciones
				},

				success(registro){
					console.log(registro);
					Swal.fire({ 
						icon: 'success', 
						title: 'Consulta realizada de manera exitosa',
						html: '<a href="?url=mostrarConsulta" class="btn btn-success">Ver Consultas Realizadas</a>',
						showConfirmButton: false,
					});

					$('#limpiar').trigger('reset');
					$('.cerrar').click();
				
				}	

			})
			e.preventDefault();
			}else{
				Swal.fire({
						position: 'top-end',
						icon: 'error', 
						title: 'Ingresa los datos correctamente',
						showConfirmButton: false,
						timer: 2000
					})
				
			}
			e.preventDefault();

           })

		})