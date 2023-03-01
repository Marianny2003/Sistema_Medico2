

 $('.valHistoriaMedica').on('click', function() {

 	
	$.ajax({
		  url: '',
		  type: 'POST',
		  data: {verPaciente: this.value},
		  success: function(respuesta) {
		  	console.log(respuesta)
			var verpaciente = JSON.parse(respuesta)			  
			console.log(verpaciente)
			$("#cedulaPaciente").val(verpaciente[0]["cedulaPaciente"]);
			$("#nombrePaciente").val(verpaciente[0]["nombrePaciente"]);
			$("#segundoNombre").val(verpaciente[0]["segundoNombre"]);
			$("#apellidoPaciente").val(verpaciente[0]["apellidoPaciente"]);
			$("#segundoApellido").val(verpaciente[0]["segundoApellido"]);
			$("#edadPaciente").val(verpaciente[0]["edadPaciente"]);
			$("#sexoPaciente").val(verpaciente[0]["sexoPaciente"]);
			$("#fechaNacimientoPaciente").val(verpaciente[0]["fechaNacimientoPaciente"]);
			$("#lugarNacimientoPaciente").val(verpaciente[0]["lugarNacimientoPaciente"]);
			$("#direccionPaciente").val(verpaciente[0]["direccionPaciente"]);
			$("#estado").val(verpaciente[0]["estado"]);
			$("#correoPaciente").val(verpaciente[0]["correoPaciente"]);
			$("#telefonoPaciente").val(verpaciente[0]["telefonoPaciente"]);
			$("#contactoEmergencia").val(verpaciente[0]["contactoEmergencia"]);
			}
		});

    })

  $('.editarDatos1').on('click', function(e) {
  	e.preventDefault();

	$.ajax({
		  url: '',
		  type: 'POST',
		  data: {verEditarPaciente: this.value},
		  success: function(respuesta) {
		  	console.log(respuesta)
			var editarDatos = JSON.parse(respuesta)			  
			console.log(editarDatos)
			$("#cedulaPaciente2").val(editarDatos[0]["cedulaPaciente"]);
			$("#nombrePaciente2").val(editarDatos[0]["nombrePaciente"]);
			$("#segundoNombre2").val(editarDatos[0]["segundoNombre"]);
			$("#apellidoPaciente2").val(editarDatos[0]["apellidoPaciente"]);
			$("#segundoApellido2").val(editarDatos[0]["segundoApellido"]);
			$("#edadPaciente2").val(editarDatos[0]["edadPaciente"]);
			$("#sexoPaciente2").val(editarDatos[0]["sexoPaciente"]);
			$("#fechaNacimientoPaciente2").val(editarDatos[0]["fechaNacimientoPaciente"]);
			$("#lugarNacimientoPaciente2").val(editarDatos[0]["lugarNacimientoPaciente"]);
			$("#direccionPaciente2").val(editarDatos[0]["direccionPaciente"]);
			$("#estado2").val(editarDatos[0]["estado"]);
			$("#correoPaciente2").val(editarDatos[0]["correoPaciente"]);
			$("#telefonoPaciente2").val(editarDatos[0]["telefonoPaciente"]);
			$("#contactoEmergencia2").val(editarDatos[0]["contactoEmergencia"]);

			}
		});

    })

$('#editarPaciente').submit(function(a){

	a.preventDefault();
	var actualizar = {

		cedulaPaciente:$("#cedulaPaciente2").val(),
		nombrePaciente:$("#nombrePaciente2").val(),
		segundoNombre:$("#segundoNombre2").val(),
		apellidoPaciente:$("#apellidoPaciente2").val(),	
		segundoApellido:$("#segundoApellido2").val(),
		edadPaciente:$("#edadPaciente2").val(),	
		sexoPaciente:$("#sexoPaciente2").val(),
		fechaNacimientoPaciente:$("#fechaNacimientoPaciente2").val(),	
		lugarNacimientoPaciente:$("#lugarNacimientoPaciente2").val(),
		direccionPaciente:$("#direccionPaciente2").val(),
		estado:$("#estado2").val(),
		correoPaciente:$("#correoPaciente2").val(),
		telefonoPaciente:$("#telefonoPaciente2").val(),	
		contactoEmergencia:$("#contactoEmergencia2").val(),
	}

	$.ajax({
		  url: '',
		  type: 'POST',
		  data: actualizar,
		  success: function(respuesta) {
		  	var info = JSON.parse(respuesta)
		  	console.log(info);
		  	if (info["respuesta"] == 1) {
		  		Swal.fire({
				  position: 'top-end',
				  icon: 'success',
				  title: 'Se ha Actualizado, Exitosamente',
				  showConfirmButton: false,
				  timer: 1500
				})

		  	}else{	
				
		  	}

			}
		});

})


 $('.borrarDatos1').on('click', function() {
	console.log("borrar")
 	Swal.fire({
  title: 'Eliminar',
  text: "¿Seguro que quieres Eliminar este Paciente?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si'
}).then((result) => {
  if (result.isConfirmed) {

  	$.ajax({
		  url: '',
		  type: 'POST',
		  data: {borrar: this.value},
		  success: function(respuesta) {
		  	console.log(respuesta)
			var borrar = JSON.parse(respuesta)			  
			console.log(borrar)
			
			}
		});

    Swal.fire(
      'Eliminado!',
      'Su Paciente ha sido eliminado.',
      'success'
    )
  }
})
	

    })

	

		

