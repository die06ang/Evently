<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio - Eventos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets\css\style2.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
    <a class="navbar-brand fw-bold" href="#">Eventos</a>
    <div class="ms-auto d-flex align-items-center">
      <span class="me-3">@dam01</span>
      <button class="btn btn-outline-danger btn-sm">LOG OUT</button>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="row">
      <aside class="col-md-3 mb-4">
        <div class="card mb-3">
          <div class="card-body text-center">
            <h5 class="card-title">Diego Anguiano</h5>
            <p class="card-text text-muted">@dam01</p>
            <p class="small">Logroño, España</p>
            <p class="small text-muted">Se unió en marzo de 2025</p>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-body">
            <h6 class="card-title">Etiquetas para ti</h6>
            <span class="badge bg-primary">#futbol</span>
            <span class="badge bg-secondary">#musica</span>
            <span class="badge bg-success">#videojuegos</span>
            <span class="badge bg-warning text-dark">#fornite</span>
          </div>
        </div>

        <div class="d-grid gap-2">
          <a href="crear-evento.html" class="btn btn-success">CREAR EVENTO</a>
          <input class="form-control" placeholder="Buscar Eventos" />
        </div>
      </aside>

      <main class="col-md-9">
        <h4 class="mb-4">Bienvenido, Diego!</h4>

        <div class="card mb-3">
          <div class="card-body">
            <h5>Nombre Evento <small class="text-muted">@usuario • 3h</small></h5>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="d-flex justify-content-between">
              <span>6 miembros</span>
              <button class="btn btn-outline-primary btn-sm">Unirse</button>
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-body">
            <h5>Otro Evento <small class="text-muted">@ejemplo • 18h</small></h5>
            <p>Descripción de ejemplo para otro evento...</p>
            <div class="d-flex justify-content-between">
              <span>4 miembros</span>
              <button class="btn btn-outline-primary btn-sm">Unirse</button>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>