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
