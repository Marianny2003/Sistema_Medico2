<?php

  use component\initComponents as initComponents;
  use component\header as header;
  use component\sidebar as sidebar;
  if(!isset($_SESSION['nombreUser'])){
    die('<script>window.location="?url=login"</script>');
   }
  use modelo\historiaMedicaModelo as historiaMedica;



    $objModel = new historiaMedica; 
     if (isset($_POST['historiaMedica'])){  
   $objModel->getConsulta($_POST['historiaMedica']); 
   
   $mostrarPaciente = $objModel->consultaPaciente();
   $mostrarPatologia = $objModel->consultaPatologia();
   $mostrarPatologiaFam = $objModel->consultaPatologiaFam();
   $mostrarPsicobiologico = $objModel->consultaPsicobiologico();
   $mostrarGineco = $objModel->consultaGinecoObstreticos();
   $mostrarConsulta = $objModel->consultaMedica();
   $mostrarFuncional = $objModel->examenFuncional();
   $mostrarFisica = $objModel->examenFisico();
   $mostrarExamen = $objModel->tipoExamen();
   $mostrarExamenesPrevios= $objModel->ExamenesPrevios();
   $mostrarDiagnostico = $objModel->consultaDiagnostico();
   $mostrarTratamiento = $objModel->consultaTratamiento();
   
   
   }
  
  $components = new initComponents();
  $header = new header();
  $sidebar = new sidebar();


  //vista historia medica
  if (file_exists("vista/historiamedicaVista.php")){
    require_once("vista/historiamedicaVista.php");
  }else{
    die("<script>window.location='?url=historiamedica'</script>");
  }

?>