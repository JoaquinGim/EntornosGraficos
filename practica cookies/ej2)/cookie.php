<?php
// Comprobar si la cookie "contador" está establecida
if (isset($_COOKIE['contador'])) {
  // Incrementar el valor de la cookie
  $contador = $_COOKIE['contador'] + 1;
} else {
  // Establecer la cookie con el valor inicial de 1
  $contador = 1;
}

// Establecer la cookie con el nuevo valor
setcookie('contador', $contador, time() + 3600); // Expire en 1 hora

// Mostrar el mensaje de bienvenida o el número de visitas
if ($contador === 1) {
  echo "<h1>Bienvenido a contador.php</h1>";
} else {
  echo "<h1>Has visitado contador.php $contador veces.</h1>";
}
?>
