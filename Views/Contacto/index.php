<?php
  // Views/Contacto/index.php
  $page_title = 'Visual Technologies — Contacto';
  $nav_active = 'contacto';
  $page_css = [
    'Views/Css/styleContacto.css'
  ];
  require_once __DIR__ . '/../../partials/head.php';
  require_once __DIR__ . '/../../partials/header.php';
?>

<main>
  <!-- HERO -->
  <section class="thermo-hero" style="--hero-img:url('<?= asset_url('Img/CONTACTO/Contacto portada.jpg') ?>');">
    <div class="container text-white text-center">
      <h1 class="display-5 fw-bold hero-title">¿Hablamos?</h1>
      <p class="hero-sub fw-semibold mt-3">
        Si tienes cualquier duda sobre nuestros servicios, rellena el formulario y te respondemos lo antes posible.
      </p>
    </div>
  </section>

  <!-- FORMULARIO -->
  <section class="bg-white">
    <div class="container py-4 py-md-5">
      <div class="contact-card">
        <div class="row g-3 g-lg-4 align-items-center">
          <!-- Lado izquierdo -->
          <div class="col-12 col-lg-4">
            <div class="cf-aside text-center">
              <h3 class="m-0 fw-bold lh-sm">FORMULARIO DE<br>CONTACTO</h3>

              <!-- Marca apilada: logo + texto debajo -->
              <figure class="cf-mark mt-4">
                <img src="<?= asset_url('Img/empresa/logo.png') ?>" alt="Visual Technologies" class="cf-logo">
                <figcaption class="cf-brand">visual technologies</figcaption>
              </figure>
            </div>
          </div>

          <!-- Lado derecho -->
          <div class="col-12 col-lg-8">
            <form class="cf-body">
              <div class="row g-2">
                <div class="col-12">
                  <label class="form-label small mb-1">Nombre y Apellidos:</label>
                  <input type="text" class="form-control form-control-sm" required>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label small mb-1">Correo electrónico:</label>
                  <input type="email" class="form-control form-control-sm" required>
                </div>
                <div class="col-12 col-md-6">
                  <label class="form-label small mb-1">Teléfono:</label>
                  <input type="tel" class="form-control form-control-sm">
                </div>
                <div class="col-12">
                  <label class="form-label small mb-1">Mensaje:</label>
                  <textarea class="form-control" rows="4"></textarea>
                </div>
              </div>
              <div class="text-center text-lg-end mt-3">
                <button class="btn btn-success btn-lg px-4 rounded-pill" type="button">ENVIAR</button>
              </div>
            </form>
          </div>
        </div><!-- /row -->
      </div><!-- /contact-card -->
    </div>
  </section>

  <!-- CONTACTO DIRECTO + MAPA -->
  <section class="bg-white">
    <div class="container py-4 py-md-5">
      <div class="row g-4 align-items-stretch">
        <!-- Tarjeta CTA contacto -->
        <div class="col-12 col-lg-5">
          <div class="cta-mini-card h-100">
            <div class="d-flex align-items-center mb-3 cta-header">
              <span class="cta-icon"><i class="bi bi-chat-dots"></i></span>
              <div>
                <h3 class="h5 fw-bold m-0">Contacto directo</h3>
                <small class="text-muted">Estamos a un clic de distancia</small>
              </div>
            </div>

            <div class="info-list mb-3">
              <a href="mailto:maria@visualtechnologies.eu" class="info-line" aria-label="Enviar email a Visual Technologies">
                <span class="info-key">E-mail</span>
                <span class="info-val">maria@visualtechnologies.eu</span>
              </a>

              <a href="tel:+34629731992" class="info-line" aria-label="Llamar a Visual Technologies">
                <span class="info-key">Teléfono</span>
                <span class="info-val">+34 629 731 992</span>
              </a>

              <div class="info-line" aria-label="Dirección de Visual Technologies">
                <span class="info-key">Dirección</span>
                <span class="info-val">C/Fórnoles 2, Bajos. 44600 Alcañiz (Teruel)</span>
              </div>
            </div>

            <!-- CTA WhatsApp -->
            <div class="d-grid">
              <a
                href="https://wa.me/34629731992?text=Hola%20Visual%20Technologies%2C%20me%20gustar%C3%ADa%20informaci%C3%B3n"
                target="_blank" rel="noopener"
                class="btn btn-wa btn-lg w-100"
              >
                <span class="wa-round"><i class="bi bi-whatsapp"></i></span>
                Escríbenos por WhatsApp
              </a>
            </div>
          </div>
        </div>

        <!-- Tarjeta MAPA -->
        <div class="col-12 col-lg-7">
          <div class="map-card h-100 d-flex flex-column">
            <header class="d-flex align-items-center gap-2">
              <i class="bi bi-geo-alt-fill text-success"></i>
              <span><strong>Cómo llegar</strong></span>
            </header>

            <div class="ratio ratio-16x9">
              <iframe class="map-iframe"
                      src="https://www.google.com/maps?q=C%2FF%C3%B3rnoles%202,%20Bajos,%2044600%20Alca%C3%B1iz,%20Teruel&output=embed"
                      allowfullscreen="" loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="map-footer d-flex flex-wrap gap-2 justify-content-center justify-content-sm-between align-items-center">
              <span class="small text-muted">C/Fórnoles 2, Bajos · 44600 Alcañiz (Teruel)</span>
              <div class="d-flex gap-2">
                <a class="btn btn-outline-success btn-sm rounded-pill"
                   target="_blank" rel="noopener"
                   href="https://maps.google.com/?q=C/F%C3%B3rnoles%202,%20Bajos,%2044600%20Alca%C3%B1iz,%20Teruel">
                   Abrir en Maps
                </a>
                <a class="btn btn-success btn-sm rounded-pill"
                   target="_blank" rel="noopener"
                   href="https://www.google.com/maps/dir/?api=1&destination=C%2FF%C3%B3rnoles%202%2C%20Bajos%2C%2044600%20Alca%C3%B1iz%2C%20Teruel">
                   Cómo llegar
                </a>
              </div>
            </div>
          </div>
        </div>

      </div><!-- /row -->
    </div>
  </section>

  <!-- REDES SOCIALES -->
  <section class="bg-white">
    <div class="container py-4 py-md-5">
      <h2 class="text-center fw-bold mb-4">¡Síguenos en redes y descubre nuestros trabajos!</h2>

      <div class="row align-items-center g-4">
        <div class="col-12 col-md-7">
          <div class="social-list">
            <!-- Instagram -->
            <a
              href="https://www.instagram.com/visualtechnologiesdrones/"
              class="social-item"
              target="_blank" rel="noopener"
              aria-label="Instagram de Visual Technologies"
            >
              <span class="badge-circle ig-badge"><i class="bi bi-instagram"></i></span>
              <span class="fs-5">@visualtechnologiesdrones</span>
            </a>

            <!-- LinkedIn -->
            <a
              href="https://www.linkedin.com/company/visual-technologies-rpas/"
              class="social-item"
              target="_blank" rel="noopener"
              aria-label="LinkedIn de Visual Technologies RPAS"
            >
              <span class="badge-circle li-badge"><i class="bi bi-linkedin"></i></span>
              <span class="fs-5">Visual Technologies RPAS</span>
            </a>
          </div>
        </div>

        <div class="col-12 col-md-5 text-center">
          <img src="<?= asset_url('Img/CONTACTO/Drone.png') ?>" alt="Síguenos" class="img-fluid follow-drone">
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>
