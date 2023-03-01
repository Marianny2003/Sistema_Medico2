$(document).ready(function(){

	ajaxCitaTabla();
	let mostrar
	function ajaxCitaTabla(){
		$.ajax({
			type: "POST",
			url: "",
			dataType: "json",
			data: {mostrar:"cita"},
			success(data){
				mostrar = $('#tablacita').DataTable({
					responsive: true,
					data:data
				})
			}
		})
	}

let idDatos;


$(document).on('click', '.infomodal', function(){
	idDatos = this.id;

		
	$.ajax({
		  method: "POST",
		  url: "",
		  dataType: "json",
		  data:{select: "edicion", idDatos},
		  success(info){
			console.log(info);
			$("#cedulaPaciente").val(info[0].cedulaPaciente);
			$("#nombre").val(info[0].nombrePaciente);
			$("#apellido").val(info[0].apellidoPaciente);
			$("#correo").val(info[0].correoPaciente);
			$("#telefono").val(info[0].telefonoPaciente);
			$("#fecha").val(info[0].fechaCita);
			$("#hora").val(info[0].horaCita);
			$("#motivo").val(info[0].motivoCita);	  
			
			}
    })
	
 });

 
let idCita;

$(document).on('click', '.editar', function(){
	idCita = this.id;

	$.ajax({


		method: "POST",
		url: "",
		dataType: "json",
		data:{select1: "editar", idCita},
		success(info){
			console.log(info);
			
			$("#cedula2").val(info[0].cedulaPaciente);
			$("#nombre2").val(info[0].nombrePaciente);
			$("#apellido2").val(info[0].apellidoPaciente);
			$("#correo2").val(info[0].correoPaciente);
			$("#telefono2").val(info[0].telefonoPaciente);
			$("#fecha2").val(info[0].fechaCita);
			$("#hora2").val(info[0].horaCita);
			$("#motivo2").val(info[0].motivoCita);
			$("#numHistoria2").val(info[0].numHistoriaMedica);
		}
	})
});

	$("#editarcita").click((e)=>{


		let cedulaPaciente = $('#cedula2').val();
		let nombrePaciente = $('#nombre2').val();
		let apellidoPaciente = $('#apellido2').val();
		let correoPaciente = $('#correo2').val();
		let telefonoPaciente = $('#telefono2').val();
		let fechaCita = $('#fecha2').val();
		let horaCita = $('#hora2').val();
		let motivoCita = $('#motivo2').val();
		let numHistoriaMedica = $('#numHistoria2').val();

		$.ajax({
			method: "POST",
			url: "",
			dataType: "json",
			data:{
				cedulaPaciente,
				nombrePaciente,
				apellidoPaciente,
				correoPaciente,
				telefonoPaciente,
				fechaCita,
				horaCita,
				motivoCita, 
				numHistoriaMedica,
				idCita
			},
			success(editar){
				console.log(editar);
				mostrar.destroy();
				ajaxCitaTabla();
				$('.editarCita').click();
				$('#borrarFormulario').trigger('reset');
				Swal.fire({ icon: 'success', title: 'Cita Actualizada'});
			}
		})

		e.preventDefault();
	})


let idBorrar;

	$(document).on('click', '.borrarCita', function(){
		idBorrar = this.id;
	})

	$('#borrar').click(()=>{

		$.ajax({
			type: 'POST',
			url: '',
			data: {borrar: 'borrar', idBorrar},
			success(data){
				mostrar.destroy();
				ajaxCitaTabla();
				$('.borrarCita').click();
				Swal.fire({ icon: 'success', title: 'Cita Eliminada' })
			}
		})
	})


let idReporte;


	$(document).on('click', '.reporteCita', function(){
		idReporte = this.id;
	})

	$('#reporte').click(()=>{

		$.ajax({
			type: 'POST',
			url: '',
			data: {select2: 'reporte', idReporte},
			success(data){
				ajaxCitaTabla();
				$('.reporteCita').click();
				window.open('assets/pdf');

				
			}
		})
	})







});