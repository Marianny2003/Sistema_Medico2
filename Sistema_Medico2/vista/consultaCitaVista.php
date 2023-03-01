<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listado de Consultas</title>
  <?php $components->componentsHeader(); ?>
</head>
<body>

  <!--//HEADER\\-->
  <?php $header->header(); ?>


  <!--//==SIDEBAR==\\-->

  <?php $sidebar->sidebar(); ?>


   <main id="main" class="main">

      <div class="pagetitle">
        <h1>Citas Programadas</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?url=dashboard">Home</a></li>
            <li class="breadcrumb-item active">Citas</li>
          </ol>
        </nav>
      </div>


     <div class="section">
      <form method="POST">
      <div class="table-responsive">
        <table class="table table-light table-bordered" id="tablacita">
          <thead class="table-dark">
            <tr>
              <th scope="col">Fecha</th>
              <th scope="col">Hora</th>
              <th scope="col">Cédula</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody id="tbody">

          </tbody>
        </table>
        </div>
        </form>
      </div> 
      </div>
    </main>
      
   
   <div class="modal fade" id="infomodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Información Detallada Cita</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
                  <label for="inputName5" class="form-label">Cédula</label>
                </div>
                <div  class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">V-</span>
                 <input type="number" class="form-control" id="cedulaPaciente" disabled name='cedulaPaciente'>
                 
                </div>
                <div class="col-md-12">
                  <label class="form-label">Nombre</label>
                  <input type="name" class="form-control" id="nombre" disabled name='nombrePaciente' placeholder='Nombre'/>
                  <span class="d-block small opacity-50" id="errorNom"></span>
                </div>
                <div class="col-md-12">
                  <label class="form-label">Apellido</label>
                  <input class="form-control" id="apellido" disabled name='apellidoPaciente' type='name' placeholder='Apellido'/>
                  <span class="d-block small opacity-50" id="errorApe"></span>
                </div>
                <div class="col-12">
                  <label class="form-label">Correo</label>
                  <input class="form-control" id="correo" disabled name='correoPaciente' type='email' placeholder="Correo Electronico"/>
                  <span class="d-block small opacity-50" id="errorCo"></span>
                </div>
                <div class="col-12">
                  <label class="form-label">Teléfono</label>
                  <input class="form-control" id="telefono" disabled name='telefonoPaciente' type='number'/>
                  <span class="d-block small opacity-50" id="errorTele"></span>
                </div>
                <div class="col-md-12">
                  <label class="form-label">Fecha para la Cita</label>
                  <input type="date" class="form-control" id="fecha" disabled name='fechaCita'/>
                  <span class="d-block small opacity-50" id="errorFe"></span>
                </div>
                <div class="col-md-12">
                  <label class="form-label">Hora para la Cita</label>
                  <input  class="form-control" id="hora" disabled name='horaCita' type='time'/>
                  <span class="d-block small opacity-50" id="errorHo"></span>
                </div>
                <div class="col-12">
                   <label class="form-label">Motivo de la cita</label>
                  <div class="col-sm-12">
                    <textarea class="form-control" id="motivo" disabled name='motivoCita'/></textarea>
                    <span class="d-block small opacity-50" id="errorMoti"></span>
                  </div>
                </div>
        </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

                             <!-- Editar Cita -->


    <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Datos de la Cita</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST">
             <div class="col-md-12">
                  <label for="inputName5" class="form-label">Cédula</label>
                </div>
                <div  class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">V-</span>
                 <input type="hidden" class="form-control mb-2" name="" id="numHistoria2">
                 <input type="number" class="form-control" id="cedula2" disabled name='cedulaPaciente'>
                </div>
                <div class="col-md-12">
                <label class="form-label" >Nombre </label>
                  <input type="text" class="form-control" id="nombre2" name='nombrePaciente' disabled placeholder='Nombre'/>
                  <span class="d-block small opacity-50" id="errorNom"></span>
                </div>
                <div class="col-md-12">
                 <label class="form-label">Apellido</label>
                  <input class="form-control" id="apellido2"name='apellidoPaciente' type='name' disabled placeholder='Apellido'/>
                  <span class="d-block small opacity-50" id="errorApe"></span>
                </div>
               <div class="col-12">
                  <label class="form-label">Correo</label>
                  <input class="form-control" id="correo2"  name='correoPaciente' disabled type='email' placeholder="Correo Electronico"/>
                  <span class="d-block small opacity-50" id="errorCo"></span>
                </div>
                <div class="col-12">
                  <label for="telefonoPaciente" class="form-label">Teléfono</label>
                  <input class="form-control" id="telefono2" name='telefonoPaciente' disabled type='number'/>
                  <span class="d-block small opacity-50" id="errorTele"></span>
                </div>
                <div class="col-md-12">
                  <label class="form-label">Fecha para la Cita</label>
                  <input type="date" class="form-control" id="fecha2" name='fechaCita'/>
                  <span class="d-block small opacity-50" id="errorFe"></span>
                </div>
                <div class="col-md-12">
                  <label class="form-label">Hora para la Cita</label>
                  <input  class="form-control" id="hora2"  name='horaCita' type='time'/>
                  <span class="d-block small opacity-50" id="errorHo"></span>
                </div>
                <div class="col-12">
                   <label class="form-label">Motivo de la cita</label>
                  <div class="col-sm-12">
                    <textarea class="form-control" id="motivo2"  name='motivoCita'/></textarea>
                    <span class="d-block small opacity-50" id="errorMoti"></span>
                  </div>
                </div>
        </div>
              
              <div class="text-center">
                <button type="button" class="btn btn-primary" id="editarcita" value="Actualizar Cita">Actualizar Cita</button>
                </div>
                   <br>
                </form>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>

      <div class="modal fade" id="borrarCita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Cita</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

              <div class="m-5 text"><h5 align="center">¿Desea Eliminar la Cita??</h5></div>
                 <form method="POST">
                 <div class="text-center">
                  <button type="button" class="btn btn-primary" id="borrar" value="borrar">Borrar</button>
                  </button>
                </div>
                </form>
          </div>
          </div>
          </div>
        </div>
      </div>
          </div>

           <!-- Reporte -->

 <div class="modal fade" id="reporteCita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reporte de Cita</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

              <div class="m-5 text"><h5 align="center">¿Desea Descagar el Reporte?</h5></div>
                 <form method="POST" id="idReporte" target="_blank" style="display: inline;">
                 <div class="text-center">
                  <button  type="submit" name='reporte' class="btn btn-primary">Descargar</button>
                  </button>
                </div>
                </form>
          </div>
          </div>
          </div>
        </div>
      </div>
          </div>


</body>
  <?php $components->componentsJS(); ?>
        <script src="assets/js/Cita/consultaModalCita.js"></script> 
    </body>
</html>