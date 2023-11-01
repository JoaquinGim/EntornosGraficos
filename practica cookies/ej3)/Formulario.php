<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Usuario</title>
</head>
<body>
  <h1>Formulario de Usuario</h1>

  <?php
  // Comprobar si la cookie "usuario" está establecida
  if (isset($_COOKIE['usuario'])) {
    $ultimoUsuario = $_COOKIE['usuario'];
    echo "<p>Último usuario ingresado: $ultimoUsuario</p>";
  }
  ?>

  <form action="guardar_usuario.php" method="POST">
    <label for="username">Nombre de usuario:</label>
    <input type="text" id="username" name="username" required>
    <button type="submit">Guardar</button>
  </form>
</body>
</html>
