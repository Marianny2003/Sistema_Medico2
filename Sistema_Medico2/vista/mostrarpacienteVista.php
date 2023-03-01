<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consulta Paciente</title>
  <?php $components->componentsHeader(); ?>
</head>
<body>
  <!--//HEADER\\-->
  <?php $header->header(); ?>


  <!--//==SIDEBAR==\\-->

  <?php $sidebar->sidebar(); ?>

  <main id="main" class="main">

        <div class="pagetitle">
        <h1>Lista de Paciente Registrado</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?url=dashboard">Home</a></li>
            <li class="breadcrumb-item active">Paciente</li>
          </ol>
        </nav>
      </div>
<div class="section">
      
      <div class="table-responsive">
        <table class="table table-light table-bordered" id="tabla">
          <thead class="table-dark">
            <tr>
              <td>Nº Historia</td>
              <td>Cédula</td>
              <td>Nombre</td>
              <td>Apellido</td>
              <td>Sexo</td>
              <td>Edad</td>
              <td>Acciones</td>
            </tr>
          </thead>
          <tbody>

         
            <?php
                    foreach($consulta as $campo){
                    
                        echo "<tr>";
                        echo "<td>".$campo["numHistoriaMedica"]."</td>";
                        echo "<td>".$campo["cedulaPaciente"]."</td>";
                        echo "<td>".$campo["nombrePaciente"]."</td>";
                        echo "<td>".$campo["apellidoPaciente"]."</td>";
                        echo "<td>".$campo["sexoPaciente"]."</td>";
                        echo "<td>".$campo["edadPaciente"]."</td>";

                    
                 ?>

                  <td>
                  <button value="<?php echo $campo["numHistoriaMedica"] ?>" id="valHistoriaMedica" type="button" class="btn btn-primary valHistoriaMedica" data-bs-toggle="modal" data-bs-target="#infomodal">
                    <i class="bi bi-eye-fill"></i>
                  </button>
                   <button value="<?php echo $campo["numHistoriaMedica"] ?>" id="editarDatos" type="button" class="btn btn-warning editarDatos1"  data-bs-toggle="modal" data-bs-target="#editar" name="numHistoriaMedica "; >
                     <i class="bi bi-pencil-square"></i>
                  </button>

                  <button value="<?php echo $campo["numHistoriaMedica"] ?>" id="borrarDatos" type="button" class="btn btn-danger borrarDatos1">
                     <i class="bi bi-trash3"></i>
                  </button>
                  <form method="POST" target="_blank" style="display: inline;">
                  <button value="<?php echo $campo["numHistoriaMedica"] ?>" id="pd" type="submit" name='reporte'class="btn btn-success pdf" >
                    <i class="bi bi-filetype-pdf"></i>
                  </button>
                  </form>



                </td>

                <?php }  ?>
          </tbody>
        </table>
      </div> 
      </div>
    </main>
                            <!-- Consulta -->
    <div class="modal fade" id="infomodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Información detallada Personal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
            <section class="section">
      <div class="row">
        <div class="col-lg-12">
     <div class="card">
            <div class="card-body">
              

              <!-- Multi Columns Form -->


              <form class="row g-3" method="POST">
             
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Cédula</label>
                </div>
                <div  class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">V-</span>
                  <input type="number" class="form-control" id="cedulaPaciente" disabled name=''>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label" >Nombre</label>
                  <input type="text" class="form-control" disabled id="nombrePaciente"name='' >
                  <span class="d-block small opacity-50" id=""></span>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label"  >Segundo Nombre</label>
                  <input type="text" class="form-control" id="segundoNombre" disabled name=''>
                  <span class="d-block small opacity-50" id="error1"></span>

                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label" >Apellido</label>
                  <input type="text" class="form-control" id="apellidoPaciente" disabled name=''>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label" >Segundo Apellido</label>
                  <input type="text" class="form-control" id="segundoApellido"disabled  name=''>
                  <span class="d-block small opacity-50" id="error2"></span>
                </div>

                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Edad</label>
                  <input type="number" class="form-control" id="edadPaciente" disabled name=''>
                  <span class="d-block small opacity-50" id="error3"></span>
                </div>

                <div class="col-md-4">
                  <label for="inputState" class="form-label">Sexo</label>
                  <input type="text" class="form-control" disabled name="sexoPaciente" id="sexoPaciente">
                  <span class="d-block small opacity-50" id="error4"></span>
                </div>
                
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Fecha de Nacimiento</label>
                  <input type="date" class="form-control" id="fechaNacimientoPaciente"disabled name=''>
                  <span class="d-block small opacity-50" id="error5"></span>
                </div>
                
                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Lugar de Nacimiento</label>
                  <input type="text" class="form-control" id="lugarNacimientoPaciente" disabled name=''>
                  <span class="d-block small opacity-50" id="error6"></span>
                </div>

                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Dirreción</label>
                  <input type="text" class="form-control" id="direccionPaciente" disabled  name=''>
                  <span class="d-block small opacity-50" id="error7"></span>
                </div>

                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Estado</label>
                  <input type="text" class="form-control" id="estado" disabled name=''>
                  <span class="d-block small opacity-50" id="error8"></span>
                </div>


                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Correo</label>
                  <input type="email" class="form-control" id="correoPaciente" disabled name=''>
                </div>
                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Teléfono</label>
                  <input type="number" class="form-control" id="telefonoPaciente" disabled name=''>
                  <span class="d-block small opacity-50" id=""></span>
                </div>

                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Contacto de Emergia</label>
                  <input type="number" class="form-control" id="contactoEmergencia" disabled name=''>
                  <span class="d-block small opacity-50" id="error9"></span>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>
      </div>
    </section>         
      </div>
    </div>
 </div>
    </div>
                                                          <!-- Editar -->

 <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Datos Paciente</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
            <form class="row g-3" method="POST" action="" id="editarPaciente">           
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Cédula</label>
                </div>
                <div  class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">V-</span>
                
                 <input type="number" class="form-control" id="cedulaPaciente2"  name='cedulaPaciente'>

                </div>
                <div class="col-md-6">
                  <label for="nombrePaciente" class="form-label"   >Nombre </label>
                  <input type="text" class="form-control"  id="nombrePaciente2"name='nombrePaciente' >
                  <span class="d-block small opacity-50" id=""></span>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label"  >Segundo Nombre</label>
                  <input type="text" class="form-control" id="segundoNombre2"  name='segundoNombre'>
                  <span class="d-block small opacity-50" id="error1"></span>

                </div>
                <div class="col-md-6">
                  <label for="apellidoPaciente" class="form-label" >Apellido</label>
                  <input type="text" class="form-control" id="apellidoPaciente2"  name='apellidoPaciente'>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label" >Segundo Apellido</label>
                  <input type="text" class="form-control" id="segundoApellido2" name='segundoApellido'>
                  <span class="d-block small opacity-50" id="error2"></span>
                </div>

                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Edad</label>
                  <input type="number" class="form-control" id="edadPaciente2" name='edadPaciente'>
                  <span class="d-block small opacity-50" id="error3"></span>
                </div>

                <div class="col-md-4">
                  <label for="inputState" class="form-label">Sexo</label>
                  <select class="form-select"   id="sexoPaciente2">
                  <option selected >Seleccionar</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino
                  ">Femenino</option>
                  </select>
                  <span class="d-block small opacity-50" id="error4"></span>
                </div>
                
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Fecha de Nacimiento</label>
                  <input type="date" class="form-control" id="fechaNacimientoPaciente2" name='fechaNacimientoPaciente'>
                  <span class="d-block small opacity-50" id="error5"></span>
                </div>
                
                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Lugar de Nacimiento</label>
                  <input type="text" class="form-control" id="lugarNacimientoPaciente2" name='lugarNacimientoPaciente'>
                  <span class="d-block small opacity-50" id="error6"></span>
                </div>

                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Dirreción</label>
                  <input type="text" class="form-control" id="direccionPaciente2"  name='direccionPaciente'>
                  <span class="d-block small opacity-50" id="error7"></span>
                </div>

                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Estado</label>
                  <input type="text" class="form-control" id="estado2"  name='estado'>
                  <span class="d-block small opacity-50" id="error8"></span>
                </div>


                <div class="col-md-4">
                  <label for="correoPaciente" class="form-label" >Correo</label>
                  <input type="email" class="form-control" id="correoPaciente2"  name='correoPaciente'>
                </div>
                <div class="col-md-4">
                  <label for="telefonoPaciente" class="form-label" >Teléfono</label>
                  <input type="number" class="form-control" id="telefonoPaciente2"  name='telefonoPaciente'>
                  <span class="d-block small opacity-50" id=""></span>
                </div>

                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Contacto de Emergia</label>
                  <input type="number" class="form-control" id="contactoEmergencia2" name='contactoEmergencia'>
                  <span class="d-block small opacity-50" id="error9"></span>
                </div>

                
                <div class="text-center">
                 <button type="submit" class="btn btn-primary " id="enviareditar" value="Finalizar Consulta" data-bs-dismiss="modal" aria-label="Close">Enviar</button>
                  <button type="reset" class="btn btn-secondary" id="limpiar" value="Reiniciar Consulta">Borrar</button>
                </div>
              </form>
      </div>
    </div>
    </div>
 </div>
     
  <!-- End #main -->

 
        <!--//JS\\-->
  <?php $components->componentsJS(); ?>
  <script src="assets/js/Paciente/consultaModalPaciente.js"></script> 
    </body>
</html>