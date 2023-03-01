<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- Links Bootstrap -->
	    <link rel="stylesheet" href="assets/bootstrap/bootstrap1.css">
		<!-- Links Css -->
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
		<!-- Links Iconos -->
		<link rel="icon" type="image/x-icon" href="assets/img/logo.png">
		<title>HOME</title>
	</head>
	<body>

	<div class="opacity"></div> 
	  <div class="section">
	    <div class="container">
	      <div class="row full-height justify-content-center">
	        <div class="col-12 text-center align-self-center py-5">
	          <div class="section pb-5 pt-5 pt-sm-2 text-center">
	            <h6 class="mb-0 pb-3"><span>INICIAR SESIÓN</span><span>REGISTRARSE</span></h6>
	                  <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
	                  <label for="reg-log"></label>
	            <div class="card-3d-wrap mx-auto">
	              <div class="card-3d-wrapper">
	                <div class="card-front">
	                  <div class="center-wrap">
	                    <div class="section text-center">
						     <table align="center" >
						    <tr>
						      <td><div align="left"><img src="assets/img/logo.png" width="90"></div></td>
						      <td></td>
						      <td></td>
						      <td></td>
						      <td></td>
						      <td><h4 align="center"><h4 class="mb-4 pb-3">Iniciar Sesión</h4>
						      </h4></td>
						      <td></td>
						      <td></td>
						      <td></td>
						      <td></td>
						      <td><div align="right"><img src="assets/img/logo2.png" width="90"></div></td>
						    </tr>
						   </table>
						 <br>
						 <div><form method="POST">
						 	<div class="form-group">
						 		<input type="text" name="usuario" class="form-style" placeholder="Usuario" id="loguser" autocomplete="off">
						 		<i class="input-icon uil uil-at"></i>
						 	</div>
						 	<div class="form-group mt-2">
						 		<input type="password" name="password" class="form-style" placeholder="Contraseña" id="logpass" autocomplete="off">
						 		<i class="input-icon uil uil-lock-alt"></i>
						 		
						 	</div>
						 	<input type="submit" name="entrar" class="btn mt-4" value="Entrar" id="entrar1">
						 	<p class="mb-0 mt-4 text-center" id="exampleModalLabel"><a href="#0" class="link">¿Olvidaste tu contraseña?</a></p>
						 </div>
						</div>
					</div>
				</form></div>
	                <div class="card-back">
	                  <div class="center-wrap">
	                    <div class="section text-center">
	                      <h4 class="mb-4 pb-3">Regístrate</h4>
	                      <div><form method="POST">
	                      <div class="form-group">
	                        <input type="text" name="nombreApellido" class="form-style" placeholder="Nombre y Apellido" id="logname" autocomplete="off">
	                        <i class="input-icon uil uil-user"></i>
	                      </div>
	                      <div class="form-group mt-2">
	                        <input type="email" name="correo" class="form-style" placeholder="Correo" id="logemail" autocomplete="off">
	                        <i class="input-icon uil uil-at"></i>
	                      </div>
	                         <div class="form-group mt-2">
	                        <input type="text" name="nombreUser" class="form-style" placeholder="Nombre de Usuarios" id="user" autocomplete="off">
	                        <i class="input-icon uil uil-at"></i>
	                      </div>
	                      <div class="form-group mt-2">
	                        <input type="password" name="password" class="form-style" placeholder="Contraseña" id="logpass1" autocomplete="off">
	                        <i class="input-icon uil uil-lock-alt"></i>
	                      </div>
	                      <input type="submit" name="registrar" value="Registro" class="btn mt-4" id="registrar">
	                      </form>
	                    </div>

	                    <div class="modal fade" id="infomodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Información detallada de la consulta</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            





            
      											</div>
	                        </div>
	                      </div>
	                    </div>


	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	      </div>
	  </div>
	  
	</body>
	<?php $components->componentsJS(); ?>
     


</html>



<?php 

 ?>