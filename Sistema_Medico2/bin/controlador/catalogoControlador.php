<?php

  use component\initComponents as initComponents;
  use component\header as header;
  use component\sidebar as sidebar;
  if(!isset($_SESSION['nombreUser'])){
    die('<script>window.location="?url=login"</script>');
   }
  use modelo\catalogoModelo as catalogo;

  $objModel = new catalogo;  
  $mostrar = $objModel->mostrarCatalogo();
  
    if(isset ($_POST['buscarPaciente'])){
        $respuesta = $objModel->buscarpaciente($_POST['buscarPaciente']);
      }

    if(isset($_POST['historiaMedica']) && isset($_POST['descripcionPatologia']) && isset($_POST['descripcionHabPsico']) && isset($_POST['descripcionAntFam'])){

      $respuesta = $objModel->guardarPatologias($_POST['historiaMedica'],$_POST['descripcionPatologia'], $_POST['descripcionHabPsico'],$_POST['descripcionAntFam']);
    
  }
   if(isset ($_POST['numHistoriaMedica'])){
        $respuesta = $objModel->femenino($_POST['numHistoriaMedica']);
      }

  if(isset($_POST['numHistoriaMedica']) && isset($_POST['menarquia']) && isset($_POST['sixarquia']) && isset($_POST['nps']) && isset($_POST['citologia']) && isset($_POST['descripCitologia']) && isset($_POST['mamografia']) && isset($_POST['descripMamografia'])&& isset($_POST['gestas']) && isset($_POST['paras']) && isset($_POST['aborto'])){

      $respuesta = $objModel->obstetricia($_POST['numHistoriaMedica'],$_POST['menarquia'], $_POST['sixarquia'],$_POST['nps'],$_POST['citologia'],$_POST['descripCitologia'], $_POST['mamografia'],$_POST['descripMamografia'],$_POST['gestas'],$_POST['paras'],$_POST['aborto']);
    
  }
  



        $components = new initComponents();
        $header = new header();
        $sidebar = new sidebar();

   if (file_exists("vista/catalogoVista.php")) {
   require_once("vista/catalogoVista.php");
   }else {
   die ("<script>window.location='?url=catalogo'</script>");
  }
  
 ?>