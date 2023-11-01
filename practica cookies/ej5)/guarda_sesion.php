<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Guardar los valores en variables de sesión
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;
}

// Redirigir a la tercera página
header('Location: recuperar_sesion.php');
exit();
?>
