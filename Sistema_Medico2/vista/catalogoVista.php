<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Registrar Patologias
</title>
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
      <h1>Registrar Patologias</h1>
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
              
              <!-- Multi Columns Form -->
    <form method="POST">
      

           <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datos Del Paciente</h5>
              <div class="col-md-12">
                <div class="col-md-12">
                 
                    <select name="numHistoriaMedica" class="form-control " id="valHistoriaMedica">
                        <option selected value="">Paciente</option>
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
            
                </div>
              </div>

              <!-- Formulario de datos -->
              <div class="row g-3">
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
         
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Historial Patologico</h5>

              <!-- Historial Patologico-->
            <div class='field col-md-12'>
                <label  class="form-label">Descripción Patologica</label>
                <textarea  class="form-control" name="descripcionPatologia" rows="10" cols="40" id="descripcionPato" placeholder="Ingrese la información"></textarea>
                <span class="d-block small opacity-50" id="errordescripcionPato"></span>
            </div>

            <div class='field col-md-12'>
                <label  class="form-label"> Habito Psicobiologicos </label>
                <textarea  class="form-control" name="descripcionHabPsico" rows="10" cols="40" id="descripcionHabPsico"placeholder="Alcoholico, Tabáquico, Chimoico, Psicotropicos, Religion, Profesión y/o ocupación, Alimentación, Inmunización"></textarea>
                 <span class="d-block small opacity-50" id="errordescripcionHabPsico"></span>
            </div>

            <div class='field col-md-12'>
                <label  class="form-label">Descripción Antecedentes Familiares</label>
                <textarea  class="form-control d-block text-muted " name="descripcionAntFam" rows="10" cols="40" id="descripcionAntFam"placeholder="(Abuela Materna o Paterna, Abuelo Materno o Paterno, Madre, Padre, Hermano)."></textarea>
                 <span class="d-block small opacity-50" id="errordescripcionAntFam"></span>


            </div>
            <br>
             <div class="text-center">
                  <button type="button" class="btn btn-primary" id="enviar" value="Finalizar Consulta">Enviar</button>
                  <button type="reset" class="btn btn-secondary" id="limpiar" value="Reiniciar Consulta">Borrar</button>
                </div>
                <br>
            </form>

<form method="POST">  
                <div class="accordion" id="accordionPanelsStayOpenExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                        Registro Obstetricos
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                                         
             <!--// Registro Obstetricos\\--> 
                   <br>
                <div class="row g-3">
                        <div class="col-md-12">
                              <select name="numHistoriaMedica" class="form-control" id="valHistoriaMedica2">
                        <option selected value="">Paciente</option>
                            <?php if(isset($mostrar)){
                                foreach($mostrar as $data){
                            ?>
                        <option value="<?php echo $data->numHistoriaMedica;?>" class="option"><?php echo $data->cedulaPaciente; ?> - <?php echo $data->nombrePaciente; ?> <?php echo $data->apellidoPaciente; ?>  - <?php echo $data->sexoPaciente; ?></option>
                            <?php
                                }
                            }else{"";}

                            ?>
                        </select>
                        <span class="d-block small opacity-50" id="errorCedula"></span>  
                            </div>
                            <!-- End #main -->
              <div class="col-md-2">
                              <label class="form-label">Menarquia</label>
                              <div class="form-floating">
                                <input type="number" name="menarquia" class="form-control" id="menarquia" placeholder="Ingrese la edad." required>
                                <label for="funcionaldescription">
                                <span class="d-block small opacity-50">Edad</span>
                                </label>
                                <span class="d-block small opacity-50" id="errormenarquia"></span>
                              </div>
                            </div>

                       <div class="col-md-2">
                            <label class="form-label">Sixarquia</label>
                              <div class="form-floating">
                                <input type="number" name="sixarquia" id="sixarquia" class="form-control" placeholder="Ingrese la edad." required>
                                <label for="funcionaldescription">
                                <span class="d-block small opacity-50">Edad</span></label>
                                <span class="d-block small opacity-50" id="errorsixarquia"></span>
                              </div>
                            </div>

                            <div class="col-md-8">
                                <label class="form-label">NPS</label>
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" name="nps" id="nps"></textarea>
                                <label for="funcionaldescription">
                                 <span class="d-block small opacity-50"id="errornps">Ingrese Información</span></label>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <label class="form-label">Citología</label>
                              <div class="form-floating">
                                <input type="date" name="citologia" class="form-control" id="citologia" placeholder="Ingrese la edad." required>
                                <label for="funcionaldescription">Fecha</label>
                                <span class="d-block small opacity-50" id="errorcitologia"></span>
                              </div>
                            </div>

                             <div class="col-md-6">
                              <label class="form-label">Descripcion Citologia</label>
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" name="descripCitologia" id="descripCitologia"></textarea>
                                <label for="funcionaldescription">
                                 <span class="d-block small opacity-50" id="errordescripCito">Ingrese Información</span></label>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <label class="form-label">Mamografía</label>
                              <div class="form-floating">
                                <input type="date" name="mamografia" id="mamografia" class="form-control" placeholder="Ingrese la edad." required>
                                <label for="funcionaldescription">Fecha</label>
                              </div>
                              <span class="d-block small opacity-50" id="errormamografia"></span>
                            </div>


                             <div class="col-md-6">
                              <label class="form-label">Descripcion Mamografía</label>
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" name="descripMamografia" id="descripMamografia"></textarea>
                                <label for="funcionaldescription">
                                 <span class="d-block small opacity-50" id="errordescripMamo">Ingrese Información</span></label>
                              </div>
                            </div>

                            <div class="col-md-4">
                               <label class="form-label">Gestas</label>
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" name="gestas" id="gestas" style="height: 100px;"></textarea>
                                <label for="funcionaldescription">
                                 <span class="d-block small opacity-50" id="errorgestas">Ingrese Información</span></label>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <label class="form-label">Parras o Ceseareas</label>
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" name="paras" id="paras" style="height: 100px;"></textarea>
                                <label for="funcionaldescription">
                                 <span class="d-block small opacity-50" id="errorparas">Ingrese Información</span></label>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <label class="form-label">Abortos</label>
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Descripcion General" name="aborto" id="aborto" style="height: 100px;"></textarea>
                                <label for="funcionaldescription">
                                 <span class="d-block small opacity-50" id="erroraborto">Ingrese Información</span></label>
                              </div>
                            </div>
                     
                     <br>
                         <div class="text-center">
                          <button type="button" class="btn btn-primary" id="enviar1" value="Finalizar Consulta">Enviar</button>
                          <button type="reset" class="btn btn-secondary" id="limpiar" value="Reiniciar Consulta">Borrar</button>
                          </div>
                          
                    </div>
                  </div>
                  </div>
                  </div>
</form> 
                  </div>
                  </div>
                  </div>
                  </div>
                   <br>
                    
                 

                 <br>
                 
</section>

  </main><!-- End #main -->

    </body>
       <!--//JS\\-->
  <?php $components->componentsJS(); ?>
  <script src="assets/js/Catalago/validacionesCatalago.js"></script> 
</html>