<?php 

	use component\initComponents as initComponents;
	use component\header as header;
	use component\sidebar as sidebar;
	if(!isset($_SESSION['nombreUser'])){
	 	die('<script>window.location="?url=login"</script>');
	 }
	use modelo\citaModelo as cita;

	$objModel = new cita;
    $guardar = $objModel->consultarDatosCita();

  if(isset($_POST['cedulaPaciente']) && isset($_POST['nombrePaciente']) && isset($_POST['apellidoPaciente']) && isset($_POST['correoPaciente']) && isset($_POST['telefonoPaciente']) && isset($_POST['fechaCita']) && isset($_POST['horaCita']) && isset($_POST['motivoCita'])){


  	$respuesta = $objModel->guardarCita($_POST['cedulaPaciente'], $_POST['nombrePaciente'], $_POST['apellidoPaciente'], $_POST['correoPaciente'], $_POST['telefonoPaciente'], $_POST['fechaCita'], $_POST['horaCita'], $_POST['motivoCita']);
 }
	  
	$components = new initComponents();
	$header = new header();
	$sidebar = new sidebar();

	   // vista cita
	     if (file_exists("vista/citaVista.php")) {
	         require_once("vista/citaVista.php");
	         }else {
	    	die ("<script>window.location='?url=cita'</script>");
	      }
	
 ?>