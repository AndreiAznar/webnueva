<?php
  // Views/SeguimientosDeObra/index.php
  $page_title = 'Visual Technologies — Seguimientos de Obra';
  $nav_active = 'servicios';
  $page_css = [
    'Views/Css/styleSeguimientoDeObra.css' // usa tu CSS existente
  ];
  require_once __DIR__ . '/../../partials/head.php';
  require_once __DIR__ . '/../../partials/header.php';
?>

<main>

  <!-- HERO (centrado real) -->
  <section class="thermo-hero" style="--hero-img:url('../../Img/SeguimientoDeObras/PORTADA.jpg');">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center text-white">
      <h1 class="display-4 fw-bold hero-title m-0">Seguimientos de Obra</h1>
      <p class="hero-sub fw-semibold mt-3 mb-4">
        “Realizamos seguimientos de obra con drones y cámaras 360º para documentar el avance de cada fase,
        con imágenes aéreas o a pie de obra de todo tipo de proyectos con opción a timelapse”
      </p>
      <a href="<?= url('Views/Contacto/index.php') ?>" class="btn btn-success btn-lg rounded-pill px-4 fw-bold hero-cta">
        SOLICITA PRESUPUESTO
      </a>
    </div>
  </section>

  <!-- Entradilla -->
  <section class="bg-white">
    <div class="container py-4 py-md-5">
      <p class="lead-quote text-center">
        “Acompañamos a tu proyecto desde el primer movimiento de tierras hasta la entrega final. Realizamos vuelos periódicos que documentan cada fase de la obra y transformamos bajo petición ese material en un audiovisual completo o en un timelapse que resume meses de trabajo en minutos. Un atractivo que muestra tu proyecto de principio a fin”.
      </p>
    </div>
  </section>

  <!-- GALERÍA / CARRUSEL 4 FOTOS -->
  <section class="bg-white">
    <div class="container">
      <div id="galeriaObra" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="galeria-frame">
              <img src="../../Img/SeguimientoDeObras/Hospital/7.jpg" class="galeria-img" alt="Seguimiento de obra 1">
            </div>
          </div>

          <div class="carousel-item">
            <div class="galeria-frame">
              <img src="../../Img/SeguimientoDeObras/Hospital/DJI_0037.jpg" class="galeria-img" alt="Seguimiento de obra 2">
            </div>
          </div>

          <div class="carousel-item">
            <div class="galeria-frame">
              <img src="../../Img/SeguimientoDeObras/Hospital/DJI_0078.jpg" class="galeria-img" alt="Seguimiento de obra 3">
            </div>
          </div>

          <div class="carousel-item">
            <div class="galeria-frame">
              <img src="../../Img/SeguimientoDeObras/Hospital/DJI_0776.jpg" class="galeria-img" alt="Seguimiento de obra 4">
            </div>
          </div>

        </div>

        <!-- Indicadores -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#galeriaObra" data-bs-slide-to="0" class="active" aria-label="1"></button>
          <button type="button" data-bs-target="#galeriaObra" data-bs-slide-to="1" aria-label="2"></button>
          <button type="button" data-bs-target="#galeriaObra" data-bs-slide-to="2" aria-label="3"></button>
          <button type="button" data-bs-target="#galeriaObra" data-bs-slide-to="3" aria-label="4"></button>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#galeriaObra" data-bs-slide="prev" aria-label="Anterior">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#galeriaObra" data-bs-slide="next" aria-label="Siguiente">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>

      <p class="text-center small text-muted mt-2 mb-0">Trabajo destacado: Hospital de Alcañiz</p>
    </div>
  </section>

  <!-- Por qué -->
  <section class="bg-success text-white text-center mt-4">
    <div class="container py-2 py-md-3">
      <h2 class="fw-bold m-0">¿Por qué hacer un seguimiento de obra?</h2>
    </div>
  </section>

  <section class="bg-white">
    <div class="container py-4 py-md-5">
      <ul class="list-unstyled m-0">
        <li class="mb-3"><span class="fw-bold text-primary">Documentación visual clara →</span> Imágenes periódicas que muestran el avance real de la construcción, fase por fase.</li>
        <li class="mb-3"><span class="fw-bold text-primary">Transparencia y control →</span> Comunicación sencilla con promotores, dirección de obra e instituciones con pruebas visuales objetivas.</li>
        <li class="mb-3"><span class="fw-bold text-primary">Comunicación eficaz →</span> Material atractivo para informes técnicos y presentaciones a clientes e inversores.</li>
        <li class="mb-3"><span class="fw-bold text-primary">Difusión y marketing →</span> Timelapse y vídeos de gran impacto para redes sociales, webs corporativas o medios.</li>
        <li class="mb-0"><span class="fw-bold text-primary">Evidencia del trabajo bien hecho →</span> Registro visual que refuerza la profesionalidad y seriedad de la empresa constructora.</li>
      </ul>
    </div>
  </section>

  <!-- A quién va dirigido -->
  <section class="bg-success text-white text-center">
    <div class="container py-2 py-md-3">
      <h2 class="fw-bold m-0">¿A quién va dirigido?</h2>
    </div>
  </section>

  <!-- Slider móvil -->
  <section class="bg-white d-lg-none">
    <div class="container py-4">
      <div id="audienciasCarousel" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner text-center">

          <div class="carousel-item active">
            <div class="aud-card">
              <div class="aud-icon-wrap">
                <img src="../../Img/SeguimientoDeObras/iconos/14.png" alt="Constructoras y promotores" class="aud-icon">
              </div>
              <div class="aud-title">Constructoras y promotores</div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="aud-card">
              <div class="aud-icon-wrap">
                <img src="../../Img/SeguimientoDeObras/iconos/15.png" alt="Ayuntamientos" class="aud-icon">
              </div>
              <div class="aud-title">Ayuntamientos</div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="aud-card">
              <div class="aud-icon-wrap">
                <img src="../../Img/SeguimientoDeObras/iconos/16.png" alt="Empresas privadas" class="aud-icon">
              </div>
              <div class="aud-title">Empresas Privadas</div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="aud-card">
              <div class="aud-icon-wrap">
                <img src="../../Img/SeguimientoDeObras/iconos/17.png" alt="Particulares" class="aud-icon">
              </div>
              <div class="aud-title">Particulares</div>
            </div>
          </div>

        </div>

        <!-- Indicadores -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#audienciasCarousel" data-bs-slide-to="0" class="active" aria-label="1"></button>
          <button type="button" data-bs-target="#audienciasCarousel" data-bs-slide-to="1" aria-label="2"></button>
          <button type="button" data-bs-target="#audienciasCarousel" data-bs-slide-to="2" aria-label="3"></button>
          <button type="button" data-bs-target="#audienciasCarousel" data-bs-slide-to="3" aria-label="4"></button>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#audienciasCarousel" data-bs-slide="prev" aria-label="Anterior">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#audienciasCarousel" data-bs-slide="next" aria-label="Siguiente">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- Grid escritorio -->
  <section class="bg-white d-none d-lg-block">
    <div class="container py-4">
      <div class="row text-center g-4">

        <div class="col-3">
          <div class="aud-icon-wrap">
            <img src="../../Img/SeguimientoDeObras/iconos/14.png" alt="Constructoras y promotores" class="aud-icon">
          </div>
          <div class="aud-title">Constructoras y promotores</div>
        </div>

        <div class="col-3">
          <div class="aud-icon-wrap">
            <img src="../../Img/SeguimientoDeObras/iconos/15.png" alt="Ayuntamientos" class="aud-icon">
          </div>
          <div class="aud-title">Ayuntamientos</div>
        </div>

        <div class="col-3">
          <div class="aud-icon-wrap">
            <img src="../../Img/SeguimientoDeObras/iconos/16.png" alt="Empresas privadas" class="aud-icon">
          </div>
          <div class="aud-title">Empresas Privadas</div>
        </div>

        <div class="col-3">
          <div class="aud-icon-wrap">
            <img src="../../Img/SeguimientoDeObras/iconos/17.png" alt="Particulares" class="aud-icon">
          </div>
          <div class="aud-title">Particulares</div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>
