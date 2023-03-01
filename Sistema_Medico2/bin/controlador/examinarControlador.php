<?php 

	use component\initComponents as initComponents;
	use component\header as header;
	use component\sidebar as sidebar;
	if(!isset($_SESSION['nombreUser'])){
	 	die('<script>window.location="?url=login"</script>');
	 }
	use modelo\examinarModelo as examinar;

	$objModel = new examinar;
	$mostrar = $objModel->mostrarPaciente();

	if (isset($_POST['datos'])) {
		$respuesta = $objModel->infoPaciente($_POST['id']);
	}
	if(isset ($_POST['buscarPaciente'])){
        $respuesta = $objModel->buscarpaciente($_POST['buscarPaciente']);
      }
	
	if(isset($_POST['fechaConsulta']) && isset($_POST['horaConsulta']) && isset($_POST['historiaMedica']) && isset($_POST['exaFuncional']) && isset($_POST['checkCardio']) && isset($_POST['sisCardio']) && isset($_POST['checkRespiratorio']) &&isset($_POST['sisRespiratorio']) && isset($_POST['checkGastro']) && isset($_POST['sisGastro']) && isset($_POST['checkGenito']) && isset($_POST['sisGenito']) && isset($_POST['checkOsteo']) && isset($_POST['sisOsteo']) && isset($_POST['checkNeuro']) && isset($_POST['sisNeuro']) && isset($_POST['checkEndo']) && isset($_POST['sisEndo']) && isset($_POST['exaFisico']) && isset($_POST['sigSedente']) && isset($_POST['sigDecubito']) && isset($_POST['sigBidepestacion']) && isset($_POST['talla']) && isset($_POST['peso']) && isset($_POST['IMC']) && isset($_POST['frecuRespiratoria']) && isset($_POST['frecuCardiaca']) && isset($_POST['temperatura']) && isset($_POST['preArterial']) && isset($_POST['exaPrevio']) && isset($_POST['diagnostico']) && isset($_POST['tratamiento']) && isset($_POST['indicaciones'])){

		$respueta = $objModel->guardarConsulta($_POST['fechaConsulta'], $_POST['horaConsulta'], $_POST['historiaMedica'], $_POST['exaFuncional'], $_POST['checkCardio'], $_POST['sisCardio'], $_POST['checkRespiratorio'], $_POST['sisRespiratorio'], $_POST['checkGastro'], $_POST['sisGastro'], $_POST['checkGenito'], $_POST['sisGenito'], $_POST['checkOsteo'], $_POST['sisOsteo'], $_POST['checkNeuro'], $_POST['sisNeuro'], $_POST['checkEndo'], $_POST['sisEndo'], $_POST['exaFisico'], $_POST['sigSedente'], $_POST['sigDecubito'], $_POST['sigBidepestacion'], $_POST['talla'], $_POST['peso'], $_POST['IMC'], $_POST['frecuRespiratoria'], $_POST['frecuCardiaca'], $_POST['temperatura'], $_POST['preArterial'], $_POST['exaPrevio'], $_POST['diagnostico'], $_POST['tratamiento'], $_POST['indicaciones']);
		
	}

	$components = new initComponents();
	$header = new header();
	$sidebar = new sidebar();


	if (file_exists("vista/examinarVista.php")) {
		require_once("vista/examinarVista.php");
	}else {
		die ("<script>window.location='?url=examinar'</script>");
	}

 ?>