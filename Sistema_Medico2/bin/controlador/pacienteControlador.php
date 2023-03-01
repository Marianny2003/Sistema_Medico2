<?php

  use component\initComponents as initComponents;
  use component\header as header;
  use component\sidebar as sidebar;
  if(!isset($_SESSION['nombreUser'])){
    die('<script>window.location="?url=login"</script>');
   }
  //modelo paciente
  use modelo\pacienteModelo as paciente;
    
    $objModel = new paciente;
    $consulta = $objModel->consultarDatosPaciente();

      if(isset ($_POST['buscarPaciente'])){
       $respuesta = $objModel->buscarpaciente($_POST['buscarPaciente']);
      }
     

  if(isset ($_POST['segundoNombre'])  && isset($_POST['segundoApellido']) && isset($_POST['edadPaciente']) && isset($_POST['sexoPaciente']) && isset($_POST['fechaNacimientoPaciente']) && isset($_POST['lugarNacimientoPaciente']) && isset($_POST['direccionPaciente']) && isset($_POST['estado']) && isset($_POST['contactoEmergencia']) ){
            
             $respuesta = $objModel->guardarpaciente($_POST['numHistoriaMedica'], $_POST['segundoNombre'], $_POST['segundoApellido'], $_POST['edadPaciente'], $_POST['sexoPaciente'], $_POST['fechaNacimientoPaciente'], $_POST["lugarNacimientoPaciente"], $_POST['direccionPaciente'], $_POST['estado'], $_POST['contactoEmergencia']);
      }
     
  $components = new initComponents();
  $header = new header();
  $sidebar = new sidebar();

  //vista paciente
  if (file_exists("vista/pacienteVista.php")){
    require_once("vista/pacienteVista.php");
  }else{
    die("<script>window.location='?url=paciente'</script>");
  }

?>