<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Crear Evento</title>
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

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card p-4">
          <h4 class="mb-3">Crear un evento</h4>
          <form>
            <div class="mb-3">
              <label for="nombreEvento" class="form-label">Nombre del Evento</label>
              <input type="text" class="form-control" id="nombreEvento" placeholder="Ej: Torneo de fútbol" />
            </div>

            <div class="mb-3">
              <label for="descripcionEvento" class="form-label">Descripción del Evento</label>
              <textarea class="form-control" id="descripcionEvento" rows="3" placeholder="Descripción del evento..."></textarea>
            </div>

            <div class="mb-3">
              <label for="etiquetasEvento" class="form-label">Etiquetas</label>
              <input type="text" class="form-control" id="etiquetasEvento" placeholder="#futbol #amistoso" />
              <div class="form-text">Separa cada etiqueta con un espacio o coma.</div>
            </div>

            <button type="submit" class="btn btn-success w-100">Crear Evento</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>