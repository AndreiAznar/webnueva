<footer class="bg-success mt-5">
  <div class="container py-4">
    <div class="row align-items-center g-3">
      <div class="col-12 col-md-3 d-flex flex-column align-items-center">
        <img src="<?= asset_url('Img/empresa/logo.png') ?>" alt="Visual Technologies" height="40">
        <span class="mt-2 fw-semibold text-dark">visual technologies</span>
      </div>

      <div class="col-12 col-md-6 text-center fw-semibold">
        <a href="<?= url('Views/Inicio/index.php') ?>" class="link-dark text-decoration-none mx-1">Inicio</a> |
        <a href="<?= url('Views/Termografias/index.php') ?>" class="link-dark text-decoration-none mx-1">Servicios</a> |
        <a href="<?= url('Views/AcercaDe/index.php') ?>" class="link-dark text-decoration-none mx-1">Acerca De</a> |
        <a href="<?= url('Views/Contacto/index.php') ?>" class="link-dark text-decoration-none mx-1">Contacto</a> |
        <a href="<?= APPINSPECTOR_URL ?>" class="link-dark text-decoration-none mx-1" target="_blank" rel="noopener">AppInspector</a>
      </div>

      <div class="col-12 col-md-3 text-md-end text-center">
        <a href="#" class="btn btn-outline-dark rounded-circle me-2" aria-label="LinkedIn">
          <i class="bi bi-linkedin fs-4"></i>
        </a>
        <a href="#" class="btn btn-outline-dark rounded-circle" aria-label="Instagram">
          <i class="bi bi-instagram fs-4"></i>
        </a>
      </div>
    </div>

    <div class="text-center small mt-2">
      © <span id="year-footer"></span> Visual Technologies — Todos los derechos reservados.
      <br>
      <a href="#" class="link-dark text-decoration-none">Aviso legal</a> |
      <a href="#" class="link-dark text-decoration-none">Política de privacidad</a> |
      <a href="#" class="link-dark text-decoration-none">Política de cookies</a>
    </div>
  </div>
</footer>

<script>
  document.getElementById('year-footer').textContent = new Date().getFullYear();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
