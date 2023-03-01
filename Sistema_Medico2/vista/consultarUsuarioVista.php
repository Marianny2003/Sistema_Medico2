<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>Usuario</title>
 <?php $components->componentsHeader(); ?>
</head>
<body>
 <!--//HEADER\\-->
 <?php $header->header(); ?>


 <!--//==SIDEBAR==\\-->

 <?php $sidebar->sidebar(); ?>

  <main id="main" class="main">

      <div class="pagetitle">
        <h1>Usuarios</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?url=dashboard">Home</a></li>
            <li class="breadcrumb-item active">User</li>
          </ol>
        </nav>
      </div>


     <div class="section">
      <form method="POST">
      <div class="table-responsive">
        <table class="table table-light table-bordered" id="tablausuario">
          <thead class="table-dark">
            <tr>
              <th scope="col">Nombre y Apellido</th>
              <th scope="col">Correo</th>
              <th scope="col">username</th>
              <th scope="col">Acciones</th>

            </tr>
          </thead>
          <tbody id="tbody">

          </tbody>
        </table>
        <center>
        <button type="button" class="btn btn-outline-secondary" id="a"data-bs-toggle="modal" data-bs-target="#agregar">Agregar Asistente</button>
        </center>
        </div>
        </form>
      </div> 
      </div>
    </main>
      
   
   <div class="modal fade" id="infomodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Información del Usuario</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
                  <label class="form-label">Nombre y Apellido</label>
                 <input type="name" class="form-control" id="nombreApellido" disabled name='nombreApellido'>
                </div>
                <div class="col-md-12">
                  <label class="form-label">Correo</label>
                  <input type="name" class="form-control" id="correo" disabled name='correo'/>
                  <span class="d-block small opacity-50" id="errorNom"></span>
                </div>
                <div class="col-md-12">
                  <label class="form-label">Nombre de Usuario</label>
                  <input class="form-control" id="nombreUser" disabled name='nombreUser' type='name'/>
                </div>
                <div class="col-12">
                  <label class="form-label">Contraseña</label>
                  <input class="form-control" id="password" disabled name='password'/>
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
            <h5 class="modal-title" id="exampleModalLabel">Editar Datos del Usuario</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST">
               <div class="col-md-12">
                  <label class="form-label">Nombre y Apellido</label>
                 <input type="name" class="form-control" id="nombreApellido2" name='nombreApellido'>
                </div>
                <div class="col-md-12">
                  <label class="form-label">Correo</label>
                  <input type="name" class="form-control" id="correo2" name='correo'/>
                </div>
                <div class="col-md-12">
                  <label class="form-label">Nombre de Usuario</label>
                  <input class="form-control" id="nombreUser2" name='nombreUser' type='name'/>
                </div>
                <div class="col-12">
                  <label class="form-label">Contraseña</label>
                  <input class="form-control" id="password2" name='password'/>
                </div>
              <br>
              
              <div class="text-center">
                <button type="button" class="btn btn-primary" id="editarusuario" value="Actualizar Usuario" data-bs-dismiss="modal" aria-label="Close">Actualizar Usuario</button>
                </div>
                   <br>
                </form>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Borrar -->

      <div class="modal fade" id="borrarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

              <div class="m-5 text"><h5 align="center">¿Desea Eliminar el Usuario?</h5></div>
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

    <div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Asistente</h5>
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
             
                
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label" >Nombre y Apellido</label>
                  <input type="text" class="form-control" disabled id="nombrePaciente"name='' >
                  <span class="d-block small opacity-50" id=""></span>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label"  >Correo</label>
                  <input type="text" class="form-control" id="segundoNombre" disabled name=''>
                  <span class="d-block small opacity-50" id="error1"></span>

                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label" >Nombre de Usuario</label>
                  <input type="text" class="form-control" id="apellidoPaciente" disabled name=''>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label" >Contraseña</label>
                  <input type="text" class="form-control" id="segundoApellido"disabled  name=''>
                  <span class="d-block small opacity-50" id="error2"></span>
                </div>
                <div class="text-center">
                 <button type="submit" class="btn btn-primary " id="enviareditar" value="Finalizar Consulta" data-bs-dismiss="modal" aria-label="Close">Enviar</button>
                  <button type="reset" class="btn btn-secondary" id="limpiar" value="Reiniciar Consulta">Borrar</button>
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


</body>
  <?php $components->componentsJS(); ?>
        <script src="assets/js/User/consultaModalUser.js"></script> 
    </body>
</html>