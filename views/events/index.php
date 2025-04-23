<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Detalles del Evento</title>
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
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card p-4">
          <h3 class="mb-1">Nombre del Evento</h3>
          <p class="text-muted mb-3">@usuario • 3h</p>

          <p><strong>Descripción:</strong></p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the...</p>

          <div class="row my-3">
            <div class="col-md-4">
              <strong>Fecha:</strong><br />
              25 de abril, 2025
            </div>
            <div class="col-md-4">
              <strong>Ubicación:</strong><br />
              Madrid, España
            </div>
            <div class="col-md-4">
              <strong>Miembros:</strong><br />
              6 inscritos
            </div>
          </div>

          <div class="d-flex gap-2">
            <button class="btn btn-primary">Unirse</button>
            <button class="btn btn-outline-secondary">Chat</button>
          </div>
        </div>

        <div class="card mt-4">
          <div class="card-body">
            <h5 class="card-title">Participantes</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                @usuario1 <span class="badge bg-secondary">Organizador</span>
              </li>
              <li class="list-group-item">@usuario2</li>
              <li class="list-group-item">@usuario3</li>
              <li class="list-group-item">@usuario4</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
