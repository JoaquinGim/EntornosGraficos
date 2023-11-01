<?php
if (isset($_POST['username'])) {
  $username = $_POST['username'];

  // Establecer la cookie con el nombre de usuario
  setcookie('usuario', $username, time() + 86400 * 30); // Expire en 30 días
}

// Redirigir al formulario de usuario
header('Location: formulario_usuario.php');
exit();
?>
