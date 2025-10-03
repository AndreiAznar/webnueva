<?php
// Views/Inicio/index.php
define('BASE_PATH', __DIR__); // carpeta donde está index.php: /var/www/html
require_once BASE_PATH . '/config/app.php';

$page_title = 'Visual Technologies — Inicio';
$nav_active = 'inicio';
$page_css   = ['Views/Css/styleInicio.css'];      // tu CSS específico de la vista
?>
<?php require_once __DIR__ . '/../../partials/head.php'; ?>
<?php require_once __DIR__ . '/../../partials/header.php'; ?>

<main>

  <!-- HERO -->
  <section class="position-relative">
    <div class="ratio ratio-21x9 d-none d-lg-block">
      <img src="../../Img/INICIO/Imágenes INICIO/Portada Inicio.jpg" class="w-100 h-100 object-fit-cover" alt="Imagen principal">
    </div>
    <div class="ratio ratio-16x9 d-lg-none">
      <img src="../../Img/INICIO/Imágenes INICIO/Portada Inicio.jpg" class="w-100 h-100 object-fit-cover" alt="Imagen principal">
    </div>

    <div class="position-absolute top-50 start-0 translate-middle-y w-100">
      <div class="container-fluid ps-3 ps-lg-5">
        <div class="col-12 col-lg-9 text-white">
          <h1 class="fw-bold lh-1 mb-2 hero-title">Visual Technologies</h1>
          <p class="fw-bold mb-3 mb-lg-4 d-inline-block text-white px-3 px-lg-4 py-2 rounded-4 bg-black bg-opacity-50 shadow hero-sub">
            <span class="d-inline d-lg-none">Soluciones con drones para tus proyectos</span>
            <span class="d-none d-lg-inline">Soluciones con drones para todo tipo de necesidades o proyectos</span>
          </p>
          <div>
            <a href="<?= url('Views/Contacto/index.php') ?>" class="btn btn-success btn-lg rounded-pill fw-bold hero-cta">
              CONTACTA CON NOSOTROS
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- LOGOS -->
  <section class="border-top">
    <!-- MÓVIL/TABLET: 2 logos por slide -->
    <div id="logosCarouselMobile" class="carousel carousel-dark slide d-lg-none" data-bs-ride="false">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="container py-3">
            <div class="row row-cols-2 g-3 text-center align-items-center">
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/CobraEnergia.png" alt="Cobra Energía" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/GudarJavalambre.png" alt="Gúdar Javalambre" class="logo-img"></div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container py-3">
            <div class="row row-cols-2 g-3 text-center align-items-center">
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/JorgeEnergy.png" alt="Jorge Energy" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/Elecnor.png" alt="Elecnor" class="logo-img"></div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container py-3">
            <div class="row row-cols-2 g-3 text-center align-items-center">
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/ComarcaAndorra.png" alt="Comarca Andorra" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/OxaQuim.png" alt="Oxa Quim" class="logo-img"></div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container py-3">
            <div class="row row-cols-2 g-3 text-center align-items-center">
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/AlcañizDeTiendas.png" alt="Alcañiz de Tiendas" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/galp.png" alt="Galp" class="logo-img"></div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container py-3">
            <div class="row row-cols-2 g-3 text-center align-items-center">
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/Forestalia.jpg" alt="Forestalia" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/Repsol.jpg" alt="Repsol" class="logo-img"></div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container py-3">
            <div class="row row-cols-2 g-3 text-center align-items-center">
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/Mabove.jpg" alt="Mabove" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/BDB.jpg" alt="DBD" class="logo-img"></div>
            </div>
          </div>
        </div>

      </div>

      <!-- Indicadores -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#logosCarouselMobile" data-bs-slide-to="0" class="active" aria-label="1"></button>
        <button type="button" data-bs-target="#logosCarouselMobile" data-bs-slide-to="1" aria-label="2"></button>
        <button type="button" data-bs-target="#logosCarouselMobile" data-bs-slide-to="2" aria-label="3"></button>
        <button type="button" data-bs-target="#logosCarouselMobile" data-bs-slide-to="3" aria-label="4"></button>
        <button type="button" data-bs-target="#logosCarouselMobile" data-bs-slide-to="4" aria-label="5"></button>
        <button type="button" data-bs-target="#logosCarouselMobile" data-bs-slide-to="5" aria-label="6"></button>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#logosCarouselMobile" data-bs-slide="prev" aria-label="Anterior">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#logosCarouselMobile" data-bs-slide="next" aria-label="Siguiente">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>

    <!-- ESCRITORIO: 4 logos por slide -->
    <div id="logosCarouselDesktop" class="carousel carousel-dark slide d-none d-lg-block" data-bs-ride="false">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="container py-3">
            <div class="row row-cols-2 row-cols-md-4 g-3 text-center">
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/CobraEnergia.png" alt="Cobra Energía" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/GudarJavalambre.png" alt="Gúdar Javalambre" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/JorgeEnergy.png" alt="Jorge Energy" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/Elecnor.png" alt="Elecnor" class="logo-img"></div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container py-3">
            <div class="row row-cols-2 row-cols-md-4 g-3 text-center">
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/ComarcaAndorra.png" alt="Comarca Andorra" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/OxaQuim.png" alt="Oxa Quim" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/AlcañizDeTiendas.png" alt="Alcañiz de Tiendas" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/galp.png" alt="Galp" class="logo-img"></div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container py-3">
            <div class="row row-cols-2 row-cols-md-4 g-3 text-center">
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/Forestalia.jpg" alt="Forestalia" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/Repsol.jpg" alt="Repsol" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/Mabove.jpg" alt="Mabove" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/BDB.jpg" alt="DBD" class="logo-img"></div>
            </div>
          </div>
        </div>

      </div>

      <!-- Indicadores -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#logosCarouselDesktop" data-bs-slide-to="0" class="active" aria-label="1"></button>
        <button type="button" data-bs-target="#logosCarouselDesktop" data-bs-slide-to="1" aria-label="2"></button>
        <button type="button" data-bs-target="#logosCarouselDesktop" data-bs-slide-to="2" aria-label="3"></button>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#logosCarouselDesktop" data-bs-slide="prev" aria-label="Anterior">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#logosCarouselDesktop" data-bs-slide="next" aria-label="Siguiente">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>
  </section>

  <!-- NUESTROS SERVICIOS -->
  <section class="bg-success text-white text-center">
    <div class="container py-3">
      <h2 class="fw-bold m-0">Nuestros Servicios</h2>
    </div>
  </section>

  <section>
    <div class="container py-4 py-md-5">

      <!-- Carrusel móvil/tablet -->
      <div id="serviciosCarousel" class="carousel slide d-lg-none" data-bs-ride="false">
        <div class="carousel-inner">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <article class="svc-card">
              <h3 class="svc-title fw-bold text-uppercase">Termografías</h3>
              <div class="ratio ratio-16x9 svc-img-wrap mb-2">
                <img src="../../Img/INICIO/Imágenes INICIO/Termografías.png" alt="Termografías" class="svc-img">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-outline-success svc-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#svcText1" aria-expanded="false" aria-controls="svcText1">Ver</button>
                <div id="svcText1" class="collapse">
                  <p class="svc-text mb-2">Seguimiento e inspección de líneas eléctricas y parques fotovoltaicos mediante el uso de drones con cámara térmica.</p>
                  <a href="<?= url('Views/Termografias/index.php') ?>" class="btn btn-success btn-sm rounded-pill">Saber más</a>
                </div>
              </div>
            </article>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <article class="svc-card">
              <h3 class="svc-title fw-bold text-uppercase">Censos cinegéticos</h3>
              <div class="ratio ratio-16x9 svc-img-wrap mb-2">
                <img src="../../Img/INICIO/Imágenes INICIO/Censos Cinegéticos.jpg" alt="Censos cinegéticos" class="svc-img">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-outline-success svc-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#svcText2" aria-expanded="false" aria-controls="svcText2">Ver</button>
                <div id="svcText2" class="collapse">
                  <p class="svc-text mb-2">Conteo e identificación de la fauna para realizar censos, monterías o analizar la finca al detalle con nuestro visor web AppInspector.</p>
                  <a href="<?= url('Views/CensoCinegetico/index.php') ?>" class="btn btn-success btn-sm rounded-pill">Saber más</a>
                </div>
              </div>
            </article>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <article class="svc-card">
              <h3 class="svc-title fw-bold text-uppercase">Recorridos 360º</h3>
              <div class="ratio ratio-16x9 svc-img-wrap mb-2">
                <img src="../../Img/INICIO/Imágenes INICIO/Recorridos 360º.jpg" alt="Recorridos 360º" class="svc-img">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-outline-success svc-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#svcText3" aria-expanded="false" aria-controls="svcText3">Ver</button>
                <div id="svcText3" class="collapse">
                  <p class="svc-text mb-2">Recorridos virtuales en 360° que permiten explorar cada rincón de tus instalaciones, proyectos o espacios como si estuvieras allí.</p>
                  <a href="<?= url('Views/Recorridos360/index.php') ?>" class="btn btn-success btn-sm rounded-pill">Saber más</a>
                </div>
              </div>
            </article>
          </div>

          <!-- Slide 4 -->
          <div class="carousel-item">
            <article class="svc-card">
              <h3 class="svc-title fw-bold text-uppercase">Seguimientos de obra</h3>
              <div class="ratio ratio-16x9 svc-img-wrap mb-2">
                <img src="../../Img/INICIO/Imágenes INICIO/Seguimientos de obra.jpg" alt="Seguimientos de obra" class="svc-img">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-outline-success svc-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#svcText4" aria-expanded="false" aria-controls="svcText4">Ver</button>
                <div id="svcText4" class="collapse">
                  <p class="svc-text mb-2">Controla cada fase de tu proyecto con la máxima precisión y opción de Time-Lapse con drones de alta definición.</p>
                  <a href="<?= url('Views/SeguimientosDeObra/index.php') ?>" class="btn btn-success btn-sm rounded-pill">Saber más</a>
                </div>
              </div>
            </article>
          </div>

        </div>

        <!-- Indicadores -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#serviciosCarousel" data-bs-slide-to="0" class="active" aria-label="1"></button>
          <button type="button" data-bs-target="#serviciosCarousel" data-bs-slide-to="1" aria-label="2"></button>
          <button type="button" data-bs-target="#serviciosCarousel" data-bs-slide-to="2" aria-label="3"></button>
          <button type="button" data-bs-target="#serviciosCarousel" data-bs-slide-to="3" aria-label="4"></button>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#serviciosCarousel" data-bs-slide="prev" aria-label="Anterior">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#serviciosCarousel" data-bs-slide="next" aria-label="Siguiente">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>

      <!-- Grid escritorio (≥lg) -->
      <div class="d-none d-lg-block">
        <div class="row g-4">
          <div class="col-12 col-md-6">
            <div class="border border-2 border-success rounded-2 bg-light p-3 h-100 svc-hover">
              <div class="row g-3 align-items-center">
                <div class="col-5 col-sm-4 col-md-4">
                  <img src="../../Img/INICIO/Imágenes INICIO/Termografías.png" alt="Termografías" class="img-fluid rounded">
                </div>
                <div class="col-7 col-sm-8 col-md-8 d-flex flex-column">
                  <h3 class="h5 fw-bold text-uppercase mb-2">Termografías</h3>
                  <p class="small mb-0">Seguimiento e inspección de líneas eléctricas y parques fotovoltaicos mediante el uso de drones con cámara térmica</p>
                </div>
              </div>
              <a href="<?= url('Views/Termografias/index.php') ?>" class="stretched-link" aria-label="Saber más sobre Termografías"></a>
              <span class="svc-cta-hint">Ver más →</span>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <div class="border border-2 border-success rounded-2 bg-light p-3 h-100 svc-hover">
              <div class="row g-3 align-items-center">
                <div class="col-5 col-sm-4 col-md-4">
                  <img src="../../Img/INICIO/Imágenes INICIO/Censos Cinegéticos.jpg" alt="Censos cinegéticos" class="img-fluid rounded">
                </div>
                <div class="col-7 col-sm-8 col-md-8 d-flex flex-column">
                  <h3 class="h5 fw-bold text-uppercase mb-2">Censos cinegéticos</h3>
                  <p class="small mb-0">Conteo e identificación de la fauna para realizar censos, monterías o analizar la finca al detalle con nuestro visor web AppInspector</p>
                </div>
              </div>
              <a href="<?= url('Views/CensoCinegetico/index.php') ?>" class="stretched-link" aria-label="Saber más sobre Censos cinegéticos"></a>
              <span class="svc-cta-hint">Ver más →</span>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <div class="border border-2 border-success rounded-2 bg-light p-3 h-100 svc-hover">
              <div class="row g-3 align-items-center">
                <div class="col-5 col-sm-4 col-md-4">
                  <img src="../../Img/INICIO/Imágenes INICIO/Recorridos 360º.jpg" alt="Recorridos 360º" class="img-fluid rounded">
                </div>
                <div class="col-7 col-sm-8 col-md-8 d-flex flex-column">
                  <h3 class="h5 fw-bold text-uppercase mb-2">Recorridos 360º</h3>
                  <p class="small mb-0">Recorridos virtuales en 360° que permiten explorar cada rincón de tus instalaciones, proyectos o espacios como si estuvieras allí</p>
                </div>
              </div>
              <a href="<?= url('Views/Recorridos360/index.php') ?>" class="stretched-link" aria-label="Saber más sobre Recorridos 360º"></a>
              <span class="svc-cta-hint">Ver más →</span>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <div class="border border-2 border-success rounded-2 bg-light p-3 h-100 svc-hover">
              <div class="row g-3 align-items-center">
                <div class="col-5 col-sm-4 col-md-4">
                  <img src="../../Img/INICIO/Imágenes INICIO/Seguimientos de obra.jpg" alt="Seguimientos de obra" class="img-fluid rounded">
                </div>
                <div class="col-7 col-sm-8 col-md-8 d-flex flex-column">
                  <h3 class="h5 fw-bold text-uppercase mb-2">Seguimientos de obra</h3>
                  <p class="small mb-0">Controla cada fase de tu proyecto con la máxima precisión y haz un seguimiento con opción a Time-Lapse con drones de alta definición</p>
                </div>
              </div>
              <a href="<?= url('Views/SeguimientosDeObra/index.php') ?>" class="stretched-link" aria-label="Saber más sobre Seguimientos de obra"></a>
              <span class="svc-cta-hint">Ver más →</span>
            </div>
          </div>
        </div><!-- /row -->
      </div>

    </div>
  </section>

  <!-- POR QUÉ ELEGIRNOS -->
  <section class="bg-success text-white text-center">
    <div class="container py-3">
      <h2 class="fw-bold m-0">Por qué elegirnos</h2>
    </div>
  </section>

  <section class="bg-white">
    <div class="container py-4 py-md-5">
      <div class="row text-center g-4">
        <div class="col-6 col-md-3">
          <div class="d-inline-flex align-items-center justify-content-center rounded-circle border p-2 mb-2">
            <img src="../../Img/INICIO/Logotipos servicios/TecnologiaPuntera.png" alt="Tecnología Puntera" class="rounded-circle" width="72" height="72">
          </div>
          <div class="fw-semibold text-primary">Tecnología Puntera</div>
        </div>
        <div class="col-6 col-md-3">
          <div class="d-inline-flex align-items-center justify-content-center rounded-circle border p-2 mb-2">
            <img src="../../Img/INICIO/Logotipos servicios/DatosPrecisos.png" alt="Datos Precisos" class="rounded-circle" width="72" height="72">
          </div>
          <div class="fw-semibold text-primary">Datos Precisos</div>
        </div>
        <div class="col-6 col-md-3">
          <div class="d-inline-flex align-items-center justify-content-center rounded-circle border p-2 mb-2">
            <img src="../../Img/INICIO/Logotipos servicios/ExperienciaYCompromiso.png" alt="Experiencia y Compromiso" class="rounded-circle" width="72" height="72">
          </div>
          <div class="fw-semibold text-primary">Experiencia y Compromiso</div>
        </div>
        <div class="col-6 col-md-3">
          <div class="d-inline-flex align-items-center justify-content-center rounded-circle border p-2 mb-2">
            <img src="../../Img/INICIO/Logotipos servicios/VisorPropio.png" alt="Visor Propio" class="rounded-circle" width="72" height="72">
          </div>
          <div class="fw-semibold text-primary">Visor Propio</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-hero" style="background-image:url('../../Img/INICIO/Imágenes INICIO/Recorridos 360º.jpg')">
    <div class="container py-3">
      <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-8 col-lg-6">
          <div class="cta-card p-3 p-md-4">
            <div class="row g-3 g-md-4 align-items-start">
              <div class="col-12">
                <p class="fw-bold fs-5 fs-lg-3 lh-sm mb-0 text-center text-lg-start">
                  ¿Quieres ver tu proyecto desde otra perspectiva?<br class="d-none d-lg-inline"> ¡Contacta con nosotros!
                </p>
              </div>
              <div class="col-12">
                <form>
                  <div class="mb-2">
                    <label class="form-label small mb-1">Nombre y Apellidos:</label>
                    <input type="text" class="form-control form-control-sm" required>
                  </div>
                  <div class="mb-2">
                    <label class="form-label small mb-1">Correo electrónico:</label>
                    <input type="email" class="form-control form-control-sm" required>
                  </div>
                  <div class="mb-2">
                    <label class="form-label small mb-1">Teléfono:</label>
                    <input type="tel" class="form-control form-control-sm">
                  </div>
                  <div class="mb-3">
                    <label class="form-label small mb-1">Mensaje:</label>
                    <textarea class="form-control" rows="4"></textarea>
                  </div>
                  <div class="text-center text-lg-end">
                    <button class="btn btn-success btn-lg px-4">ENVIAR</button>
                  </div>
                </form>
              </div>
            </div><!-- /row -->
          </div><!-- /cta-card -->
        </div>
      </div>
    </div>
  </section>

</main>

<!-- Script específico de esta vista (lo dejo aquí y lo ejecuto tras la carga para no depender del orden del bundle) -->
<script>
  window.addEventListener('load', function () {
    // Cambia texto del botón Ver/Ocultar en servicios (móvil/tablet)
    document.querySelectorAll('#serviciosCarousel .svc-toggle').forEach(function (btn) {
      const id = btn.getAttribute('data-bs-target');
      const target = document.querySelector(id);
      if (!target) return;
      target.addEventListener('shown.bs.collapse', () => { btn.textContent = 'Ocultar'; });
      target.addEventListener('hidden.bs.collapse', () => { btn.textContent = 'Ver'; });
    });
  });
</script>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>
