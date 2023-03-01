<!DOCTYPE html>
<html lang="en">
    <head>
    <?php $components->componentsHeader();?>
    <link href="assets/css/Select/select2.min.css" rel="stylesheet">
  <link href="assets/css/Select/select2-bootstrap-5-theme.min.css" rel="stylesheet">
  <link href="assets/css/Select/select2-bootstrap-5-theme.rtl.min.css" rel="stylesheet">
    <title>Pacientes</title>
    
    </head>
    <body>
        <?php $header->header();?>
        <?php $sidebar->sidebar(); ?>

 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Registro Paciente</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?url=dashboard">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
     <div class="card">
            <div class="card-body">
              <h5 class="card-title">Información Personal</h5>

              <!-- Multi Columns Form -->


              <form class="row g-3" method="POST" action="">           
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Cédula</label>
                </div>
                <div  class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">V-</span>
                  <select name="numHistoriaMedica" class="form-control" id="valHistoriaMedica">
                        <option selected disabled value="">Buscar Paciente</option>
                            <?php if(isset($consulta)){
                                foreach($consulta as $campo){
                            ?>
                        <option value="<?php echo $campo->numHistoriaMedica;?>" class="option"><?php echo $campo->cedulaPaciente; ?> - <?php echo $campo->nombrePaciente; ?> <?php echo $campo->apellidoPaciente; ?></option>
                            <?php
                                }
                            }else{"";}

                            ?>
                        </select>
                </div>
                <div class="col-md-6">
                  <label for="nombrePaciente" class="form-label" value="<?php echo $campo->nombrePaciente; ?>"  >Nombre </label>
                  <input type="text" class="form-control" disabled id="nombrePaciente"name='nombrePaciente' >
                  <span class="d-block small opacity-50" id=""></span>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label"  >Segundo Nombre</label>
                  <input type="text" class="form-control" id="segundonombre"  name='segundoNombre'>
                  <span class="d-block small opacity-50" id="error1"></span>

                </div>
                <div class="col-md-6">
                  <label for="apellidoPaciente" class="form-label" value="<?php echo $campo->apellidoPaciente; ?>">Apellido</label>
                  <input type="text" class="form-control" id="apellidoPaciente" disabled name='apellidoPaciente'>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label" >Segundo Apellido</label>
                  <input type="text" class="form-control" id="segundoapellido" name='segundoApellido'>
                  <span class="d-block small opacity-50" id="error2"></span>
                </div>

                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Edad</label>
                  <input type="number" class="form-control" id="edad" name='edadPaciente'>
                  <span class="d-block small opacity-50" id="error3"></span>
                </div>

                <div class="col-md-4">
                  <label for="inputState" class="form-label">Sexo</label>
                  <select  class="form-select"  name="sexoPaciente" id="sexo">
                  <option selected value="0">Seleccionar</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino
                  ">Femenino</option>
                  </select>
                  <span class="d-block small opacity-50" id="error4"></span>
                </div>
                
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Fecha de Nacimiento</label>
                  <input type="date" class="form-control" id="fecha" name='fechaNacimientoPaciente'>
                  <span class="d-block small opacity-50" id="error5"></span>
                </div>
                
                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Lugar de Nacimiento</label>
                  <input type="text" class="form-control" id="lugar" name='lugarNacimientoPaciente'>
                  <span class="d-block small opacity-50" id="error6"></span>
                </div>

                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Dirreción</label>
                  <input type="text" class="form-control" id="direccion"  name='direccionPaciente'>
                  <span class="d-block small opacity-50" id="error7"></span>
                </div>

                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Estado</label>
                  <input type="text" class="form-control" id="estado"  name='estado'>
                  <span class="d-block small opacity-50" id="error8"></span>
                </div>


                <div class="col-md-4">
                  <label for="correoPaciente" class="form-label" value="<?php echo $campo->correoPaciente; ?>">Correo</label>
                  <input type="email" class="form-control" id="correoPaciente" disabled name='correoPaciente'>
                </div>
                <div class="col-md-4">
                  <label for="telefonoPaciente" class="form-label" value="<?php echo $campo->telefonoPaciente; ?>">Teléfono</label>
                  <input type="number" class="form-control" id="telefonoPaciente" disabled name='telefonoPaciente'>
                  <span class="d-block small opacity-50" id=""></span>
                </div>

                <div class="col-md-4">
                  <label for="inputPassword5" class="form-label">Contacto de Emergencia</label>
                  <input type="number" class="form-control" id="emergencia" name='contactoEmergencia'>
                  <span class="d-block small opacity-50" id="error9"></span>
                </div>

                
                <div class="text-center">
                 <button type="button" class="btn btn-primary" id="enviar" value="Finalizar Consulta">Enviar</button>
                  <button type="reset" class="btn btn-secondary" id="limpiar" value="Reiniciar Consulta">Borrar</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

       <!--//JS\\-->
  <?php $components->componentsJS(); ?>
      <script src="assets/js/Paciente/validacionPaciente.js"></script> 

    </body>
    
     
</html>
    
 
