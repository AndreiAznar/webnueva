<?php
  /** $nav_active debería definirse en cada vista (inicio, contacto, etc.) */
  if (!isset($nav_active)) { $nav_active = ''; }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="<?= url('Views/Inicio/index.php') ?>" aria-label="Visual Technologies">
      <img src="<?= asset_url('Img/empresa/logo.jpg') ?>" alt="Logo Visual Technologies" width="40" height="40" class="rounded-circle">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Abrir menú">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav mx-auto gap-2 gap-lg-4">
        <li class="nav-item"><a class="nav-link fw-bold<?= is_active($nav_active,'inicio') ?>" href="<?= url('Views/Inicio/index.php') ?>">Inicio</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link fw-bold dropdown-toggle<?= is_active($nav_active,'servicios') ?>" href="#" role="button" data-bs-toggle="dropdown">Servicios</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= url('Views/Termografias/index.php') ?>">Termografías</a></li>
            <li><a class="dropdown-item" href="<?= url('Views/CensoCinegetico/index.php') ?>">Censos Cinegéticos</a></li>
            <li><a class="dropdown-item" href="<?= url('Views/Recorridos360/index.php') ?>">Recorridos 360º</a></li>
            <li><a class="dropdown-item" href="<?= url('Views/SeguimientosDeObra/index.php') ?>">Seguimientos de Obra</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link fw-bold<?= is_active($nav_active,'acercade') ?>" href="<?= url('Views/AcercaDe/index.php') ?>">Acerca De</a></li>
        <li class="nav-item"><a class="nav-link fw-bold<?= is_active($nav_active,'contacto') ?>" href="<?= url('Views/Contacto/index.php') ?>">Contacto</a></li>
        <li class="nav-item"><a class="nav-link fw-bold" href="<?= APPINSPECTOR_URL ?>" target="_blank" rel="noopener">AppInspector</a></li>
      </ul>
    </div>
  </div>
</nav>
