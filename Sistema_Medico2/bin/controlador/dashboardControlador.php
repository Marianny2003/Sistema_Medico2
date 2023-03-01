<?php 

	use component\initComponents as initComponents;
	use component\header as header;
	use component\sidebar as sidebar;
	 if(!isset($_SESSION['nombreUser'])){
	 	die('<script>window.location="?url=login"</script>');
	 }
	use modelo\dashboardModelo as dashboard;
	 
	$components = new initComponents();
	$header = new header();
	$sidebar = new sidebar();


	if (file_exists("vista/dashboardVista.php")) {
		require_once("vista/dashboardVista.php");
	}else {
		die ("<script>window.location='?url=dashboard'</script>");
	}


 ?>