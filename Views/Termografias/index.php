<?php
  // Views/Termografias/index.php
  $page_title = 'Visual Technologies — Termografías';
  $nav_active = 'servicios';
  $page_css = [
    'Views/Css/styleTermografias.css' // tu CSS existente para esta vista
  ];
  require_once __DIR__ . '/../../partials/head.php';
  require_once __DIR__ . '/../../partials/header.php';
?>

<main>

  <!-- HERO térmico -->
  <section class="thermo-hero" style="--hero-img:url('../../Img/TERMOGRAFIAS/planta\ PORTADA.JPG');">
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center text-center text-white">
      <h1 class="display-4 fw-bold hero-title m-0">Termografías</h1>
      <p class="hero-sub fw-semibold mt-3 mb-4">
        “Las termografías aéreas permiten detectar fugas de energía, fallos eléctricos o problemas invisibles al ojo humano.
        Un servicio rápido y preciso para mejorar la seguridad y reducir costes de mantenimiento.”
      </p>
      <a href="<?= url('Views/Contacto/index.php') ?>" class="btn btn-success btn-lg rounded-pill px-4 fw-bold">SOLICITA PRESUPUESTO</a>
    </div>
  </section>

  <!-- Cita/Entradilla -->
  <section class="bg-white">
    <div class="container py-4 py-md-5">
      <p class="lead-quote mx-auto text-center">
        "Realizamos inspecciones termográficas con drones de última generación, combinando imágenes térmicas y
        visuales para detectar puntos calientes, fugas de energía o fallos estructurales con total precisión.
        Nuestros informes, elaborados por termógrafos certificados por el ITC, garantizan resultados fiables y útiles
        para la toma de decisiones."
      </p>
    </div>
  </section>

  <!-- Título de sección -->
  <section class="bg-success text-white text-center">
    <div class="container py-2 py-md-3">
      <h2 class="fw-bold m-0">Nuestros Servicios</h2>
    </div>
  </section>

  <!-- Contenido Servicios -->
  <section class="bg-white">
    <div class="container py-4 py-md-5">

      <!-- Carrusel móvil/tablet -->
      <div id="serviciosTermoCarousel" class="carousel slide d-lg-none" data-bs-ride="false">
        <div class="carousel-inner">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <article class="svc-card">
              <h3 class="svc-title fw-bold text-uppercase">Termografías en Fotovoltaicas</h3>
              <div class="ratio ratio-16x9 svc-img-wrap mb-2">
                <img src="../../Img/TERMOGRAFIAS/Plantafv .png" alt="Termografías en fotovoltaicas" class="svc-img">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-outline-success svc-toggle" type="button"
                        data-bs-toggle="collapse" data-bs-target="#svcTextTFV"
                        aria-expanded="false" aria-controls="svcTextTFV">Ver</button>
                <div id="svcTextTFV" class="collapse">
                  <p class="svc-text mb-2">
                    Detección temprana de paneles defectuosos, conexiones dañadas y puntos calientes. Análisis térmico y visual para un diagnóstico completo.
                  </p>
                </div>
              </div>
            </article>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <article class="svc-card">
              <h3 class="svc-title fw-bold text-uppercase">Inspecciones en Líneas Eléctricas</h3>
              <div class="ratio ratio-16x9 svc-img-wrap mb-2">
                <img src="../../Img/TERMOGRAFIAS/LINEA.JPG" alt="Inspecciones en líneas eléctricas" class="svc-img">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-outline-success svc-toggle" type="button"
                        data-bs-toggle="collapse" data-bs-target="#svcTextLE"
                        aria-expanded="false" aria-controls="svcTextLE">Ver</button>
                <div id="svcTextLE" class="collapse">
                  <p class="svc-text mb-2">
                    Identificación de sobrecalentamientos, defectos en aisladores, falta de pasadores o placas y otras anomalías.
                  </p>
                </div>
              </div>
            </article>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <article class="svc-card">
              <h3 class="svc-title fw-bold text-uppercase">Termografías en Subestaciones</h3>
              <div class="ratio ratio-16x9 svc-img-wrap mb-2">
                <img src="../../Img/TERMOGRAFIAS/fallo set.jpg" alt="Termografías en subestaciones" class="svc-img">
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-outline-success svc-toggle" type="button"
                        data-bs-toggle="collapse" data-bs-target="#svcTextSUB"
                        aria-expanded="false" aria-controls="svcTextSUB">Ver</button>
                <div id="svcTextSUB" class="collapse">
                  <p class="svc-text mb-2">
                    Localización de puntos calientes y conexiones defectuosas para priorizar intervenciones y garantizar la fiabilidad.
                  </p>
                </div>
              </div>
            </article>
          </div>

        </div>

        <!-- Indicadores redondos ABAJO -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#serviciosTermoCarousel" data-bs-slide-to="0" class="active" aria-label="1"></button>
          <button type="button" data-bs-target="#serviciosTermoCarousel" data-bs-slide-to="1" aria-label="2"></button>
          <button type="button" data-bs-target="#serviciosTermoCarousel" data-bs-slide-to="2" aria-label="3"></button>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#serviciosTermoCarousel" data-bs-slide="prev" aria-label="Anterior">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#serviciosTermoCarousel" data-bs-slide="next" aria-label="Siguiente">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>
      <!-- /Carrusel móvil/tablet -->

      <!-- Bloques escritorio (≥lg) -->
      <div class="d-none d-lg-block">
        <!-- Fila 1 -->
        <div class="row align-items-center g-4 mb-4">
          <div class="col-md-6">
            <img src="../../Img/TERMOGRAFIAS/Plantafv .png" class="img-fluid rounded-2 shadow-sm w-100 object-fit-cover" alt="Termografía en placas fotovoltaicas">
          </div>
          <div class="col-md-6">
            <h3 class="h5 fw-bold text-uppercase mb-2">Termografías en Fotovoltaicas</h3>
            <p class="m-0">La termografía en instalaciones fotovoltaicas permite detectar de forma temprana paneles defectuosos,
              conexiones dañadas o puntos calientes. Con nuestras inspecciones aéreas combinamos análisis térmico y visual para
              obtener un diagnóstico completo del estado de la planta en forma de informe y de visor propio en nuestra AppInspector.</p>
          </div>
        </div>

        <!-- Fila 2 -->
        <div class="row align-items-center g-4 mb-4">
          <div class="col-md-6 order-md-1">
            <h3 class="h5 fw-bold text-uppercase mb-2">Inspecciones en Líneas Eléctricas</h3>
            <p class="m-0">Realizamos inspecciones térmicas y visuales en líneas eléctricas para detectar puntos calientes,
              sobrecargas y defectos en aisladores, falta de pasadores o placas y otras posibles anomalías. La combinación de
              imágenes térmicas y visuales ofrece un análisis completo del estado de la infraestructura.</p>
          </div>
          <div class="col-md-6 order-md-2">
            <img src="../../Img/TERMOGRAFIAS/LINEA.JPG" class="img-fluid rounded-2 shadow-sm w-100 object-fit-cover" alt="Termografía en líneas eléctricas">
          </div>
        </div>

        <!-- Fila 3 -->
        <div class="row align-items-center g-4">
          <div class="col-md-6">
            <img src="../../Img/TERMOGRAFIAS/fallo set.jpg" class="img-fluid rounded-2 shadow-sm w-100 object-fit-cover" alt="Termografía en subestaciones">
          </div>
          <div class="col-md-6">
            <h3 class="h5 fw-bold text-uppercase mb-2">Termografías en Subestaciones</h3>
            <p class="m-0">Realizamos inspecciones térmicas y visuales en subestaciones para detectar puntos calientes
              o conexiones defectuosas. La termografía permite localizar anomalías invisibles al ojo humano y priorizar
              intervenciones de mantenimiento, reduciendo costes y garantizando la fiabilidad de la red eléctrica.</p>
          </div>
        </div>
      </div>
      <!-- /Bloques escritorio -->

      <!-- CTA AppInspector -->
      <div class="text-center mt-5">
        <div class="fw-bold text-uppercase small mb-3">
          Consulta nuestro visor especializado pinchando en el logotipo
        </div>
        <a href="https://clientes.visualtechnologies.eu"
           class="d-inline-block inspector-link"
           target="_blank" rel="noopener"
           aria-label="Abrir AppInspector (sitio externo)">
          <img src="../../Img/TERMOGRAFIAS/Inspector.png" class="img-fluid inspector-logo" alt="Inspector – Drones to Maps">
        </a>
      </div>

    </div>
  </section>

</main>

<!-- JS específico de la vista -->
<script>
  // Cambia texto del botón Ver/Ocultar en servicios (móvil/tablet)
  document.querySelectorAll('#serviciosTermoCarousel .svc-toggle').forEach(btn=>{
    const targetSel = btn.getAttribute('data-bs-target');
    const target = document.querySelector(targetSel);
    if(!target) return;
    target.addEventListener('shown.bs.collapse', ()=>{ btn.textContent = 'Ocultar'; });
    target.addEventListener('hidden.bs.collapse', ()=>{ btn.textContent = 'Ver'; });
  });
</script>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>
