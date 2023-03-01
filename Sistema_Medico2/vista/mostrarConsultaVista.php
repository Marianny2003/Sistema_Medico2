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
        <h1>Consultas médicas realizadas</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Layouts</li>
          </ol>
        </nav>
      </div>


     <div class="section">
      <form method="POST">
      <div class="table-responsive">
        <table class="table table-light table-bordered" id="consulta">
          <thead class="table-dark">
            <tr>
              <th scope="col">Cédula</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Fecha</th>
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
      
   
    <div class="modal fade" id="datos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Información detallada de la consulta</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="title"><h5>Datos Generales</h5></div>
            <div class="body">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Fecha de la Consulta</label>
                    <input type="text" class="form-control" name="fechaConsulta" id="valFecha" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Hora de la Consulta</label>
                    <input type="text" class="form-control" name="horaConsulta" id="valHora" disabled>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="title"><h5>Datos del paciente</h5></div>
            <div class="body">
              <div class="row g-3">
                 <div class="col-md-6">
                  <div class="form">
                    <label for="">Número de Historia Médica</label>
                    <input type="number" class="form-control" id="valHistoriaMedica" name="" value="" disabled> 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Cédula</label>
                    <input type="text" class="form-control" id="valCedula" placeholder="" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="valNombre"  placeholder="" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Segundo Nombre</label>
                    <input class="form-control" placeholder="" id="valSNombre" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Apellido</label>
                    <input class="form-control" placeholder="" id="valApellido" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Segundo Apellido</label>
                    <input class="form-control" placeholder="" id="valSApellido" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Edad</label>
                    <input class="form-control" placeholder="" id="valEdad" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Sexo</label>
                    <input class="form-control" placeholder="" id="valSexo" disabled>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

     <div class="modal fade" id="examenes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Información detallada de la consulta</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST">
            <div class="title mb-2"><h5>Datos Generales</h5></div>
              <div class="row g-3">
                <form>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="hidden" class="form-control mb-2" name="" id="valCodExaFisico">
                    <textarea class="form-control" placeholder="Descripcion General" name="exaFisico" id="valExaFisico" style="height: 100px;"></textarea>
                    <label for="funcionaldescription">Descripción General</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <label for="" class="form-label">Signo Sedente</label>
                    <input type="text" class="form-control" name="sigSedente" id="valSigSedente" placeholder="">
                </div>

                <div class="col-md-12">
                  <label for="" class="form-label">Signo Decubito</label>
                    <input type="text" class="form-control" name="sigDecubito" id="valSigDecubito">
                </div>

                <div class="col-md-12">
                  <label for="" class="form-label">Signo Bidepestación</label>
                    <input type="text" class="form-control" name="sigBidepestacion" id="valSigBidepestacion">
                </div>

                <div class="col-md-4">
                  <label for="" class="form-label">Talla (metros)</label>
                    <input type="text" class="form-control" name="talla" id="valTalla">
                </div>

                <div class="col-md-4">
                  <label for="" class="form-label">Peso(kg)</label>
                    <input type="text" class="form-control" name="peso" id="valPeso">
                </div>

                <div class="col-md-4">
                  <label for="" class="form-label">IMC</label>
                    <input type="text" class="form-control" name="IMC" id="valIMC">
                </div>

                <div class="col-md-6">
                  <label for="" class="form-label">Frecuencia Respiratoria (rpm)</label>
                    <input type="text" class="form-control" name="frecuRespiratoria" id="valFrecuRespiratoria">
                </div>

                <div class="col-md-6">
                  <label for="" class="form-label">Frecuencia Cardiaca (lpm)</label>
                    <input type="text" class="form-control" name="frecuCardiaca" id="valFrecuCardiaca">
                </div>

                <div class="col-md-6">
                  <label for="" class="form-label">Temperatura</label>
                    <input type="text" class="form-control" name="temperatura" id="valTemperatura">
                </div>

                <div class="col-md-6">
                  <label for="" class="form-label">Presión Arterial (mmHg)</label>
                    <input type="text" class="form-control" name="preArterial" id="valPreArterial">
                </div>
              </div>

              <div class="title m-3"><h5>Examen Funcional</h5></div>
                <div class="row g-3">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="hidden" class="form-control mb-2" name="" id="valCodExaFuncional">
                      <textarea class="form-control" placeholder="Descripcion General" name="" id="valExaFuncional" style="height: 100px;"></textarea>
                      <label for="funcionaldescription">Descripción General</label>
                    </div>
                  </div>

                <div class="col-md-12">
                  <div class="m-1 title"><h5>Examen Cardiovascular</h5></div>
                  <input type="hidden" class="form-control mb-2" name="" id="valCodCardio">
                  <label for="" class="form-label"></label>
                    <input type="text" class="form-control mb-2" name="preArterial" id="valCheckCardio">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Descripcion General" name="" id="valSisCardio" style="height: 100px;"></textarea>
                      <label for="funcionaldescription">Descripcion Detallada</label>
                    </div>
                </div>

                <div class="col-md-12">
                  <div class="m-1 title"><h5>Examen Respiratorio</h5></div>
                  <input type="hidden" class="form-control mb-2" name="" id="valCodRespiratorio">
                    <label for="" class="form-label"></label>
                    <input type="text" class="form-control mb-2" name="preArterial" id="valCheckRespiratorio">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Descripcion General" name="" id="valSisRespiratorio" style="height: 100px;"></textarea>
                      <label for="funcionaldescription">Descripcion Detallada</label>
                    </div>
                </div>

                  <div class="col-md-12">
                    <div class="m-1 title"><h5>Examen Gastrointestinal</h5></div>
                    <input type="hidden" class="form-control mb-2" name="" id="valCodGastro">
                    <label for="" class="form-label"></label>
                    <input type="text" class="form-control mb-2" name="preArterial" id="valCheckGastro">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Descripcion General" name="" id="valSisGastro" style="height: 100px;"></textarea>
                      <label for="funcionaldescription">Descripcion Detallada</label>
                    </div>
                </div>

                  <div class="col-md-12">
                    <div class="m-1 title"><h5>Examen Genitourinario</h5></div>
                    <input type="hidden" class="form-control mb-2" name="" id="valCodGenito">
                    <label for="" class="form-label"></label>
                    <input type="text" class="form-control mb-2" name="preArterial" id="valCheckGenito">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Descripcion General" name="" id="valSisGenito" style="height: 100px;"></textarea>
                      <label for="funcionaldescription">Descripcion Detallada</label>
                    </div>
                </div>

                  <div class="col-md-12">
                    <div class="m-1 title"><h5>Examen Osteomuscular</h5></div>
                    <input type="hidden" class="form-control mb-2" name="" id="valCodOsteo">
                    <label for="" class="form-label"></label>
                    <input type="text" class="form-control mb-2" name="preArterial" id="valCheckOsteo">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Descripcion General" name="" id="valSisOsteo" style="height: 100px;"></textarea>
                      <label for="funcionaldescription">Descripcion Detallada</label>
                    </div>
                </div>

                  <div class="col-md-12">
                    <div class="m-1 title"><h5>Examen Neurológico</h5></div>
                    <input type="hidden" class="form-control mb-2" name="" id="valCodNeuro">
                    <label for="" class="form-label"></label>
                    <input type="text" class="form-control mb-2" name="preArterial" id="valCheckNeuro">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Descripcion General" name="" id="valSisNeuro" style="height: 100px;"></textarea>
                      <label for="funcionaldescription">Descripcion Detallada</label>
                    </div>
                </div>

                  <div class="col-md-12">
                    <div class="m-1 title"><h5>Examen Endocrino-Metabolico</h5></div>
                    <input type="hidden" class="form-control mb-2" name="" id="valCodEndo">
                    <label for="" class="form-label"></label>
                    <input type="text" class="form-control mb-2" name="preArterial" id="valCheckEndo">
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Descripcion General" name="" id="valSisEndo" style="height: 100px;"></textarea>
                      <label for="funcionaldescription">Descripcion Detallada</label>
                    </div>
                </div>

                <div class="text-center">
                  <button type="button" class="btn btn-primary" id="editarexamenes" value="Actualizar Examenes">Actualizar Diagnostico</button>
                  <button type="reset" class="btn btn-secondary" id="limpiarformulario" value="Limpiar Diagnostico">Limpiar</button>
                </div>
                      
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
        
    <div class="modal fade" id="diagnostico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Información detallada de la consulta</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="title"><h5>Datos Generales</h5></div>
              <div class="row g-3">
                <form method="POST">
                    <input type="hidden" class="form-control mb-2" name="" id="valCodDiagnostico">
                    <input  type="hidden" class="form-control mb-2" name="" id="valCodTratamiento">
                <div class="col-md-12">
                  <div class="form">
                    <label for="" class="form-label">Diagnóstico</label>
                    <textarea class="form-control" placeholder="Descripcion General" id="valDiagnostico" name="diagnostico" style="height: 100px;"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form">
                    <label for="" class="form-label">Indicaciones del Tratamiento</label>
                    <textarea class="form-control" placeholder="Descripcion General" id="valTratamiento" name="tratamiento" style="height: 100px;"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form">
                    <label for="" class="form-label">Medicamentos recetados</label>
                    <textarea class="form-control" placeholder="Descripcion General" id="valIndicaciones" name="indicaciones" style="height: 100px;"></textarea>
                  </div>
                </div>
                 <div class="text-center">
                  <button type="button" class="btn btn-primary" id="editardiagnostico" value="Actualizar Diagnóstico">Actualizar Diagnostico</button>
                  <button type="reset" class="btn btn-secondary" id="limpiarformulario" value="Limpiar Diagnostico">Limpiar</button>
                </div>
                </form>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="borrarC" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Consulta</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

              <div class="m-5 text"><h5>¿Está seguro que desea eliminar esta consulta?</h5></div>
                 <form method="POST">
                 <div class="text-center">
                  <button type="button" class="btn btn-primary" id="borrar" value="borrar">Borrar</button>
                  <button type="reset" class="btn btn-secondary" id="cerrar" value="volver">Volver</button>
                </div>
                </form>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>




</body>
	<!--//JS\\-->
	<?php $components->componentsJS(); ?>
  <script src="assets/js/consulta/datosConsultaAjax.js"></script>

 
</html>

