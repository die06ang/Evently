<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Crear Evento</title>
  <link href="..\..\assets\css\bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="..\..\assets\css\style.css">
</head>

<body>
  <nav class="navbar navbar-expand px-4 nav-fija transparente-claro">
    <a class="navbar-brand fw-bold" href="..\home\indexcopy.html">
      <img src="..\..\assets\img\logo.jpg" alt="logo" class="logo" />
    </a>
    <div class="ms-auto d-flex align-items-center">
      <a href="..\users\indexcopy.html" class="btn btn-sm"><i class="fa-solid fa-user"></i> @dam01</a>
      <a href="..\users\logincopy.html" class="btn btn-outline-danger btn-sm"><i
          class="fa-solid fa-arrow-right-from-bracket fa-flip-horizontal"></i> CERRAR SESIÓN</a>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card p-4 transparente-oscuro">
          <h4 class="mb-3"><i class="fa-solid fa-plus"></i> Crea un evento</h4>
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mb-3">
              <i class="fa-solid fa-signature"></i> <label for="nombreEvt" class="form-label">Nombre del Evento</label>
              <input type="text" class="form-control" id="nombreEvt" placeholder="Ej: Torneo de fútbol" />
            </div>

            <div class="mb-3">
              <i class="fa-solid fa-signature"></i> <label for="descEvt" class="form-label">Descripción del
                Evento</label>
              <textarea class="form-control" id="descEvt" rows="3" placeholder="Descripción del evento..."></textarea>
            </div>

            <button class="btn btn-success w-100 fa-fade" name="submit" type="submit"><i class="fa-solid fa-plus"></i>
              Crear Evento</button>
            <a class="btn btn-danger w-100" href="<?php echo ROOT_PATH; ?>events"><i class="fa-solid fa-xmark"></i>
              Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/ae9a063981.js" crossorigin="anonymous"></script>
</body>

</html>