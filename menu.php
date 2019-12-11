<?php
if (getenv('LIVE') == 1) {
  $app="/app";
}else {
  $app="";
}
require_once($_SERVER["DOCUMENT_ROOT"].$app.'/sistemapediatria/funciones.php'); ?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicio.php">
    <div class="sidebar-brand-icon rotate-n-15">
      <img width="50px;" src="img/carabebe.png" alt="">
    </div>
    <div class="sidebar-brand-text mx-3">S.E.P</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">



  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="agregarPregunta.php">
      <i class="fas fa-plus"></i>
      <span>Agregar Pregunta</span>
    </a>

  </li>
  <hr class="sidebar-divider">

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-arrow-right"></i>
      <span>Examenes Primero</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="preguntas.php?curso=1">Preguntas </a>
      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-arrow-right"></i>
      <span>Examenes Segundo</span>
    </a>
    <div id="collapsethree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="preguntas.php?curso=2">Preguntas </a>

      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-arrow-right"></i>
      <span>Examenes Tercero</span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="preguntas.php?curso=3">Preguntas </a>

      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-arrow-right"></i>
      <span>Examenes Cuarto</span>
    </a>
    <div id="collapseFive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="preguntas.php?curso=4">Preguntas</a>

      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
