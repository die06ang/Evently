<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar Sesión</title>
  <link href="..\..\assets\css\bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="..\..\assets\css\style.css">
</head>

<body>
  <nav class="navbar navbar-expand px-4 nav-fija transparente-claro">
    <a class="navbar-brand fw-bold" href="..\home\indexcopy.html">
      <img src="..\..\assets\img\logo.jpg" alt="logo" class="logo" />
    </a>
  </nav>

  <div class="container d-flex flex-column align-items-center justify-content-center"
    style="min-height: 100vh; margin-bottom: 0;">
    <div class="card p-4 shadow-sm w-100 transparente-oscuro" style="max-width: 55%; min-height: 40vh; margin-top: 0%;">
      <h2 class="text-center mb-4"><i class="fa-solid fa-id-card"></i> Bienvenido, inicia sesión con tu cuenta!</h2>
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="mb-3">
          <i class="fa-solid fa-user"></i> <label for="nickUsr" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="nickUsr" placeholder="@Ejemplo" />
        </div>
        <div class="mb-3">
          <i class="fa-solid fa-key"></i> <label for="contrasenaUsr" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contrasenaUsr" placeholder="••••••••" />
        </div>

        <button type="submit" class="btn btn-primary w-100 fa-fade"><i class="fa-solid fa-arrow-right-to-bracket"></i>
          Iniciar Sesión</button>
      </form>
      <p class="text-center mt-3">¿No tienes cuenta todavía? <a href="registercopy.html">¡Crea una!</a></p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/ae9a063981.js" crossorigin="anonymous"></script>
</body>

</html>