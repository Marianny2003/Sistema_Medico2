$(document).ready(function(){

	ajaxUsuarioTabla();
	let mostrar
	function ajaxUsuarioTabla(){
		$.ajax({
			type: "POST",
			url: "",
			dataType: "json",
			data: {mostrar:"usuario"},
			success(data){
				mostrar = $('#tablausuario').DataTable({
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
			$("#nombreApellido").val(info[0].nombreApellido);
			$("#correo").val(info[0].correo);
			$("#nombreUser").val(info[0].nombreUser);
			$("#password").val(info[0].password);

			}
    })
	
 });

 
let idUsuario;

$(document).on('click', '.editar', function(){
	idUsuario = this.id;

	$.ajax({


		method: "POST",
		url: "",
		dataType: "json",
		data:{select1: "editar", idUsuario},
		success(info){
			console.log(info);
			$("#nombreApellido2").val(info[0].nombreApellido);
			$("#correo2").val(info[0].correo);
			$("#nombreUser2").val(info[0].nombreUser);
			$("#password2").val(info[0].password);
			$("#codUser2").val(info[0].codUser);
		}
	})
});

	$("#editarusuario").click((e)=>{

		let nombreApellido = $('#nombreApellido2').val();
		let correo = $('#correo2').val();
		let nombreUser = $('#nombreUser2').val();
		let password = $('#password2').val();

		$.ajax({
			method: "POST",
			url: "",
			dataType: "json",
			data:{
				nombreApellido,
				correo,
				nombreUser,
				password,
				idUsuario
			},
			success(editar){
				console.log(editar);
				mostrar.destroy();
				ajaxUsuarioTabla();
				$('.editarUsuario').click();
				$('#borrarFormulario').trigger('reset');
				Swal.fire({ icon: 'success', title: 'Usuario Actualizado'});
			}
		})

		e.preventDefault();
	})


let idBorrar;

	$(document).on('click', '.borrarUsuario', function(){
		idBorrar = this.id;
	})

	$('#borrar').click(()=>{

		$.ajax({
			type: 'POST',
			url: '',
			data: {borrar: 'borrar', idBorrar},
			success(data){
				mostrar.destroy();
				ajaxUsuarioTabla();
				$('.borrarUsuario').click();
				Swal.fire({ icon: 'success', title: 'Usuario Eliminado' })
			}
		})
	})







});