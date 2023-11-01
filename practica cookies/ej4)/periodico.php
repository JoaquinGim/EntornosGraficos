<!DOCTYPE html>
<html>
<head>
  <title>Periódico</title>
</head>
<body>
  <h1>Periódico</h1>

  <?php
  // Comprobar si la cookie "titular" está establecida
  if (isset($_COOKIE['titular'])) {
    $titular = $_COOKIE['titular'];

    if ($titular === 'politica') {
      echo "<h2>Noticia Política</h2>";
      // Mostrar la noticia política
    } elseif ($titular === 'economica') {
      echo "<h2>Noticia Económica</h2>";
      // Mostrar la noticia económica
    } elseif ($titular === 'deportiva') {
      echo "<h2>Noticia Deportiva</h2>";
      // Mostrar la noticia deportiva
    }
  } else {
    echo "<h2>Noticia Política</h2>";
    // Mostrar la noticia política por defecto
  }
  ?>

  <a href="borrar_cookie.php">Borrar Cookie</a>
</body>
</html>
