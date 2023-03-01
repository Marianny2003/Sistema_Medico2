<?php 

	use component\initComponents as initComponents;
	use component\header as header;
	use component\sidebar as sidebar;
	if(!isset($_SESSION['nombreUser'])){
	 	die('<script>window.location="?url=login"</script>');
	 }
	use modelo\consultaCitaModelo as consultaCita;

       $objModel = new consultaCita;
   

   if(isset ($_POST['mostrar'])) {
         $objModel->verCitaDataTable();
 }

 if (isset($_POST['select'])) {
		$respuesta = $objModel->mostrarCita($_POST['idDatos']);
	}

 if (isset($_POST['select1'])) {
		$respuesta = $objModel->verCita($_POST['idCita']);
	}

	//  EDITAR CITA //

	if (isset($_POST['cedulaPaciente']) && isset($_POST['nombrePaciente']) && isset($_POST['apellidoPaciente']) && isset($_POST['correoPaciente']) && isset($_POST['telefonoPaciente']) && isset($_POST['fechaCita']) && isset($_POST['horaCita']) && isset($_POST['motivoCita']) && isset($_POST['numHistoriaMedica']) && isset($_POST['idCita'])){
		
		$respuesta = $objModel->datosCita($_POST['cedulaPaciente'], $_POST['nombrePaciente'], $_POST['apellidoPaciente'], $_POST['correoPaciente'], $_POST['telefonoPaciente'], $_POST['fechaCita'], $_POST['horaCita'], $_POST['motivoCita'], $_POST['numHistoriaMedica'], $_POST['idCita']);		
	}


        //  BORRAR CITA //

            if (isset($_POST['borrar'])) {
			$respuesta = $objModel->eliminarCita($_POST['idBorrar']);
		}


       //  REPORTE CITA //

		   if(isset ($_POST['select2'])){
  $respuesta = $objModel->citaReporte($_POST['idReporte']);
}
	
      $components = new initComponents();
	$header = new header();
	$sidebar = new sidebar();

	// vista consulta cita

	if (file_exists("vista/consultaCitaVista.php")) {
		require_once("vista/consultaCitaVista.php");
	}else {
		die ("<script>window.location='?url=consultaCita'</script>");
	}
	
 ?>