<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Historia Medica</title>
      <?php $components->componentsHeader(); ?>
        <link href="assets/css/Select/select2.min.css" rel="stylesheet">
        <link href="assets/css/Select/select2-bootstrap-5-theme.min.css" rel="stylesheet">
        <link href="assets/css/Select/select2-bootstrap-5-theme.rtl.min.css" rel="stylesheet">
    
    </head>
    <body>
 
  <!--//HEADER\\-->
  <?php $header->header(); ?>

  <!--//==SIDEBAR==\\-->
  <?php $sidebar->sidebar(); ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Historial Medico</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?url=dashboard">Home</a></li>
          <li class="breadcrumb-item active">Historial</li>
      </nav>
    </div>
    <!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Historial Medico de cada Paciente</h5>
              <form method="post">
                <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"><img src="https://cdn-icons-png.flaticon.com/512/718/718974.png" width="30px"></span>
                        <input type="search" class="form-control" name="historiaMedica" placeholder="Buscar Cédula" aria-label="Username" aria-describedby="basic-addon1" id="buscar">
                        
                        <button  class="btn btn-outline-success" type="submit" id="enviar">Search</button>

                    </div> 
                    <div id="error" style="color: red;"></div>

              </form>  
    
              <!-- Table with stripped rows -->
              <div class="section">

      <div class="table-responsive">
        <table class="table table-bordered" >
          <thead class="table-light ">
            <tr>
              <th>N°Historia Medica</th>
              <th>Cedula</th>
              <th>Nombre</th> 
              <th>Apellido</th> 
              <th>Edad</th>
            </tr>
          </thead>
          <tbody>

            <form method="POST">
           <?php
                  if (isset($mostrarPaciente)){

                        if($mostrarPaciente != 0){
                            foreach($mostrarPaciente as $campo){
                              
                            {
                                echo "<tr>";
                                echo "<td>".$campo["numHistoriaMedica"]."</td>";
                                echo "<td>".$campo["cedulaPaciente"]."</td>";
                                echo "<td>".$campo["nombrePaciente"]."</td>";
                                echo "<td>".$campo["apellidoPaciente"]."</td>";
                                echo "<td>".$campo["edadPaciente"]."</td>";
                                 }   
                        
                            }
                           }
                            ?>

                </form>

                
                
                <?php } ?>
          </tbody>
        </table>
           <button value="<?php $datos["numConsulta"] ?>" id="datosDetallados" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#infoModal">
                   Historia del Paciente
                  </button>
      </div> 
      </div>
    </main>
             
     
                

            <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
            <div class="table-responsive">

            
             <h3><b>Datos más detallados</b></h3>
             <table class="table table-bordered" >
             <thead class="table-light">     
                </td>
                    <th>Segundo Nombre</th>
                    <th>Segundo Apellido</th>
                    <th>Correo</th>
                    <th>Fecha de nacimiento</th>
                    <th>Lugar</th> 
                    <th>Estado</th> 
                    <th>Edad</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Contacto de emergencia</th>
                    <th>Sexo</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                    if (isset($mostrarPaciente)){

                        if($mostrarPaciente != 0){
                            foreach($mostrarPaciente as $campo)
                            {   
                                echo "<td>".$campo["segundoNombre"]."</td>";
                                echo "<td>".$campo["segundoApellido"]."</td>";
                                echo "<td>".$campo["correoPaciente"]."</td>";
                                echo "<td>".$campo["fechaNacimientoPaciente"]."</td>";

                                echo "<td>".$campo["lugarNacimientoPaciente"]."</td>";

                                echo "<td>".$campo["estado"]."</td>";
                              
                                echo "<td>".$campo["edadPaciente"]."</td>";

                                echo "<td>".$campo["direccionPaciente"]."</td>";
                              
                                echo "<td>".$campo["telefonoPaciente"]."</td>";

                                echo "<td>".$campo["contactoEmergencia"]."</td>";

                                echo "<td>".$campo["sexoPaciente"]."</td>";
                                echo "</tr>";
                            }   
                        }
                        else{
                            echo "<tr>"; 
                            echo '<td colspan="10"><h3>No hay registros</h3></td>';
                            echo "</tr>";
                        }
                    }
                    else{
                        echo "<tr>"; 
                        echo '<td colspan="10"><h3>No se han realizado busquedas</h3></td>';
                        echo "</tr>";
                    }
                 ?>
                </tbody>
                </table>


              <hr>
              <h3><b>Antecedentes personal patológico</b></h3>
              <table class="table table-bordered">
                <thead class="table-light">
                  <tr>
                    <th>Codigo de patologia</th>
                    <th>Nombre de la patologia</th>
                    <th>Descripcion de patologia</th> 
                  </tr>
                </thead>
                <tbody>

                   <?php
                    if (isset($mostrarPatologia)){

                        if($mostrarPatologia!= 0){
                            foreach($mostrarPatologia as $campo)
                            {
                                echo "<tr>";
                                echo "<td>".$campo["codPatologia"]."</td>";
                                echo "<td>".$campo["nombrePatologia"]."</td>";
                                echo "<td>".$campo["descripcionPatologia"]."</td>";
                                echo "</tr>";
                            }   
                        }
                        else{
                            echo "<tr>"; 
                            echo '<td colspan="10"><h3>No hay registros</h3></td>';
                            echo "</tr>";
                        }
                    }
                    else{
                        echo "<tr>"; 
                        echo '<td colspan="10"><h3>No se han realizado busquedas</h3></td>';
                        echo "</tr>";
                    }
                 ?>
                </tbody>
              </table>
                 

                 <h3><b>Antecedentes Psicobiologico</b></h3>
              <table class="table  table-bordered" >
                <thead class="table-light">
                  <tr>
                    <th>Codigo de habito Psicobiologico</th>
                    <th>Nombre del habito Psicobiologico</th>
                    <th>Descripción del habito Psicobiologico </th>
                  </tr>
                </thead>
                <tbody>
                 <?php
                 if (isset($mostrarPsicobiologico)){

                    if($mostrarPsicobiologico  != 0){
                        foreach($mostrarPsicobiologico  as $campo)
                        {
                            echo "<tr>";
                            echo "<td>".$campo["codHabitoPsicobiologico"]."</td>";
                            echo "<td>".$campo["nombreHabitoPsicobiologico"]."</td>";
                            echo "<td>".$campo["descripcionHabitoPsicobiologico"]."</td>";
                            echo "</tr>";
                        }   
                    }
                    else{
                        echo "<tr>"; 
                        echo '<td colspan="10"><h3>No hay registros</h3></td>';
                        echo "</tr>";
                    }
                }else{
                    echo "<tr>"; 
                    echo '<td colspan="10"><h3>No se han realizado busquedas</h3></td>';
                    echo "</tr>";
                }
                 ?>
                </tbody>
              </table>

                     <hr>
             <h3><b>Antecedentes familiares del paciente</b></h3>
             <table class="table table-bordered">
             <thead class="table-light">
             <tr>
                     <th>Codigo de patologia familiar</th>
                    <th>Descripcion de patologia familiar</th>
                     <th>Tipo parentesco</th>
                    <th>Descripción del parentezco</th>

                  </tr>
                </thead>
                <tbody>

                  <?php
                    if (isset($mostrarPatologiaFam)){
                        if($mostrarPatologiaFam  != 0){
                            foreach($mostrarPatologiaFam as $campo)
                            {
                                echo "<tr>";
                                echo "<td>".$campo["codPatologiaFamiliar"]."</td>";

                                echo "<td>".$campo["descripcionPatologiaFamiliar"]."</td>";

                                echo "<td>".$campo["tipoParentesco"]."</td>";

                                echo "<td>".$campo["descripcionParentesco"]."</td>";
                                echo "</tr>";
                            }   
                        }
                        else{
                            echo "<tr>"; 
                            echo '<td colspan="10"><h3>No hay registros</h3></td>';
                            echo "</tr>";
                        }
                    }
                    else{
                        echo "<tr>"; 
                        echo '<td colspan="10"><h3>No se han realizado busquedas</h3></td>';
                        echo "</tr>";
                    }
                 ?>
                </tbody>
              </table>

                  

                     <hr>
              <h3><b>Antecedentes Gineco-Obstreticos</b></h3>
              <table class="table  table-bordered" >
                <thead class="table-light">
                  <tr>
                    <th>Codigo Gineco</th>
                    <th>Menarquia</th>
                    <th>Sexarquia</th>
                    <th>Nps</th>
                    <th>Citologia</th>
                    <th>Descripcion de Citologia</th>
                    <th>Mamografia</th>
                    <th>Descripcion de la Mamografia</th>
                    <th>Gestas</th>
                    <th>Paras o cesaréas</th>
                    <th>Aborto</th>
                  </tr>
                </thead>
                <tbody>

                 <?php
                 if (isset($mostrarGineco)){

                    if($mostrarGineco != 0){
                        foreach($mostrarGineco as $campo)
                        {
                            echo "<tr>";
                            echo "<td>".$campo["codGineco"]."</td>";
                            echo "<td>".$campo["menarquia"]."</td>";
                            echo "<td>".$campo["sixarquia"]."</td>";
                            echo "<td>".$campo["nps"]."</td>";
                            echo "<td>".$campo["citologia"]."</td>";
                            echo "<td>".$campo["descripCitologia"]."</td>";
                            echo "<td>".$campo["mamografia"]."</td>";
                            echo "<td>".$campo["descripMamografia"]."</td>";
                            echo "<td>".$campo["gestas"]."</td>";
                            echo "<td>".$campo["para"]."</td>";
                            echo "<td>".$campo["abortos"]."</td>";
                            echo "</tr>";
                        }   
                    }
                    else{
                        echo "<tr>"; 
                        echo '<td colspan="10"><h3>No hay registros</h3></td>';
                        echo "</tr>";
                    }
                }else{
                    echo "<tr>"; 
                    echo '<td colspan="10"><h3>No se han realizado busquedas</h3></td>';
                    echo "</tr>";
                }
                 ?>
                </tbody>
              </table>

                     <hr>
            <h3><b>Consulta</b></h3>
              <table class="table table-bordered" >
                <thead class="table-light">
                  <tr>
                   <th>Numero de consulta</th>
                    <th>Fecha de consulta</th>
                    <th>Hora de consulta</th>
                  </tr>
                </thead>
                <tbody>

                   <?php
                  if (isset($mostrarConsulta)){

                    if($mostrarConsulta  != 0){
                        foreach($mostrarConsulta  as $campo)
                        {
                            echo "<tr>";
                            echo "<td>".$campo["numConsulta"]."</td>";
                            echo "<td>".$campo["fechaConsulta"]."</td>";
                            echo "<td>".$campo["horaConsulta"]."</td>";
                            echo "</tr>";
                        }   
                    }
                    else{
                        echo "<tr>"; 
                        echo '<td colspan="10"><h3>No hay registros</h3></td>';
                        echo "</tr>";
                    }
                }else{
                    echo "<tr>"; 
                    echo '<td colspan="10"><h3>No se han realizado busquedas</h3></td>';
                    echo "</tr>";
                }

                 ?>
                </tbody>
              </table>

                <hr>
           <h3><b>Examen Funcional</b></h3>
              <table class="table  table-bordered" >
                <thead class="table-light">
                  <tr>
                   <th>Codigo examen funcional</th>
                    <th>Descripcion examen funcional</th>
                    <th>Numero consulta</th>
                  </tr>
                </thead>
                <tbody>
    
                <?php
                if (isset($mostrarFuncional)){

                    if($mostrarFuncional  != 0){
                        foreach($mostrarFuncional  as $campo)
                        {
                            echo "<tr>";
                            echo "<td>".$campo["codExamenFuncional"]."</td>";
                            echo "<td>".$campo["descripcionExamenFuncional"]."</td>";
                            echo "<td>".$campo["numConsulta"]."</td>";
                            echo "</tr>";
                        }   
                    }
                    else{
                        echo "<tr>"; 
                        echo '<td colspan="10"><h3>No hay registros</h3></td>';
                        echo "</tr>";
                    }
                }else{
                    echo "<tr>"; 
                    echo '<td colspan="10"><h3>No se han realizado busquedas</h3></td>';
                    echo "</tr>";
                }

                 ?>
                </tbody>
              </table>

                 <hr>
            <h3><b>Tipo de examen</b></h3>
              <table class="table table-bordered" >
                <thead class="table-light">
                  <tr>
                    <th>Codigo de tipo de examen</th>
                    <th>Nombre del examen</th>
                    <th>Descripcion del examen</th>
                  </tr>
                </thead>
                <tbody>

                   <?php
                 if (isset($mostrarExamen)){

                    if($mostrarExamen  != 0){
                        foreach($mostrarExamen  as $campo)
                        {
                            echo "<tr>";
                            echo "<td>".$campo["codTipoExamen"]."</td>";
                            echo "<td>".$campo["nombreTipoExamen"]."</td>";
                            echo "<td>".$campo["descripcionTipoExamen"]."</td>";
                            echo "</tr>";
                        }   
                    }
                    else{
                        echo "<tr>"; 
                        echo '<td colspan="10"><h3>No hay registros</h3></td>';
                        echo "</tr>";
                    }
                }else{
                    echo "<tr>"; 
                    echo '<td colspan="10"><h3>No se han realizado busquedas</h3></td>';
                    echo "</tr>";
                }
                 ?>
                </tbody>
              </table>

                  <hr>
             <h3><b>Examen Fisico</b></h3>
              <table class="table table-bordered" >
                <thead class="table-light">
                  <tr>
                    <th>Codigo examen fisico</th>
                    <th>Descripcion examen fisico</th>
                    <th>Signo Decúbito</th>
                    <th>Signo Sedente</th>
                    <th>Signo Bipedestación</th>
                    <th>Frecuencia respiratoria</th>
                    <th>Frecuencia Cardiaca</th>
                    <th>Peso</th>
                    <th>Talla</th>
                    <th>IMC</th>
                    <th>Temperatura</th>
                    <th>Presion Arterial</th>
         
                  </tr>
                </thead>
                <tbody>

                   <?php
                 if (isset($mostrarFisica)){
                    if($mostrarFisica  != 0){
                        foreach($mostrarFisica  as $campo)
                        {
                            echo "<tr>";
                            echo "<td>".$campo["codExamenFisico"]."</td>";
                            echo "<td>".$campo["descripcionExamenFisico"]."</td>";
                            echo "<td>".$campo["signoDecubito"]."</td>";
                            echo "<td>".$campo["signoSedente"]."</td>";
                            echo "<td>".$campo["signoBidepestacion"]."</td>";
                            echo "<td>".$campo["frecuenciaRespiratoria"]."</td>";
                            echo "<td>".$campo["frecuenciaCardiaca"]."</td>";
                            echo "<td>".$campo["peso"]."</td>";
                            echo "<td>".$campo["talla"]."</td>";
                            echo "<td>".$campo["IMC"]."</td>";
                            echo "<td>".$campo["temperatura"]."</td>";
                            echo "<td>".$campo["presionArterial"]."</td>";
                            echo "</tr>";
                        }   
                    }
                    else{
                        echo "<tr>"; 
                        echo '<td colspan="10"><h3>No hay registros</h3></td>';
                        echo "</tr>";
                    }
                }else{
                    echo "<tr>"; 
                    echo '<td colspan="10"><h3>No se han realizado busquedas</h3></td>';
                    echo "</tr>";
                }
                 ?>
                </tbody>
              </table>

            <hr>
            <h3><b>Examenes previos</b></h3>
              <table class="table table-bordered" >
                <thead class="table-light">
                  <tr>
                    <th>Codigo de examen previo</th>
                    <th>Descripcion de examen previo</th>
                  </tr>
                </thead>
                <tbody>

                   <?php
                 if (isset($mostrarExamenesPrevios )){

                    if($mostrarExamenesPrevios!= 0){
                        foreach($mostrarExamenesPrevios  as $campo)
                        {

                            echo "<tr>";
                            echo "<td>".$campo["codExaPrevio"]."</td>";
                            echo "<td>".$campo["descripcionExamenPrevios"]."</td>";
                            echo "</tr>";
                        }   
                    }
                    else{
                        echo "<tr>"; 
                        echo '<td colspan="10"><h3>No hay registros</h3></td>';
                        echo "</tr>";
                    }
                }else{
                    echo "<tr>"; 
                    echo '<td colspan="10"><h3>No se han realizado busquedas</h3></td>';
                    echo "</tr>";
                }
                 ?>
                </tbody>
              </table>


              

                  <hr>
            <h3><b>Diagnostico</b></h3>
              <table class="table table-bordered" >
                <thead class="table-light">
                  <tr>
                    <th>Numero diagnostico</th>
                    <th>Descripcion del diagnostico</th>
                  </tr>
                </thead>
                <tbody>

                   <?php
                 if (isset($mostrarDiagnostico )){

                    if($mostrarDiagnostico != 0){
                        foreach($mostrarDiagnostico   as $campo)
                        {

                            echo "<tr>";
                            echo "<td>".$campo["numDiagnostico"]."</td>";
                            echo "<td>".$campo["descripcionDiagnostico"]."</td>";
                            echo "</tr>";
                        }   
                    }
                    else{
                        echo "<tr>"; 
                        echo '<td colspan="10"><h3>No hay registros</h3></td>';
                        echo "</tr>";
                    }
                }else{
                    echo "<tr>"; 
                    echo '<td colspan="10"><h3>No se han realizado busquedas</h3></td>';
                    echo "</tr>";
                }
                 ?>
                </tbody>
              </table>


                  <hr>
            <h3><b>Tratamiento</b></h3>
              <table class="table table-bordered" >
                <thead class="table-light">
                  <tr>
                    <th>Numero de tratamiento</th>
                    <th>Indicaciones de tratamiento </th>
                    <th>Medicamentos recetados</th>
                  </tr>
                </thead>
                <tbody>

                   <?php
                 if (isset($mostrarTratamiento)){

                    if($mostrarTratamiento   != 0){
                        foreach($mostrarTratamiento  as $campo)
                        {
                            echo "<tr>";
                            echo "<td>".$campo["numTratamiento"]."</td>";
                            echo "<td>".$campo["indicacionesTratamiento"]."</td>";
                            echo "<td>".$campo["medicamentosTratamiento"]."</td>";
                            echo "</tr>";
                        }   
                    }
                    else{
                        echo "<tr>"; 
                        echo '<td colspan="10"><h3>No hay registros</h3></td>';
                        echo "</tr>";
                    }
                }else{
                    echo "<tr>"; 
                    echo '<td colspan="10"><h3>No se han realizado busquedas</h3></td>';
                    echo "</tr>";
                }
                 ?>
                </tbody>
              </table>

          <div class="modal-footer">
          <button href="?url=historiaReporte" target="_black" type="button" data-bs-dismiss="modal" class="btn btn-primary">Descargar</button>
              <!-- End Table with stripped rows -->

            </div>
            </div>
            </div>
            </div>

    </section>

  </main>



  <!-- End #main -->

         <!--//JS\\-->
  <script src="assets/js/validacionHistoria.js"></script> 
  <?php $components->componentsJS(); ?>

   
    </body>
</html>