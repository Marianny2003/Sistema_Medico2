$(document).ready(function(){

	tablasAjax();
	let mostrar
	function tablasAjax(){
		$.ajax({
			type: "POST",
			url: "",
			dataType: "json",
			data: {mostrar:"examen"},
			success(data){
				mostrar = $('#consulta').DataTable({
					responsive: true,
					data:data
				})
			}
		})
	}


/* ...Datos Del Paciente...*/

let id;


$(document).on('click', '.datos', function(){
	id = this.id;

	$.ajax({


		method: "POST",
		url: "",
		dataType: "json",
		data:{select: "edicion", id},
		success(info){
			/* ...Informacion del paciente y consulta...*/
			console.log(info);
			$("#valFecha").val(info[0].fechaConsulta);
			$("#valHora").val(info[0].horaConsulta);
			$("#valHistoriaMedica").val(info[0].numHistoriaMedica);
			$("#valCedula").val(info[0].cedulaPaciente);
			$("#valNombre").val(info[0].nombrePaciente);
			$("#valSNombre").val(info[0].segundoNombre);
			$("#valApellido").val(info[0].apellidoPaciente);
			$("#valSApellido").val(info[0].segundoApellido);
			$("#valEdad").val(info[0].edadPaciente);
			$("#valSexo").val(info[0].sexoPaciente);
			
		}
	})
});

let id1;

$(document).on('click', '.examenes', function(){
	id1 = this.id;

	$.ajax({


		method: "POST",
		url: "",
		dataType: "json",
		data:{select1: "fisico", id1},
		success(info){
			
			console.log(info);
			$("#valCodExaFisico").val(info[0].codExamenFisico);
			$("#valExaFisico").val(info[0].descripcionExamenFisico);
			$("#valSigSedente").val(info[0].signoSedente);
			$("#valSigDecubito").val(info[0].signoDecubito);
			$("#valSigBidepestacion").val(info[0].signoBidepestacion);
			$("#valTalla").val(info[0].talla);
			$("#valPeso").val(info[0].peso);
			$("#valIMC").val(info[0].IMC);
			$("#valFrecuRespiratoria").val(info[0].frecuenciaRespiratoria);
			$("#valFrecuCardiaca").val(info[0].frecuenciaCardiaca);
			$("#valTemperatura").val(info[0].temperatura);
			$("#valPreArterial").val(info[0].presionArterial);
			$("#valCodExaFuncional").val(info[0].codExamenFuncional);
			$("#valExaFuncional").val(info[0].descripcionExamenFuncional);
			$("#valCodCardio").val(info[0].codTipoExamen);
			$("#valCheckCardio").val(info[0].nombreTipoExamen);
			$("#valSisCardio").val(info[0].descripcionTipoExamen);
			$("#valCodRespiratorio").val(info[1].codTipoExamen);
			$("#valCheckRespiratorio").val(info[1].nombreTipoExamen);
			$("#valSisRespiratorio").val(info[1].descripcionTipoExamen);
			$("#valCodGastro").val(info[2].codTipoExamen);
			$("#valCheckGastro").val(info[2].nombreTipoExamen);
			$("#valSisGastro").val(info[2].descripcionTipoExamen);
			$("#valCodGenito").val(info[3].codTipoExamen);
			$("#valCheckGenito").val(info[3].nombreTipoExamen);
			$("#valSisGenito").val(info[3].descripcionTipoExamen);
			$("#valCodOsteo").val(info[4].codTipoExamen);
			$("#valCheckOsteo").val(info[4].nombreTipoExamen);
			$("#valSisOsteo").val(info[4].descripcionTipoExamen);
			$("#valCodNeuro").val(info[5].codTipoExamen);
			$("#valCheckNeuro").val(info[5].nombreTipoExamen);
			$("#valSisNeuro").val(info[5].descripcionTipoExamen);
			$("#valCodEndo").val(info[6].codTipoExamen);
			$("#valCheckEndo").val(info[6].nombreTipoExamen);
			$("#valSisEndo").val(info[6].descripcionTipoExamen);
		}
	})
});

	$("#editarexamenes").click((e)=>{

		let codExamenFisico = $('#valCodExaFisico').val();
		let descripcionExamenFisico = $('#valExaFisico').val();
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
		let codExamenFuncional = $('#valCodExaFuncional').val();
		let descripcionExamenFuncional = $('#valExaFuncional').val();
		let codCardio = $('#valCodCardio').val();
		let checkCardio = $('#valCheckCardio').val();
		let sisCardio = $('#valSisCardio').val();
		let codRespiratorio = $('#valCodRespiratorio').val();
		let checkRespiratorio = $('#valCheckRespiratorio').val();
		let sisRespiratorio = $('#valSisRespiratorio').val();
		let codGastro = $('#valCodGastro').val();
		let checkGastro = $('#valCheckGastro').val();
		let sisGastro = $('#valSisGastro').val();
		let codGenito = $('#valCodGenito').val();
		let checkGenito = $('#valCheckGenito').val();
		let sisGenito = $('#valSisGenito').val();
		let codOsteo = $('#valCodOsteo').val();
		let checkOsteo = $('#valCheckOsteo').val();
		let sisOsteo = $('#valSisOsteo').val();
		let codNeuro = $('#valCodNeuro').val();
		let checkNeuro = $('#valCheckNeuro').val();
		let sisNeuro = $('#valSisNeuro').val();
		let codEndo = $('#valCodEndo').val();
		let checkEndo= $('#valCheckEndo').val();
		let sisEndo= $('#valSisEndo').val();
		
		$.ajax({
			method: "POST",
			url: "",
			dataType: "json",
			data:{
				codExamenFisico,
				descripcionExamenFisico,
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
				codExamenFuncional,
				descripcionExamenFuncional,
				codCardio,
				checkCardio,
				sisCardio,
				codRespiratorio,
				checkRespiratorio,
				sisRespiratorio,
				codGastro,
				checkGastro,
				sisGastro,
				codGenito,
				checkGenito,
				sisGenito,
				codOsteo,
				checkOsteo,
				sisOsteo,
				codNeuro,
				checkNeuro,
				sisNeuro,
				codEndo,
				checkEndo,
				sisEndo,
				id1
			},
			success(editar){
				console.log(editar);
				mostrar.destroy();
				tablasAjax();
				$('#limpiarformulario').trigger('reset');
				$('.examenes').click();
				Swal.fire({ icon: 'success', title: 'Examenes actualizados'});
			}

		})

	})




let id2;

$(document).on('click', '.diagnostico', function(){
	id2 = this.id;

	$.ajax({


		method: "POST",
		url: "",
		dataType: "json",
		data:{select2: "diagnostico", id2},
		success(info){
			console.log(info);
			$("#valCodDiagnostico").val(info[0].numDiagnostico);
			$("#valDiagnostico").val(info[0].descripcionDiagnostico);
			$("#valCodTratamiento").val(info[0].numTratamiento);
			$("#valTratamiento").val(info[0].medicamentosTratamiento);
			$("#valIndicaciones").val(info[0].indicacionesTratamiento);

			
		}
	})
});

	$("#editardiagnostico").click((e)=>{

		let codDiagnostico = $('#valCodDiagnostico').val();
		let diagnostico = $('#valDiagnostico').val();
		let codTratamiento = $('#valCodTratamiento').val();
		let tratamiento = $('#valTratamiento').val();
		let indicaciones = $('#valIndicaciones').val();

		$.ajax({
			type: "POST",
			url: '',
			datatype: "json",
			data:{
				codDiagnostico,
				diagnostico,
				codTratamiento,
				tratamiento,
				indicaciones, 
				id2
			},
			success(editar){
				console.log(editar);
				mostrar.destroy();
				tablasAjax();
				$('.diagnostico').click();
				$('#limpiarformulario').trigger('reset');
				Swal.fire({ icon: 'success', title: 'Diagnostico actualizado'});
				
			}
		})

		e.preventDefault();
	})

	let idb;

	$(document).on('click', '.borrarC', function(){
		idb = this.id;
	})

	$('#borrar').click(()=>{

		$.ajax({
			type: 'POST',
			url: '',
			data: {borrar: 'borrar', idb},
			success(data){
				mostrar.destroy();
				tablasAjax();
				$('.borrarC').click();
				Swal.fire({ icon: 'success', title: 'Consulta Eliminada' })
			}
		})
	})

	});