<?php 

	use component\initComponents as initComponents;
	use component\header as header;
	use component\sidebar as sidebar;
	use component\redesSociales as redesSociales;
	use modelo\loginModelo as login;

	 $objModel = new login;
	 $mostrar = $objModel->mostrarUsuario();

	 if(isset($_SESSION['nombreUser'])){
	 	die("<script>window.location='?url=dashboard'</script>");
	 }

	 if (isset($_POST['usuario'])&& isset($_POST['password'])) {
	 	$respuesta = $objModel->inicio($_POST['usuario'], $_POST['password']);
	 }


	 if(isset($_POST['nombreApellido']) && isset($_POST['correo'])&& isset($_POST['nombreUser'])&& isset($_POST['password'])){

       $respuesta = $objModel->getloginSistema($_POST['nombreApellido'], $_POST['correo'], $_POST['nombreUser'], $_POST['password']);
      }


    $components = new initComponents();
	$redesSociales = new redesSociales();

	if (file_exists("vista/loginVista.php")){
    	require_once("vista/loginVista.php");
  	}else{
    	die("<script>window.location='?url=login'</script>");
  }

 ?>