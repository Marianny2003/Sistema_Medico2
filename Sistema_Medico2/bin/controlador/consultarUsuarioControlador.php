<?php 

  use component\initComponents as initComponents;
  use component\header as header;
  use component\sidebar as sidebar;
  if(!isset($_SESSION['nombreUser'])){
        die('<script>window.location="?url=login"</script>');
     }
  use modelo\consultarUsuarioModelo as consultarUsuario;

     $objModel = new consultarUsuario;
   

   if(isset ($_POST['mostrar'])) {
         $objModel->verUsuarioDataTable();
 }


 if (isset($_POST['select'])) {
    $respuesta = $objModel->mostrarUsuario($_POST['idDatos']);
  }

 if (isset($_POST['select1'])) {
    $respuesta = $objModel->verUsuario($_POST['idUsuario']);
  }
   
    //  EDITAR CITA //

  if (isset($_POST['nombreApellido']) && isset($_POST['correo']) && isset($_POST['nombreUser']) && isset($_POST['password']) && isset($_POST['idUsuario'])){
    
    $respuesta = $objModel->datosUsuario($_POST['nombreApellido'], $_POST['correo'], $_POST['nombreUser'], $_POST['password'], $_POST['idUsuario']);    
  }

         //  BORRAR USUARIO //

            if (isset($_POST['borrar'])) {
      $respuesta = $objModel->eliminarUsuario($_POST['idBorrar']);
    }

  $components = new initComponents();
  $header = new header();
  $sidebar = new sidebar();
  
  // vista mostrar pacientes
  if (file_exists("vista/consultarUsuarioVista.php")) {
    require_once("vista/consultarUsuarioVista.php");
  }else {
    die ("<script>window.location='?url=consultarUsuario'</script>");
  }
  
 ?>