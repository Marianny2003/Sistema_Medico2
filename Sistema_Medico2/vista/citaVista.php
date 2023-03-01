<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Cita</title>
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
      <h1>Registrar Cita</h1>
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
              <h1 class="card-title ">Registrar Cita</h1>

              <!-- Multi Columns Form -->
              <form method="POST" class="row g-3">
                <div class="col-md-12">
                  <label class="form-label">Cédula</label>
                  <input class="form-control" type="number" id="cedula" name='cedulaPaciente'/>
                  <span class="d-block small opacity-50" id="errorCe"></span>
                </div>
                <div class="col-md-6">
                <label class="form-label">Nombre</label>
               <input type="name" class="form-control" id="nombre" name='nombrePaciente' placeholder='Nombre'/>
                  <span class="d-block small opacity-50" id="errorNom"></span>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Apellido</label>
                  <input class="form-control" id="apellido" name='apellidoPaciente' type='name' placeholder='Apellido'/>
                  <span class="d-block small opacity-50" id="errorApe"></span>
                </div>
                <div class="col-12">
                  <label class="form-label">Correo</label>
                  <input class="form-control" id="correo" name='correoPaciente' type='email' placeholder="Correo Electronico"/>
                   <small class="d-block text-muted">-Ejemplo@(gmail, hotmail, otros.)</small>
                  <span class="d-block small opacity-50" id="errorCo"></span>
                </div>
                <div class="col-12">
                  <label class="form-label">Teléfono</label>
                  <input class="form-control" id="telefono" name='telefonoPaciente' type='number'/>
                  <span class="d-block small opacity-50" id="errorTele"></span>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Fecha Cita</label>
                  <input type="date" class="form-control" id="fecha" name='fechaCita'/>
                  <span class="d-block small opacity-50" id="errorFe"></span>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Hora Cita</label>
                  <input  class="form-control" id="hora" name='horaCita' type='time'/>
                  <span class="d-block small opacity-50" id="errorHo"></span>
                </div>
                <div class="col-12">
                   <label class="form-label">Motivo cita</label>
                    <textarea class="form-control" id="motivo" name='motivoCita'/></textarea>
                    <span class="d-block small opacity-50" id="errorMoti"></span>
                  </div>
                <div class="text-center">
                 <button type="button" class="btn btn-primary" id="enviar" value="Finalizar Consulta">Enviar</button>
                  <button type="reset" class="btn btn-secondary" id="limpiar" value="Reiniciar Consulta">Borrar</button>
                </div>
                 <br>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

    </body>

        <!--//JS\\-->
  <?php $components->componentsJS(); ?>
   <script src="assets/js/Cita/validacionesCita.js"></script> 
  
</html>