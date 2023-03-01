<?php 

  use component\initComponents as initComponents;
  use component\header as header;
  use component\sidebar as sidebar;

  if(!isset($_SESSION['nombreUser'])){
    die('<script>window.location="?url=login"</script>');
   }
  
  
  use modelo\mostrarpacienteModelo as mostrarpaciente;


  $objModel = new mostrarpaciente;
  
  $consulta = $objModel->consultarDatos();

  

 if(isset ($_POST['verPaciente'])){

  $respuesta = $objModel->verPaciente($_POST['verPaciente']);
}

if(isset ($_POST['verEditarPaciente'])){


             $respuesta = $objModel->verPaciente($_POST['verEditarPaciente']);

}
if(isset($_POST['cedulaPaciente']) && isset($_POST['nombrePaciente']) && isset($_POST['segundoNombre']) && isset($_POST['apellidoPaciente']) && isset($_POST['segundoApellido']) && isset($_POST['edadPaciente']) && isset($_POST['sexoPaciente']) && isset($_POST['fechaNacimientoPaciente']) && isset($_POST['lugarNacimientoPaciente']) && isset($_POST['direccionPaciente']) && isset($_POST['estado']) && isset($_POST['correoPaciente']) && isset($_POST['telefonoPaciente']) && isset($_POST['contactoEmergencia'])){


             $respuesta = $objModel->guardarpaciente ( $_POST['cedulaPaciente'],  $_POST['nombrePaciente'], $_POST['segundoNombre'],  $_POST['apellidoPaciente'], $_POST['segundoApellido'], $_POST['edadPaciente'], $_POST['sexoPaciente'], $_POST['fechaNacimientoPaciente'], $_POST["lugarNacimientoPaciente"], $_POST['direccionPaciente'], $_POST['estado'],$_POST['correoPaciente'], $_POST['telefonoPaciente'], $_POST['contactoEmergencia']);
      
              }

   if(isset ($_POST['borrar'])){

  $respuesta = $objModel->borrar($_POST['borrar']);
}

  if(isset ($_POST['reporte'])){
  $respuesta = $objModel->verreporte($_POST['reporte']);
}

    
     
  $components = new initComponents();
  $header = new header();
  $sidebar = new sidebar();
  
  // vista mostrar pacientes
  if (file_exists("vista/mostrarpacienteVista.php")) {
    require_once("vista/mostrarpacienteVista.php");
  }else {
    die ("<script>window.location='?url=mostrarpaciente'</script>");
  }
  
 ?>
