<?php
session_start();

// Verificar si las variables de sesión están establecidas
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];

  // Mostrar los valores almacenados en las variables de sesión
  echo "<h1>Valores almacenados en las variables de sesión:</h1>";
  echo "<p>Nombre de usuario: $username</p>";
  echo "<p>Contraseña: $password</p>";
} else {
  // Si las variables de sesión no están establecidas, redirigir a la primera página
  header('Location: formulario.php');
  exit();
}
?>
