<?php
  // Views/CensoCinegetico/index.php
  $page_title = 'Visual Technologies — Censos Cinegéticos';
  $nav_active = 'servicios';
  $page_css = [
    'Views/Css/styleCensosCinegeticos.css'
  ];
  require_once __DIR__ . '/../../partials/head.php';
  require_once __DIR__ . '/../../partials/header.php';
?>

<main>
  <!-- HERO -->
  <section class="thermo-hero" style="--hero-img:url('<?= asset_url('Img/CensosCinegeticos/CiervoPortada-7945330.jpg') ?>');">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center text-white">
      <h1 class="display-4 fw-bold hero-title m-0">Censos Cinegéticos</h1>
      <p class="hero-sub fw-semibold mt-3 mb-4">
        “Visualiza los animales de tu finca en alta calidad, obtén un informe de fauna e infraestructuras en un visor
        digital fácil y accesible”
      </p>
      <a href="<?= url('Views/Contacto/index.php') ?>" class="btn btn-success btn-lg rounded-pill px-4 fw-bold hero-cta">
        SOLICITA PRESUPUESTO
      </a>
    </div>
  </section>

  <!-- Entradilla / cita -->
  <section class="bg-white">
    <div class="container py-3 py-md-4">
      <p class="lead-quote text-center">
        “Se realizan mediante drones equipados con cámara térmica, lo que permite detectar y contabilizar la fauna en fincas para realizar un censo integrado en un visor digital, donde se representa tanto el censo de animales como las infraestructuras de la finca (puntos de agua, comederos, vallado, caminos, etc.), facilitando así la gestión integral de fincas y monterías”.
      </p>
    </div>
  </section>

  <!-- Título de sección -->
  <section class="bg-success text-white text-center">
    <div class="container py-2 py-md-3">
      <h2 class="fw-bold m-0">Ofertas en censos</h2>
    </div>
  </section>

  <!-- PACKS -->
  <section class="bg-white">
    <div class="container py-4 py-md-5">
      <div class="row g-4">

        <!-- BRONCE -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="pack-card tier-bronze">
            <span class="tier-chip bronze"><i class="bi bi-trophy-fill me-1"></i>BRONCE</span>

            <div class="row g-3 align-items-center">
              <div class="col-auto">
                <div class="pack-thumb">
                  <img src="<?= asset_url('Img/CensosCinegeticos/mouflon.jpg') ?>" alt="Pack Censo Bronce">
                </div>
              </div>
              <div class="col">
                <div class="pack-eyebrow">PACK CENSO</div>
                <p class="pack-tagline m-0">Conteo de fauna básico</p>
              </div>
            </div>

            <button class="stretched-link pack-hit" data-bs-toggle="collapse" data-bs-target="#pck1" aria-expanded="false" aria-controls="pck1"></button>

            <div id="pck1" class="collapse pack-details">
              <p>Informe poblacional con cantidades y tipos de animales presentes integrado en un visor interactivo que permite consultar de forma rápida la fauna detectada; la opción ideal para iniciar la gestión de la finca y tomar decisiones básicas con datos claros.</p>
            </div>
          </div>
        </div>

        <!-- PLATA -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="pack-card tier-silver">
            <span class="tier-chip silver"><i class="bi bi-trophy-fill me-1"></i>PLATA</span>

            <div class="row g-3 align-items-center">
              <div class="col-auto">
                <div class="pack-thumb">
                  <img src="<?= asset_url('Img/CensosCinegeticos/carrasca.jpg') ?>" alt="Pack Finca Plata">
                </div>
              </div>
              <div class="col">
                <div class="pack-eyebrow">PACK FINCA</div>
                <p class="pack-tagline m-0">Censo + infraestructuras</p>
              </div>
            </div>

            <button class="stretched-link pack-hit" data-bs-toggle="collapse" data-bs-target="#pck2" aria-expanded="false" aria-controls="pck2"></button>

            <div id="pck2" class="collapse pack-details">
              <p>Incluye el conteo de fauna y añade la representación de infraestructuras clave de la finca —puntos de agua, comederos, puestos, torretas y puertas— con análisis de posibles roturas en el vallado; un nivel intermedio perfecto para planificar mejoras y optimizar recorridos.</p>
            </div>
          </div>
        </div>

        <!-- ORO -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="pack-card tier-gold">
            <span class="tier-chip gold"><i class="bi bi-trophy-fill me-1"></i>ORO</span>

            <div class="row g-3 align-items-center">
              <div class="col-auto">
                <div class="pack-thumb">
                  <img src="<?= asset_url('Img/CensosCinegeticos/trofeos.jpg') ?>" alt="Pack Caza Oro">
                </div>
              </div>
              <div class="col">
                <div class="pack-eyebrow">PACK CAZA</div>
                <p class="pack-tagline m-0">Gestión global de tu finca</p>
              </div>
            </div>

            <button class="stretched-link pack-hit" data-bs-toggle="collapse" data-bs-target="#pck3" aria-expanded="false" aria-controls="pck3"></button>

            <div id="pck3" class="collapse pack-details">
              <p>Reúne todo lo anterior y suma material audiovisual (vídeos y fotos diurnas) junto con la opción de 360º para explorar puestos y torretas; la solución más completa para gestionar, comunicar y potenciar la planificación de monterías o la promoción de la finca.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- COMPARATIVA + CIERVO -->
  <section class="bg-white">
    <div class="container py-2 py-md-4">
      <div class="comp-head">
        <h3 class="m-0">Comparador de packs</h3>
        <p class="m-0">Elige el plan que mejor encaja con tu finca. Todos incluyen informe de censo y visor interactivo.</p>
      </div>
    </div>

    <!-- MÓVIL / TABLET: IG + tabla compacta -->
    <div class="container d-lg-none pb-3">
      <!-- Instagram móvil (simple, verde) -->
      <div class="ig-mobile text-center mb-3">
        <a class="ig-logo-link" href="https://www.instagram.com/inspectorcaza/" target="_blank" rel="noopener" aria-label="Abrir Instagram @inspectorCaza">
          <i class="bi bi-instagram"></i>
        </a>
        <div class="ig-mobile-caption mt-2">
          Síguenos en
          <a class="deer-ig" href="https://www.instagram.com/inspectorcaza/" target="_blank" rel="noopener">@inspectorCaza</a>
        </div>
      </div>

      <!-- Tabla móvil -->
      <div class="comp-table-mobile-wrap">
        <table class="comp-table comp-table-mobile">
          <thead>
            <tr>
              <th class="comp-th-first">
                <div class="th-stack"><span class="th-pack">Características</span></div>
              </th>
              <th>
                <div class="th-stack">
                  <span class="th-pack">Pack Censo</span>
                  <span class="th-tier text-bronze fw-bold">BRONCE</span>
                </div>
              </th>
              <th>
                <div class="th-stack">
                  <span class="th-pack">Pack Finca</span>
                  <span class="th-tier text-silver fw-bold">PLATA</span>
                </div>
              </th>
              <th>
                <div class="th-stack">
                  <span class="th-pack">Pack Caza</span>
                  <span class="th-tier text-gold fw-bold">ORO</span>
                </div>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="comp-sticky">Informe de censo poblacional detallado</td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
            </tr>
            <tr class="alt">
              <td class="comp-sticky">Visor interactivo de animales</td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
            </tr>
            <tr>
              <td class="comp-sticky">Número de especies, sexo y trofeo</td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
            </tr>
            <tr>
              <td class="comp-sticky">Visualización de infraestructuras</td>
              <td class="no"><i class="bi bi-x-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
            </tr>
            <tr class="alt">
              <td class="comp-sticky">Análisis de roturas en vallado</td>
              <td class="no"><i class="bi bi-x-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
            </tr>
            <tr>
              <td class="comp-sticky">Vista detallada de la finca</td>
              <td class="no"><i class="bi bi-x-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
            </tr>
            <tr class="alt">
              <td class="comp-sticky">Vídeos y fotos para promoción</td>
              <td class="no"><i class="bi bi-x-lg"></i></td>
              <td class="no"><i class="bi bi-x-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
            </tr>
            <tr>
              <td class="comp-sticky">Puestos y torretas en 360º</td>
              <td class="no"><i class="bi bi-x-lg"></i></td>
              <td class="no"><i class="bi bi-x-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
            </tr>
            <tr class="alt">
              <td class="comp-sticky">Planificación de montería</td>
              <td class="no"><i class="bi bi-x-lg"></i></td>
              <td class="no"><i class="bi bi-x-lg"></i></td>
              <td class="yes"><i class="bi bi-check-lg"></i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- ESCRITORIO: tabla + ciervo con scroll-sync -->
    <div class="container d-none d-lg-block pb-4" id="compScroll">
      <div class="row align-items-start comp-row">
        <!-- Ciervo -->
        <div class="col-lg-5">
          <figure id="deerStage" class="deer-stage">
            <img id="deerImg" src="<?= asset_url('Img/CensosCinegeticos/CiervoInstagramSinFondo.png') ?>" alt="Ciervo" loading="lazy">
            <a class="ig-hotspot" href="https://www.instagram.com/inspectorcaza/" target="_blank" rel="noopener" aria-label="Abrir Instagram @inspectorCaza"></a>
            <figcaption class="deer-caption">
              Lo que vemos en el campo, te lo mostramos en
              <a class="deer-ig" href="https://www.instagram.com/inspectorcaza/" target="_blank" rel="noopener">@inspectorCaza</a>
            </figcaption>
          </figure>
        </div>

        <!-- Tabla -->
        <div class="col-lg-7">
          <div class="comp-table-wrap comp-shift-right">
            <table class="comp-table w-100">
              <thead>
                <tr>
                  <th class="comp-th-first">
                    <div class="th-stack"><span class="th-pack">Características</span></div>
                  </th>
                  <th>
                    <div class="th-stack">
                      <span class="th-pack">Pack Censo</span>
                      <span class="th-tier text-bronze fw-bold">BRONCE</span>
                    </div>
                  </th>
                  <th>
                    <div class="th-stack">
                      <span class="th-pack">Pack Finca</span>
                      <span class="th-tier text-silver fw-bold">PLATA</span>
                    </div>
                  </th>
                  <th>
                    <div class="th-stack">
                      <span class="th-pack">Pack Caza</span>
                      <span class="th-tier text-gold fw-bold">ORO</span>
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="comp-sticky">Informe de censo poblacional detallado</td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                </tr>
                <tr class="alt">
                  <td class="comp-sticky">Visor interactivo de animales</td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                </tr>
                <tr>
                  <td class="comp-sticky">Número de especies, sexo y trofeo</td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                </tr>
                <tr>
                  <td class="comp-sticky">Visualización de infraestructuras (agua, comederos, puestos, torretas, puertas)</td>
                  <td class="no"><i class="bi bi-x-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                </tr>
                <tr class="alt">
                  <td class="comp-sticky">Análisis de roturas en el vallado</td>
                  <td class="no"><i class="bi bi-x-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                </tr>
                <tr>
                  <td class="comp-sticky">Vista detallada de la finca</td>
                  <td class="no"><i class="bi bi-x-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                </tr>
                <tr class="alt">
                  <td class="comp-sticky">Vídeos y fotos para promoción</td>
                  <td class="no"><i class="bi bi-x-lg"></i></td>
                  <td class="no"><i class="bi bi-x-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                </tr>
                <tr>
                  <td class="comp-sticky">Puestos y torretas en 360º</td>
                  <td class="no"><i class="bi bi-x-lg"></i></td>
                  <td class="no"><i class="bi bi-x-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                </tr>
                <tr class="alt">
                  <td class="comp-sticky">Planificación de montería</td>
                  <td class="no"><i class="bi bi-x-lg"></i></td>
                  <td class="no"><i class="bi bi-x-lg"></i></td>
                  <td class="yes"><i class="bi bi-check-lg"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA + FORM -->
  <section class="cta-hero" style="background-image:url('<?= asset_url('Img/CensosCinegeticos/deers.jpg') ?>')">
    <div class="container py-3">
      <div class="row justify-content-center">
        <div class="col-11 col-lg-10">
          <div class="cta-card p-3 p-md-4">
            <div class="row g-3 g-md-4 align-items-start">
              <div class="col-12 col-lg-5">
                <p class="fw-bold fs-5 fs-lg-3 lh-sm mb-0 text-center text-lg-start">
                  Si tienes cualquier duda o petición ponte en contacto con nosotros
                </p>
              </div>
              <div class="col-12 col-lg-7">
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

