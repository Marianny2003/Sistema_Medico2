<?php 

    use component\initComponents as initComponents;
    use component\header as header;
    use component\sidebar as sidebar;
    if(!isset($_SESSION['nombreUser'])){
        die('<script>window.location="?url=login"</script>');
     }
    use modelo\mostrarCatalogoModelo as mostrarCatalogo;

       $objModel = new mostrarCatalogo;


      if(isset ($_POST['mostrar'])) {
         $objModel->verCatalagoDataTable();
 }

      if (isset($_POST['select'])) {
    $respuesta = $objModel->mostrarCatalago($_POST['idDatos']);
  }

  $components = new initComponents();
  $header = new header();
  $sidebar = new sidebar();

  // Vista Mostrar Catalogo//
  if (file_exists("vista/mostrarCatalogoVista.php")) {
    require_once("vista/mostrarCatalogoVista.php");
  }else {
    die ("<script>window.location='?url=mostrarCatalogo'</script>");
  }
  
 ?>