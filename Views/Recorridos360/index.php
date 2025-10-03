<?php
// Views/Recorridos360/index.php
require_once __DIR__ . '/../../config/app.php'; // helper url()

$page_title = 'Visual Technologies — Recorridos 360º';
$nav_active = 'servicios';
$page_css   = ['Views/Css/style360.css']; // tu CSS real de la vista
?>
<?php require_once __DIR__ . '/../../partials/head.php'; ?>
<?php require_once __DIR__ . '/../../partials/header.php'; ?>

<main>

  <!-- HERO panorámico -->
  <section class="thermo-hero" style="--hero-img:url('../../Img/360º/portada.jpg');">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center text-white">
      <h1 class="display-4 fw-bold hero-title m-0">Recorridos 360º</h1>
      <p class="hero-sub fw-semibold mt-3 mb-4">
        “Los recorridos virtuales en 360º permiten mostrar espacios de forma inmersiva e interactiva, accesibles
        desde cualquier dispositivo. Una solución ideal para inmobiliaria, turismo o patrimonio”
      </p>
      <a href="<?= url('Views/Contacto/index.php') ?>" class="btn btn-success btn-lg rounded-pill px-4 fw-bold hero-cta">
        SOLICITA PRESUPUESTO
      </a>
    </div>
  </section>

  <!-- Entradilla -->
  <section class="bg-white">
    <div class="container py-4 py-md-5">
      <p class="lead-quote mx-auto text-center">
        “Ofrecemos recorridos virtuales en 360º con captura aérea y terrestre de alta calidad, que permiten explorar
        cualquier espacio de manera inmersiva. Nuestros trabajos son accesibles desde ordenador, móvil o gafas de
        realidad virtual, sin necesidad de aplicaciones adicionales. Una herramienta innovadora para mostrar tus
        instalaciones o proyectos de manera única”.
      </p>
    </div>
  </section>

  <!-- LOGOS COLABORADORES -->
  <section class="border-top">
    <!-- MÓVIL/TABLET: 2 logos por slide -->
    <div id="logosCarouselMobile" class="carousel carousel-dark slide d-lg-none" data-bs-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container py-3">
            <div class="row row-cols-2 g-3 text-center align-items-center">
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/GudarJavalambre.png" alt="Gúdar Javalambre" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/ComarcaAndorra.png" alt="Comarca Andorra" class="logo-img"></div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container py-3">
            <div class="row row-cols-2 g-3 text-center align-items-center">
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/AlcañizDeTiendas.png" alt="Alcañiz de Tiendas" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/360º/Logos empresas que no están en el inicio/logo_alcaniz2.png" alt="Ayuntamiento de Alcañiz" class="logo-img"></div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container py-3">
            <div class="row row-cols-2 g-3 text-center align-items-center">
              <div class="col logo-item"><img src="../../Img/360º/Logos empresas que no están en el inicio/logo-aragonesa.png" alt="Comarca Bajo Aragón" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/360º/Logos empresas que no están en el inicio/logotipo-ayuntamiento-de-calanda.png" alt="Ayuntamiento de Calanda" class="logo-img"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Indicadores -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#logosCarouselMobile" data-bs-slide-to="0" class="active" aria-label="1"></button>
        <button type="button" data-bs-target="#logosCarouselMobile" data-bs-slide-to="1" aria-label="2"></button>
        <button type="button" data-bs-target="#logosCarouselMobile" data-bs-slide-to="2" aria-label="3"></button>
      </div>

      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#logosCarouselMobile" data-bs-slide="prev" aria-label="Anterior">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#logosCarouselMobile" data-bs-slide="next" aria-label="Siguiente">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>

    <!-- ESCRITORIO: 3 logos por slide -->
    <div id="logosCarouselDesktop" class="carousel carousel-dark slide d-none d-lg-block" data-bs-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container py-3">
            <div class="row row-cols-3 g-3 text-center">
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/GudarJavalambre.png" alt="Gúdar Javalambre" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/ComarcaAndorra.png" alt="Comarca Andorra" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/INICIO/Logotipos colaboradores/AlcañizDeTiendas.png" alt="Alcañiz de Tiendas" class="logo-img"></div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container py-3">
            <div class="row row-cols-3 g-3 text-center">
              <div class="col logo-item"><img src="../../Img/360º/Logos empresas que no están en el inicio/logo_alcaniz2.png" alt="Ayuntamiento de Alcañiz" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/360º/Logos empresas que no están en el inicio/logo-aragonesa.png" alt="Comarca Bajo Aragón" class="logo-img"></div>
              <div class="col logo-item"><img src="../../Img/360º/Logos empresas que no están en el inicio/logotipo-ayuntamiento-de-calanda.png" alt="Ayuntamiento de Calanda" class="logo-img"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Indicadores -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#logosCarouselDesktop" data-bs-slide-to="0" class="active" aria-label="1"></button>
        <button type="button" data-bs-target="#logosCarouselDesktop" data-bs-slide-to="1" aria-label="2"></button>
      </div>

      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#logosCarouselDesktop" data-bs-slide="prev" aria-label="Anterior">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#logosCarouselDesktop" data-bs-slide="next" aria-label="Siguiente">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>
  </section>

  <!-- Título sección trabajos -->
  <section class="bg-success text-white text-center">
    <div class="container py-2 py-md-3">
      <h2 class="fw-bold m-0">Algunos de nuestros trabajos destacados</h2>
    </div>
  </section>

  <!-- TRABAJOS: Carrusel móvil/tablet + grid escritorio -->
  <section class="bg-white">
    <div class="container py-4 py-md-5">

      <!-- Carrusel móvil/tablet -->
      <div id="trabajos360Carousel" class="carousel slide d-lg-none" data-bs-ride="false">
        <div class="carousel-inner">

          <!-- Comercios -->
          <div class="carousel-item active">
            <article class="svc-card">
              <h3 class="svc-title fw-bold text-uppercase">Comercios 360º</h3>
              <div class="ratio ratio-16x9 svc-img-wrap mb-2">
                <img src="../../Img/360º/negocios.png" alt="Comercios 360º" class="svc-img">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-outline-success svc-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#t360Comercios" aria-expanded="false" aria-controls="t360Comercios">Ver</button>
                <div id="t360Comercios" class="collapse">
                  <p class="svc-text mb-2">Recorrido virtual en 360º de diferentes comercios, que permite visitarlos de forma inmersiva y descubrir sus productos sin estar allí.</p>
                  <a href="#" class="btn btn-success btn-sm rounded-pill">VER PROYECTO</a>
                </div>
              </div>
            </article>
          </div>

          <!-- Prehistoria -->
          <div class="carousel-item">
            <article class="svc-card">
              <h3 class="svc-title fw-bold text-uppercase">Prehistoria 360º</h3>
              <div class="ratio ratio-16x9 svc-img-wrap mb-2">
                <img src="../../Img/360º/gafas.jpg" alt="Prehistoria 360º" class="svc-img">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-outline-success svc-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#t360Prehistoria" aria-expanded="false" aria-controls="t360Prehistoria">Ver</button>
                <div id="t360Prehistoria" class="collapse">
                  <p class="svc-text mb-2">Descubrir los entresijos del arte rupestre del término municipal de Alcañiz es ahora posible sin necesidad de salir de la ciudad con gafas VR.</p>
                  <a href="#" class="btn btn-success btn-sm rounded-pill">VER PROYECTO</a>
                </div>
              </div>
            </article>
          </div>

          <!-- Pueblos -->
          <div class="carousel-item">
            <article class="svc-card">
              <h3 class="svc-title fw-bold text-uppercase">Pueblos en 360º</h3>
              <div class="ratio ratio-16x9 svc-img-wrap mb-2">
                <img src="../../Img/360º/pueblos.jpg" alt="Pueblos en 360º" class="svc-img">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-outline-success svc-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#t360Pueblos" aria-expanded="false" aria-controls="t360Pueblos">Ver</button>
                <div id="t360Pueblos" class="collapse">
                  <p class="svc-text mb-2">Recorre una comarca desde su ordenador o móvil, como si pasearas por sus calles y edificios.</p>
                  <a href="#" class="btn btn-success btn-sm rounded-pill">VER PROYECTO</a>
                </div>
              </div>
            </article>
          </div>

          <!-- Casas Rurales -->
          <div class="carousel-item">
            <article class="svc-card">
              <h3 class="svc-title fw-bold text-uppercase">Casas Rurales 360º</h3>
              <div class="ratio ratio-16x9 svc-img-wrap mb-2">
                <img src="../../Img/360º/casas rurales.png" alt="Casas rurales 360º" class="svc-img">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-outline-success svc-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#t360Casas" aria-expanded="false" aria-controls="t360Casas">Ver</button>
                <div id="t360Casas" class="collapse">
                  <p class="svc-text mb-2">Gana confianza, atrae más reservas y destaca la autenticidad de la experiencia rural sin tener que moverse.</p>
                  <a href="#" class="btn btn-success btn-sm rounded-pill">VER PROYECTO</a>
                </div>
              </div>
            </article>
          </div>

        </div>

        <!-- Indicadores -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#trabajos360Carousel" data-bs-slide-to="0" class="active" aria-label="1"></button>
          <button type="button" data-bs-target="#trabajos360Carousel" data-bs-slide-to="1" aria-label="2"></button>
          <button type="button" data-bs-target="#trabajos360Carousel" data-bs-slide-to="2" aria-label="3"></button>
          <button type="button" data-bs-target="#trabajos360Carousel" data-bs-slide-to="3" aria-label="4"></button>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#trabajos360Carousel" data-bs-slide="prev" aria-label="Anterior">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#trabajos360Carousel" data-bs-slide="next" aria-label="Siguiente">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>
      <!-- /Carrusel móvil/tablet -->

      <!-- GRID ESCRITORIO -->
      <div class="d-none d-lg-block">
        <div class="row g-4">
          <!-- Comercios -->
          <div class="col-12 col-md-6">
            <div class="border border-2 border-success rounded-2 bg-light p-3 h-100">
              <div class="row g-3 align-items-center">
                <div class="col-5 col-sm-4 col-md-4">
                  <img src="../../Img/360º/negocios.png" alt="Comercios 360º" class="img-fluid rounded">
                </div>
                <div class="col-7 col-sm-8 col-md-8 d-flex flex-column">
                  <h3 class="h5 fw-bold text-uppercase mb-2">Comercios 360º</h3>
                  <p class="small mb-3">Recorrido virtual en 360º de diferentes comercios, que permite visitarlos de forma inmersiva y descubrir sus productos sin estar allí.</p>
                  <div class="mt-auto"><a href="#" class="btn btn-success btn-sm rounded-pill">VER PROYECTO</a></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Prehistoria -->
          <div class="col-12 col-md-6">
            <div class="border border-2 border-success rounded-2 bg-light p-3 h-100">
              <div class="row g-3 align-items-center">
                <div class="col-5 col-sm-4 col-md-4">
                  <img src="../../Img/360º/gafas.jpg" alt="Prehistoria 360º" class="img-fluid rounded">
                </div>
                <div class="col-7 col-sm-8 col-md-8 d-flex flex-column">
                  <h3 class="h5 fw-bold text-uppercase mb-2">Prehistoria 360º</h3>
                  <p class="small mb-3">Descubrir los entresijos del arte rupestre del término municipal de Alcañiz es posible sin salir de la ciudad con gafas VR.</p>
                  <div class="mt-auto"><a href="#" class="btn btn-success btn-sm rounded-pill">VER PROYECTO</a></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Pueblos -->
          <div class="col-12 col-md-6">
            <div class="border border-2 border-success rounded-2 bg-light p-3 h-100">
              <div class="row g-3 align-items-center">
                <div class="col-5 col-sm-4 col-md-4">
                  <img src="../../Img/360º/pueblos.jpg" alt="Pueblos en 360º" class="img-fluid rounded">
                </div>
                <div class="col-7 col-sm-8 col-md-8 d-flex flex-column">
                  <h3 class="h5 fw-bold text-uppercase mb-2">Pueblos en 360º</h3>
                  <p class="small mb-3">Gracias a esta experiencia inmersiva, cualquier persona puede recorrer una comarca desde su ordenador o móvil.</p>
                  <div class="mt-auto"><a href="#" class="btn btn-success btn-sm rounded-pill">VER PROYECTO</a></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Casas Rurales -->
          <div class="col-12 col-md-6">
            <div class="border border-2 border-success rounded-2 bg-light p-3 h-100">
              <div class="row g-3 align-items-center">
                <div class="col-5 col-sm-4 col-md-4">
                  <img src="../../Img/360º/casas rurales.png" alt="Casas rurales 360º" class="img-fluid rounded">
                </div>
                <div class="col-7 col-sm-8 col-md-8 d-flex flex-column">
                  <h3 class="h5 fw-bold text-uppercase mb-2">Casas Rurales 360º</h3>
                  <p class="small mb-3">Una herramienta ideal para generar confianza, atraer más reservas y destacar la autenticidad.</p>
                  <div class="mt-auto"><a href="#" class="btn btn-success btn-sm rounded-pill">VER PROYECTO</a></div>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /row -->
      </div>
      <!-- /grid escritorio -->

    </div>
  </section>

  <!-- CTA final -->
  <section class="cta-hero" style="background-image:url('../../Img/360º/pie\ de\ web.png')">
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

<!-- Script propio de esta vista -->
<script>
  // Cambia texto Ver/Ocultar en los toggles del carrusel de trabajos (móvil/tablet)
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('#trabajos360Carousel .svc-toggle').forEach(function (btn) {
      const targetSel = btn.getAttribute('data-bs-target');
      const target = document.querySelector(targetSel);
      if (!target) return;
      target.addEventListener('shown.bs.collapse', function(){ btn.textContent = 'Ocultar'; });
      target.addEventListener('hidden.bs.collapse', function(){ btn.textContent = 'Ver'; });
    });
  });
</script>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>