<!-- Script específico de esta vista -->
<script>
(function () {
  const section   = document.getElementById('compScroll');
  const deerImg   = document.getElementById('deerImg');
  const tableWrap = section ? section.querySelector('.comp-table-wrap') : null;
  if (!section || !deerImg || !tableWrap) return;

  const clamp = (v,min,max)=>Math.max(min, Math.min(max, v));
  const lerp  = (a,b,t)=>a+(b-a)*t;

  function onScroll(){
    const vh   = window.innerHeight || document.documentElement.clientHeight;
    const r    = section.getBoundingClientRect();

    const start = vh * 0.85, end = vh * 0.15;
    const raw   = (start - r.top) / (start - end);
    const t     = clamp(raw, 0, 1);

    deerImg.style.setProperty('--op',  t.toFixed(3));
    deerImg.style.setProperty('--dx',  (lerp(-16, 0, t)).toFixed(2) + '%');
    deerImg.style.setProperty('--rot', (lerp(-6, 0, t)).toFixed(2)  + 'deg');
    deerImg.style.setProperty('--clip',(lerp(0, 140, t)).toFixed(2) + '%');

    const scale = lerp(1, 0.9, t);
    tableWrap.style.setProperty('--tbl-scale', scale.toFixed(3));
    section.style.setProperty('--th-scale',  (lerp(1, 0.96, t)).toFixed(3));
  }

  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', onScroll);
})();
</script>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>
