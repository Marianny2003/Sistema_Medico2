$(document).ready(function(){

	ajaxCatalagoTabla();
	let mostrar
	function ajaxCatalagoTabla(){
		$.ajax({
			type: "POST",
			url: "",
			dataType: "json",
			data: {mostrar:"catalago"},
			success(data){
				mostrar = $('#tablacatalago').DataTable({
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
			$("#descripcionPato").val(info[0].descripcionPatologia);
			$("#descripcionHabi").val(info[0].descripcionHabPsico);
			$("#descripcionAnte").val(info[0].descripcionAntFam);
			  
			
			}
    })
	
 });

 







});