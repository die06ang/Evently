<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Usuario</title>
  <link rel="stylesheet" href="assets\css\style2.css">
</head>
<body>

  <div class="auth-container">
    <div class="auth-box">
      <h2>Crear Cuenta</h2>
      
      <form action="/register" method="POST" class="auth-form">
      
        <div class="input-group">
          <label for="username">Nombre de Usuario</label>
          <input type="text" id="username" name="username" required placeholder="Elige un nombre de usuario">
        </div>
        
        <div class="input-group">
          <label for="email">Correo Electrónico</label>
          <input type="email" id="email" name="email" required placeholder="Ingresa tu correo electrónico">
        </div>

        <div class="input-group">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" required placeholder="Crea una contraseña">
        </div>

        <div class="input-group">
          <label for="confirm-password">Confirmar Contraseña</label>
          <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirma tu contraseña">
        </div>
        
        <div class="form-footer">
          <button type="submit" class="btn-submit">Crear Cuenta</button>
        </div>
        
        <p class="login-link">¿Ya tienes cuenta? <a href="/login">Iniciar sesión</a></p>
        
      </form>
    </div>
  </div>

</body>
</html>
