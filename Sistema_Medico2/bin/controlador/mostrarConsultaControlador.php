<?php 

	use component\initComponents as initComponents;
	use component\header as header;
	use component\sidebar as sidebar;
	if(!isset($_SESSION['nombreUser'])){
	 	die('<script>window.location="?url=login"</script>');
	 }
	use modelo\mostrarConsultaModelo as mostrarConsulta;



	$objModel = new mostrarConsulta;

	/* READ INFORMATION / VER INFORMACION */
	
	if (isset($_POST['mostrar'])) {
		$objModel->verConsultasDataTable();
	}

	if (isset($_POST['select'])) {
		$respuesta = $objModel->consultaPaciente($_POST['id']);
	}

	if (isset($_POST['select1'])) {
		$respuesta = $objModel->consultaExamenes($_POST['id1']);
	}

	if (isset($_POST['select2'])) {
		$respuesta = $objModel->consultaDiagnostico($_POST['id2']);
	}

	/* EDIT INFORMATION / EDITAR INFORMACION */

	if (isset($_POST['codDiagnostico']) && isset($_POST['diagnostico']) && isset($_POST['codTratamiento']) && isset($_POST['tratamiento']) && isset($_POST['indicaciones']) && isset($_POST['id2'])){
		
		$respuesta = $objModel->infoDiagnostico($_POST['codDiagnostico'] , $_POST['diagnostico'] , $_POST['codTratamiento'] , $_POST['tratamiento'] , $_POST['indicaciones'] , $_POST['id2']);		
	}

	if (isset($_POST['codExamenFisico']) && isset($_POST['descripcionExamenFisico']) && isset($_POST['sigSedente']) && isset($_POST['sigDecubito']) && isset($_POST['sigBidepestacion']) && isset($_POST['talla']) && isset($_POST['peso']) && isset($_POST['IMC']) && isset($_POST['frecuRespiratoria']) && isset($_POST['frecuCardiaca']) && isset($_POST['temperatura']) && isset($_POST['preArterial']) && isset($_POST['codExamenFuncional']) && isset($_POST['descripcionExamenFuncional']) && isset($_POST['codCardio']) && isset($_POST['checkCardio']) && isset($_POST['sisCardio']) && isset($_POST['codRespiratorio']) && isset($_POST['checkRespiratorio']) && isset($_POST['sisRespiratorio']) && isset($_POST['codGastro']) && isset($_POST['checkGastro']) && isset($_POST['sisGastro']) && isset($_POST['codGenito']) && isset($_POST['checkGenito']) && isset($_POST['sisGenito']) && isset($_POST['codOsteo']) && isset($_POST['checkOsteo']) && isset($_POST['sisOsteo']) && isset($_POST['codNeuro']) && isset($_POST['checkNeuro']) && isset($_POST['sisNeuro']) && isset($_POST['codEndo']) && isset($_POST['checkEndo']) && isset($_POST['sisEndo']) && isset($_POST['id1'])) {

		$respuesta = $objModel->infoExamenes($_POST['codExamenFisico'] , $_POST['descripcionExamenFisico'] , $_POST['sigSedente'] , $_POST['sigDecubito'] , $_POST['sigBidepestacion'] , $_POST['talla'] , $_POST['peso'] , $_POST['IMC'] , $_POST['frecuRespiratoria'] , $_POST['frecuCardiaca'] , $_POST['temperatura'] , $_POST['preArterial'] , $_POST['codExamenFuncional'] , $_POST['descripcionExamenFuncional'] , $_POST['codCardio'] , $_POST['checkCardio'] , $_POST['sisCardio'] , $_POST['codRespiratorio'] , $_POST['checkRespiratorio'] , $_POST['sisRespiratorio'] , $_POST['codGastro'] , $_POST['checkGastro'] , $_POST['sisGastro'] , $_POST['codGenito'] , $_POST['checkGenito'] , $_POST['sisGenito'] , $_POST['codOsteo'] , $_POST['checkOsteo'] , $_POST['sisOsteo'] , $_POST['codNeuro'] , $_POST['checkNeuro'] , $_POST['sisNeuro'] , $_POST['codEndo'] , $_POST['checkEndo'] , $_POST['sisEndo'] , $_POST['id1']);
		
	}


	/* DELETE / ELIMINAR */


		if (isset($_POST['borrar'])) {
			$respuesta = $objModel->eliminarConsulta($_POST['idb']);
		}

	$components = new initComponents();
	$header = new header();
	$sidebar = new sidebar();


	if (file_exists("vista/mostrarConsultaVista.php")) {
		require_once("vista/mostrarConsultaVista.php");
	}else {
		die ("<script>window.location='?url=mostrarConsulta'</script>");
	}


?>