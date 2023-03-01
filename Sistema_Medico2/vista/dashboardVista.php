<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<?php $components->componentsHeader(); ?>
	<link rel="stylesheet" type="text/css" href="assets/css/startmin.css">
      <link rel="stylesheet" type="text/css" href="assets/css/fullCalendar/main.css">

      <script src="assets/js/fullCalendar/main.js"></script> 
</head>
<body data-bs-theme="light">
 <button onclick="cambiarTema()"class="btn rounded-fill"> <i id="dl-icon"  class="bi bi-moon-stars"></i></button>
	<!--//HEADER\\-->
	<?php $header->header(); ?>


	<!--//==SIDEBAR==\\-->

	<?php $sidebar->sidebar(); ?>

<main id="main" class="main">
    
    <div class="row">
                <div class="col-md-4" align="center">
                 <img src="assets/img/logo.png" width="90">
                </div>

                <div class="col-md-4"align="center">
                <h2 class="titulo">
                            <span class="typed"></span>
                        </h2>
                    <div class="titulo" id="cadenas-texto">
                        <p>BIENVENIDA <br>  <i class="mascota"> Dra. María Beatriz Mendoza</i></p>
                        <p>Modulo <br>  <i class="mascota"> Paciente</i></p>
                        <p>Modulo <br> <i class="mascota"> Cita</i></p>
                         <p>Modulo <br>  <i class="mascota"> Consulta</i></p>
                        <p>Modulo <br> <i class="mascota"> Antecedentes</i></p>
                         <p>Modulo <br>  <i class="mascota"> Historia Medica </i></p>
                        <p>Modulo <br> <i class="mascota"> Reporte</i></p>

                    </div> 
                </div>

                <div class="col-md-4" align="center">
                  
                        <img src="assets/img/logo2.png" width="90">
                </div>
    </div><!-- End Page Title -->
<br><br> <br><br> <br> 
    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-blue">
                                <div align="center" class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <img src="assets/font/paciente1.svg">
                                        </div>
                                        <div class="col-xs-9 text-right">
                                          <div class="huge">25</div>
                                            <div>PACIENTE</div>
                                            <a href="?url=mostrarpaciente">
                                        </div>
                                    </div>
                                </div>
                                
                                    <div align="center" class="panel-footer">
                                        <h6 class="pull-left">Ver Detalles</h6>
                                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div align="center" class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <img src="assets/font/cita1.svg">
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="huge">20</div>
                                            <div align="center">CITA</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="?url=consultaCita">
                                    <div align="center" class="panel-footer">
                                        <h6 class="pull-left">Ver Detalles</h6>
                                        <span class="pull-right"></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div align="center" class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <img src="assets/font/historia1.svg">
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">22</div>
                                            <div>HISTORIAS MEDICA</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="?url=historiamedica">
                                    <div align="center" class="panel-footer">
                                        <h6 class="pull-left">Ver Detalles</h6>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div align="center" class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <img src="assets/font/reporte1.svg">
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">18</div>
                                            <div>REPORTE</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="?url=reporte">
                                    <div align="center" class="panel-footer">
                                        <h6 class="pull-left">Ver Detalles</h6>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                     <br>

  
                       <div class="card">
                       <div class="card-body">
                        <br>

                        <div id="calendar" style=" border: 1px solid white; padding: 0px;">
                            
                        </div>

                 </div>
                    </div>
                   

                   <script>
                       let calendar = new FullCalendar.Calendar(document.getElementById('calendar'),{
                         locales:'es',
                         events:'datoseventes.php?=listar'

                       });

                     calendar.render();

                   </script> 

            <!-- Reports -->
            <div class="col-12">
              <div class="card">
            <div class="card-body pb-0"></div>
            </div>
          </div><!-- End News & Updates -->
        </div><!-- End Right side columns -->
      </div>
    </section>
  </main><!-- End #main -->
</body>
	<!--//JS\\-->
	<?php $components->componentsJS(); ?>
         <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

    <script src="assets/js/maintexto.js"></script> 

</html>

