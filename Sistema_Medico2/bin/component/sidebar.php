<?php 

  namespace component;

  class sidebar{

    public function sidebar(){

      $componentsSidebar = '

        <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="?url=dashboard"
          <span><img src="assets/font/home.svg">Home</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
          <img src="assets/font/usurarioconsulta.svg">Gestionar Usuario<i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?url=consultarUsuario">
             <img src="assets/font/circle.svg"></i><span>Consultar Usuario</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#cita-nav" data-bs-toggle="collapse" href="#">
         <img src="assets/font/cita.svg">Gestionar Cita<i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="cita-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?url=cita">
             <img src="assets/font/circle.svg"></i><span>Crear Cita</span>
            </a>
          </li>
          <li>
            <a href="?url=consultaCita">
             <img src="assets/font/circle.svg"></i><span>Consultar Cita</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#paciente-nav" data-bs-toggle="collapse" href="#">
          <img src="assets/font/paciente.svg">Gestionar Paciente<i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="paciente-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?url=paciente">
              <img src="assets/font/circle.svg"></i><span>Registro de Paciente</span>
            </a>
          </li>
          <li>
            <a href="?url=mostrarpaciente">
               <img src="assets/font/circle.svg"></i><span>Consultar Paciente</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#catalago-nav" data-bs-toggle="collapse" href="#">
          <img src="assets/font/catalogo.svg">Antecedentes<i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="catalago-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?url=catalogo">
              <img src="assets/font/circle.svg"></i><span>Registro de Patología</span>
            </a>
          </li>
          <li>
            <a href="?url=mostrarCatalogo">
              <img src="assets/font/circle.svg"></i><span>Mostrar Antecedentes</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#consulta-nav" data-bs-toggle="collapse" href="#">
          <img src="assets/font/usurarioconsulta.svg"></i>Consulta<i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="consulta-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?url=examinar">
              <img src="assets/font/circle.svg"></i><span>Registro de Consulta</span>
            </a>
          </li>
          <li>
            <a href="?url=mostrarConsulta">
            <img src="assets/font/circle.svg"></i><span>Mostrar Consulta</span>
            </a>
          </li>
          
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#historia-nav" data-bs-toggle="collapse" href="#">
         <img src="assets/font/historia.svg"></i>Historia Medica<i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="historia-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?url=historiamedica">
              <img src="assets/font/circle.svg"></i><span>Imprimir</span>
            </a>
        </ul>
      </li>

   

  </aside><!-- End Sidebar-->
            ';    

      echo $componentsSidebar; 

    }
  }




 ?>