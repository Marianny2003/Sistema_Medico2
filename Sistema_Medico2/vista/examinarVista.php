<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta Médica</title>
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
      <h1>Consulta Medica</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Consulta</li>
          <li class="breadcrumb-item active">Examen Medico</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <form method="POST">
      <div class="row">
        <div class="col-lg-12">

        <div class="shadow-sm p-3 mb-5 bg-body rounded">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="m-2 bi bi-calendar2-date-fill"></i>Datos de la Consulta</h5>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Fecha de la Consulta</label>
                    <input type="date" class="form-control" name="fechaConsulta" id="valFecha">
                    <span class="d-block small opacity-50" id="errorFecha"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Hora de la Consulta</label>
                    <input type="time" class="form-control" name="horaConsulta" id="valHora">
                    <span class="d-block small opacity-50" id="errorHora"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="shadow-sm p-3 mb-5 bg-body rounded">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="m-2 bi bi-person-circle"></i>Datos Del Paciente</h5>
              <div class="row">
                <div class="col-md-12">
                  <div class="form">
                    <select name="historiaMedica" class="form-select" id="valHistoriaMedica" >
                        <option class="option" value="">Paciente</option>
                            <?php if(isset($mostrar)){
                                foreach($mostrar as $data){
                            ?>
                        <option value="<?php echo $data->numHistoriaMedica;?>" class="option"><?php echo $data->cedulaPaciente; ?> - <?php echo $data->nombrePaciente; ?> <?php echo $data->apellidoPaciente; ?></option>
                            <?php
                                }
                            }else{"";}

                            ?>
                        </select>
                        <span class="d-block small opacity-50" id="errorCedula"></span>
                        <br>
                  </div>
                </div>
              </div>

              <!-- Formulario de datos -->
              <div class="mb-3 row g-3">
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Número de Historia Médica</label>
                    <input type="number" class="form-control" id="numHistoriaMedica" name="" value="" disabled> 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Cédula</label>
                    <input type="text" class="form-control" id="cedulaPaciente" placeholder="" disabled>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="nombrePaciente"  placeholder="" disabled>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="">Apellido</label>
                    <input class="form-control" placeholder="" id="apellidoPaciente" disabled>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="shadow-sm p-3 mb-5 bg-body rounded">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="m-2 bi bi-heart-pulse"></i>Exámen Funcional</h5>
              <!-- Examen Funcional-->
              <div class="row g-3">
                <div class="col-md-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="" id="valExaFuncional" name="exaFuncional" style="height: 100px;"></textarea>
                    <label for="valExafuncional">Descripción General</label>
                    <span class="d-block small opacity-50" id="errorExaFuncional"></span>
                  </div>
                </div>
                <div class="accordion" id="acordionSistemas">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                      Sistema Cardiovascular
                    </button>
                    </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                          <div class="row mb-3">
                            <div class="col-md-5">
                              <select class="form-select" name="checkCardio" id="valCheckCardio">
                                <option selected value="Sistema Cardiovascular(NO REALIZADO)">...</option>
                                <option value="Detalles del Sistema Cardiovascular">Sistema Cardiovascular</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" id="valSisCardio" name="sisCardio" style="height: 100px;"></textarea>
                                <label for="valSisCardio">Descripción General</label>
                                <span class="d-block small opacity-50" id="errorSisCardio"></span>
                              </div>
                            </div>
                          </div>
                      </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Sistema Respiratorio
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                      <div class="accordion-body">
                        <div class="row mb-3">
                            <div class="col-md-5">
                              <select class="form-select" name="checkRespiratorio" id="valCheckRespiratorio">
                                <option selected value="Sistema Respiratorio(NO REALIZADO)">...</option>
                                <option value="Detalles del Sistema Respiratorio">Sistema Respiratorio</option>
                              </select>
                            </div>
                          </div>
                            <div class="col-md-12">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" id="valSisRespiratorio" name="sisRespiratorio" style="height: 100px;"></textarea>
                                <label for="valSisRespiratorio">Descripción General</label>
                                <span class="d-block small opacity-50" id="errorSisRespiratorio"></span>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                   <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Sistema Gastrointestinal
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                          <div class="accordion-body">
                            <div class="row mb-3">
                              <div class="col-md-5">
                                <select class="form-select" name="checkGastro" id="valCheckGastro">
                                  <option selected value="Sistema Gastrointestinal(NO REALIZADO)">...</option>
                                  <option value="Detalles del Sistema Gastrointestinal">Sistema Gastrointestinal</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" name="sisGastro" id="valSisGastro" style="height: 100px;"></textarea>
                                <label for="valSisGastro">Descripción General</label>
                                <span class="d-block small opacity-50" id="errorSisGastro"></span>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                   <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                        Sistema Genitourinario
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                      <div class="accordion-body">
                        <div class="row mb-3">
                          <div class="col-md-5">
                            <select class="form-select" name="checkGenito" id="valCheckGenito">
                              <option selected value="Sistema Genitourinario(NO REALIZADO)">...</option>
                              <option value="Sistema Genitourinario">Sistema Genitourinario</option>
                            </select>
                          </div>
                        </div>
                            <div class="col-md-12">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" name="sisGenito" id="valSisGenito" style="height: 100px;"></textarea>
                                <label for="valSisGenito">Descripción General</label>
                                <span class="d-block small opacity-50" id="errorSisGenito"></span>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                   <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                        Sistema Osteomuscular
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                      <div class="accordion-body">
                        <div class="row mb-3">
                            <div class="col-md-5">
                              <select class="form-select" name="checkOsteo" id="valCheckOsteo">
                                <option selected value="Sistema Osteomuscular(NO REALIZADO)">...</option>
                                <option value="Sistema Osteomuscular">Sistema Osteomuscular</option>
                              </select>
                            </div>
                          </div>
                            <div class="col-md-12">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" name="sisOsteo" id="valSisOsteo" style="height: 100px;"></textarea>
                                <label for="valSisOsteo">Descripción General</label>
                                <span class="d-block small opacity-50" id="errorSisOsteo"></span>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                   <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                       Sistema Neurológico
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                      <div class="accordion-body">
                        <div class="row mb-3">
                            <div class="col-md-5">
                              <select class="form-select" name="checkNeuro" id="valCheckNeuro">
                                <option selected value="Sistema Neurológico(SIN DATOS REGISTRADOS)">...</option>
                                <option value="Sistema Neurológico">Sistema Neurologico</option>
                              </select>
                            </div>
                          </div>
                            <div class="col-md-12">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" name="sisNeuro" id="valSisNeuro" style="height: 100px;"></textarea>
                                <label for="valSisNeuro">Descripción General</label>
                                <span class="d-block small opacity-50" id="errorSisNeuro"></span>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                       Sistema Endocrino-Metabolico
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                      <div class="accordion-body">
                        <div class="row mb-3">
                            <div class="col-md-5">
                              <select class="form-select" name="checkEndo" id="valCheckEndo">
                                <option selected value="Sistema Endocrino-Metabolico(SIN DATOS REGISTRADOS)">...</option>
                                <option value="Sistema Endocrino-Metabolico">Sistema Endocrino-Metabolico</option>
                              </select>
                            </div>
                          </div>
                            <div class="col-md-12">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" name="sisEndo" id="valSisEndo" style="height: 100px;"></textarea>
                                <label for="valSisEndo">Descripción General</label>
                                <span class="d-block small opacity-50" id="errorSisEndo"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>       
                  </div> 
                </div>
        	     </div>
              </div>
            </div>

          <div class="shadow-sm p-3 mb-5 bg-body rounded">
            <div class="card">
              <div class="card-body">
              <h5 class="card-title"><i class="m-2 bi bi-universal-access"></i>Exámen Físico</h5>
                <div class="row g-3">
                  <div class="col-md-12">
                    <div class="form-floating">
                    <textarea class="form-control" placeholder="Descripcion General" name="exaFisico" id="valExaFisico" style="height: 100px;"></textarea>
                    <label for="valExaFisico">Descripción General</label>
                    <span class="d-block small opacity-50" id="errorExaFisico"></span>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label for="" class="form-label">Signo Decubito</label>
                      <input type="number" class="form-control" name="sigDecubito" id="valSigDecubito">
                      <span class="d-block small opacity-50" id="errorSigDecubito"></span>
                  </div>

                  <div class="col-md-12">
                    <label for="" class="form-label">Signo Sedente</label>
                      <input type="number" class="form-control" name="sigSedente" id="valSigSedente" placeholder="">
                      <span class="d-block small opacity-50" id="errorSigSedente"></span>
                  </div>

                  <div class="col-md-12">
                    <label for="" class="form-label">Signo Bipedestación</label>
                      <input type="number" class="form-control" name="sigBidepestacion" id="valSigBidepestacion">
                      <span class="d-block small opacity-50" id="errorSigBidepestacion"></span>
                  </div>

                  <div class="col-md-4">
                    <label for="" class="form-label">Talla (metros)</label>
                      <input type="number" class="form-control" name="talla" id="valTalla">
                      <span class="d-block small opacity-50" id="errorTalla"></span>
                  </div>

                  <div class="col-md-4">
                    <label for="" class="form-label">Peso(kg)</label>
                      <input type="number" class="form-control" name="peso" id="valPeso">
                      <span class="d-block small opacity-50" id="errorPeso"></span>
                  </div>

                  <div class="col-md-4">
                    <label for="" class="form-label">IMC</label>
                      <input type="number" class="form-control" name="IMC" id="valIMC">
                      <span class="d-block small opacity-50" id="errorIMC"></span>
                  </div>

                  <div class="col-md-6">
                    <label for="" class="form-label">Frecuencia Respiratoria (rpm)</label>
                      <input type="number" class="form-control" name="frecuRespiratoria" id="valFrecuRespiratoria">
                      <span class="d-block small opacity-50" id="errorFrecuRespiratoria"></span>
                  </div>

                  <div class="col-md-6">
                    <label for="" class="form-label">Frecuencia Cardiaca (lpm)</label>
                      <input type="number" class="form-control" name="frecuCardiaca" id="valFrecuCardiaca">
                      <span class="d-block small opacity-50" id="errorFrecuCardiaca"></span>
                  </div>

                  <div class="col-md-6">
                    <label for="" class="form-label">Temperatura</label>
                      <input type="number" class="form-control" name="temperatura" id="valTemperatura">
                      <span class="d-block small opacity-50" id="errorTemperatura"></span>
                  </div>

                  <div class="col-md-6">
                    <label for="" class="form-label">Presión Arterial (mmHg)</label>
                      <input type="text" class="form-control" name="preArterial" id="valPreArterial">
                      <span class="d-block small opacity-50" id="errorPreArterial"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="shadow-sm p-3 mb-5 bg-body rounded">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><i class="m-2 bi bi-clipboard2-pulse"></i>Examenes Previos</h5>
                <div class="row g-3">
                  <div class="col-md-12">
                    <div class="form">
                      <label for="" class="form-label">Describir los examenes previos del paciente</label>
                      <textarea class="form-control" placeholder="Descripcion General" id="valExaPrevio" name="exaPrevio" style="height: 100px;"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <div class="shadow-sm p-3 mb-5 bg-body rounded">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="m-2 bi bi-receipt-cutoff"></i>Diagnóstico y Tratamiento</h5>
              <div class="row g-3">
                <div class="col-md-12">
                  <div class="form">
                    <label for="" class="form-label">Diagnóstico</label>
                    <textarea class="form-control" placeholder="Descripcion General" id="valDiagnostico" name="diagnostico" style="height: 100px;"></textarea>
                    <span class="d-block small opacity-50" id="errorDiagnostico"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="" class="form-label">Indicaciones del Tratamiento</label>
                    <textarea class="form-control" placeholder="Descripcion General" id="valTratamiento" name="tratamiento" style="height: 100px;"></textarea>
                    <span class="d-block small opacity-50" id="errorIndicaciones"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form">
                    <label for="" class="form-label">Medicamentos recetados</label>
                    <textarea class="form-control" placeholder="Descripcion General" id="valIndicaciones" name="indicaciones" style="height: 100px;"></textarea>
                    <span class="d-block small opacity-50" id="errorTratamiento"></span>
                  </div>
                </div>
              </div>
                <div class="mt-3 text-center">
                  <button type="button" class="btn btn-primary" id="enviar" value="Finalizar Consulta">Finalizar Consulta</button>
                  <button type="reset" class="btn btn-secondary" id="limpiar" value="Reiniciar Consulta">Reiniciar Consulta</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </form>
</section>
</main>



</body>
	<!--//JS\\-->
	<?php $components->componentsJS(); ?>
  <script src="assets/js/consulta/validacionConsulta.js"></script>
  

</html>

