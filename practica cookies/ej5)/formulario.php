<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Usuario</title>
</head>
<body>
  <h1>Formulario de Usuario</h1>

  <form action="guardar_sesion.php" method="POST">
    <label for="username">Nombre de usuario:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br>
    <button type="submit">Iniciar sesión</button>
  </form>
</body>
</html>
