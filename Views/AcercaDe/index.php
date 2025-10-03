<?php
  // Views/AcercaDe/index.php
  $page_title = 'Visual Technologies — Acerca De';
  $nav_active = 'acercade';
  $page_css = [
    'Views/Css/styleAcercaDe.css' // usa tu CSS real
  ];
  require_once __DIR__ . '/../../partials/head.php';
  require_once __DIR__ . '/../../partials/header.php';
?>

<main>

  <!-- HERO -->
  <section class="thermo-hero" style="--hero-img:url('<?= asset_url('Img/AcercaDe/Portada.jpg') ?>');">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center text-white">
      <h1 class="display-4 fw-bold hero-title m-0">Acerca De</h1>
      <p class="hero-sub fw-semibold mt-3 mb-4">
        “Somos especialistas en servicios con drones que combinan innovación tecnológica y experiencia profesional.
        Nuestro objetivo: aportar datos fiables y soluciones visuales que impulsen tus proyectos”
      </p>
      <a href="<?= url('Views/Contacto/index.php') ?>" class="btn btn-success btn-lg rounded-pill px-4 fw-bold hero-cta">
        CONTACTA CON NOSOTROS
      </a>
    </div>
  </section>

  <!-- FEATURES (móvil: carrusel | desktop: grid) -->
  <!-- Versión MÓVIL: carrusel de logos -->
  <section class="bg-white d-lg-none">
    <div class="container py-4">
      <div id="aboutFeaturesCarousel" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner text-center">

          <div class="carousel-item active">
            <div class="feat-card">
              <div class="feat-icon-wrap">
                <img src="<?= asset_url('Img/INICIO/Logotipos servicios/TecnologiaPuntera.png') ?>" class="feat-icon" alt="Tecnología Puntera">
              </div>
              <div class="feat-title text-primary">Tecnología Puntera</div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="feat-card">
              <div class="feat-icon-wrap">
                <img src="<?= asset_url('Img/INICIO/Logotipos servicios/DatosPrecisos.png') ?>" class="feat-icon" alt="Datos Precisos">
              </div>
              <div class="feat-title text-primary">Datos Precisos</div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="feat-card">
              <div class="feat-icon-wrap">
                <img src="<?= asset_url('Img/INICIO/Logotipos servicios/ExperienciaYCompromiso.png') ?>" class="feat-icon" alt="Experiencia y Compromiso">
              </div>
              <div class="feat-title text-primary">Experiencia y Compromiso</div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="feat-card">
              <div class="feat-icon-wrap">
                <img src="<?= asset_url('Img/INICIO/Logotipos servicios/VisorPropio.png') ?>" class="feat-icon" alt="Visor Propio">
              </div>
              <div class="feat-title text-primary">Visor Propio</div>
            </div>
          </div>

        </div>

        <!-- Indicadores -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#aboutFeaturesCarousel" data-bs-slide-to="0" class="active" aria-label="1"></button>
          <button type="button" data-bs-target="#aboutFeaturesCarousel" data-bs-slide-to="1" aria-label="2"></button>
          <button type="button" data-bs-target="#aboutFeaturesCarousel" data-bs-slide-to="2" aria-label="3"></button>
          <button type="button" data-bs-target="#aboutFeaturesCarousel" data-bs-slide-to="3" aria-label="4"></button>
        </div>

        <!-- Flechas -->
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutFeaturesCarousel" data-bs-slide="prev" aria-label="Anterior">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutFeaturesCarousel" data-bs-slide="next" aria-label="Siguiente">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- Versión ESCRITORIO: grid 4 -->
  <section class="bg-white d-none d-lg-block">
    <div class="container py-4">
      <div class="row text-center g-4">
        <div class="col-3">
          <div class="feat-icon-wrap">
            <img src="<?= asset_url('Img/INICIO/Logotipos servicios/TecnologiaPuntera.png') ?>" class="feat-icon" alt="Tecnología Puntera">
          </div>
          <div class="feat-title text-primary">Tecnología Puntera</div>
        </div>
        <div class="col-3">
          <div class="feat-icon-wrap">
            <img src="<?= asset_url('Img/INICIO/Logotipos servicios/DatosPrecisos.png') ?>" class="feat-icon" alt="Datos Precisos">
          </div>
          <div class="feat-title text-primary">Datos Precisos</div>
        </div>
        <div class="col-3">
          <div class="feat-icon-wrap">
            <img src="<?= asset_url('Img/INICIO/Logotipos servicios/ExperienciaYCompromiso.png') ?>" class="feat-icon" alt="Experiencia y Compromiso">
          </div>
          <div class="feat-title text-primary">Experiencia y Compromiso</div>
        </div>
        <div class="col-3">
          <div class="feat-icon-wrap">
            <img src="<?= asset_url('Img/INICIO/Logotipos servicios/VisorPropio.png') ?>" class="feat-icon" alt="Visor Propio">
          </div>
          <div class="feat-title text-primary">Visor Propio</div>
        </div>
      </div>
    </div>
  </section>

  <!-- QUIÉNES SOMOS -->
  <section class="bg-success text-white">
    <div class="container py-2 py-md-3">
      <h2 class="fw-bold m-0">Quiénes Somos</h2>
    </div>
  </section>

  <section class="bg-white">
    <div class="container py-4 py-md-5">
      <div class="qs-text">
        <p>En Visual Technologies RPAS, sabemos que cada proyecto es único y requiere una atención especial. Por eso, adaptamos nuestros servicios a tus necesidades y ofrecemos soluciones 100% personalizables, siempre con el compromiso de estar cerca de ti y de tu proyecto.</p>
        <p>A lo largo de nuestra trayectoria hemos trabajado para ayuntamientos, empresas privadas y particulares, documentando patrimonio, controlando obras e instalaciones, y creando material audiovisual de alto impacto.</p>
        <p>Nuestros servicios abarcan desde inspecciones técnicas y seguimientos de obra, hasta cartografía 3D, censos, recorridos 360º y producción audiovisual, siempre con el objetivo de ayudarte a tomar decisiones con confianza.</p>
        <p class="fw-semibold">Visual Technologies RPAS: innovación, confianza y resultados pensados para ti.</p>
      </div>
    </div>
  </section>

  <!-- NUESTRO EQUIPO -->
  <section class="bg-success text-white">
    <div class="container py-2 py-md-3">
      <h2 class="fw-bold m-0">Nuestro Equipo</h2>
    </div>
  </section>

  <!-- MÓVIL: carrusel -->
  <section class="bg-white d-lg-none">
    <div class="container py-4">
      <div id="equipoCarousel" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner text-center">

          <div class="carousel-item active">
            <div class="team-slide">
              <div class="team-card">
                <img src="<?= asset_url('Img/FotosPerfil/Chico1Prueba.jpg') ?>" class="team-photo" alt="Carlos Piazuelo">
              </div>
              <div class="team-name text-primary">Carlos Piazuelo</div>
              <div class="team-role text-muted">Gerente, piloto y termógrafo por el IT</div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="team-slide">
              <div class="team-card">
                <img src="<?= asset_url('Img/FotosPerfil/Chica1Prueba.jpg') ?>" class="team-photo" alt="María Balletbó">
              </div>
              <div class="team-name text-primary">María Balletbó</div>
              <div class="team-role text-muted">Gerente, Marketing y Ventas</div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="team-slide">
              <div class="team-card">
                <img src="<?= asset_url('Img/FotosPerfil/Chico2Prueba.jpeg') ?>" class="team-photo" alt="Eduardo Lizana">
              </div>
              <div class="team-name text-primary">Eduardo Lizana</div>
              <div class="team-role text-muted">Informático</div>
            </div>
          </div>

        </div>

        <!-- Indicadores -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#equipoCarousel" data-bs-slide-to="0" class="active" aria-label="1"></button>
          <button type="button" data-bs-target="#equipoCarousel" data-bs-slide-to="1" aria-label="2"></button>
          <button type="button" data-bs-target="#equipoCarousel" data-bs-slide-to="2" aria-label="3"></button>
        </div>

        <!-- Flechas -->
        <button class="carousel-control-prev" type="button" data-bs-target="#equipoCarousel" data-bs-slide="prev" aria-label="Anterior">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#equipoCarousel" data-bs-slide="next" aria-label="Siguiente">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- ESCRITORIO: grid 3 -->
  <section class="bg-white d-none d-lg-block">
    <div class="container py-4 py-md-5">
      <div class="row g-4 justify-content-center text-center">

        <div class="col-lg-4">
          <div class="team-card">
            <img src="<?= asset_url('Img/FotosPerfil/Chico1Prueba.jpg') ?>" class="team-photo" alt="Carlos Piazuelo">
          </div>
          <div class="team-name text-primary">Carlos Piazuelo</div>
          <div class="team-role text-muted">Gerente, piloto y termógrafo por el IT</div>
        </div>

        <div class="col-lg-4">
          <div class="team-card">
            <img src="<?= asset_url('Img/FotosPerfil/Chica1Prueba.jpg') ?>" class="team-photo" alt="María Balletbó">
          </div>
          <div class="team-name text-primary">María Balletbó</div>
          <div class="team-role text-muted">Gerente, Marketing y Ventas</div>
        </div>

        <div class="col-lg-4">
          <div class="team-card">
            <img src="<?= asset_url('Img/FotosPerfil/Chico2Prueba.jpeg') ?>" class="team-photo" alt="Eduardo Lizana">
          </div>
          <div class="team-name text-primary">Eduardo Lizana</div>
          <div class="team-role text-muted">Informático</div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>
