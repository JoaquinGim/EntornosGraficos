<?php
// Borrar la cookie establecida para "titular"
setcookie('titular', '', time() - 3600, '/'); // Expira en el pasado (-1 hora)
?>

<!DOCTYPE html>
<html>
<head>
  <title>Borrar Cookie</title>
</head>
<body>
  <h1>Cookie borrada</h1>
  <p>La cookie para la preferencia del titular ha sido borrada.</p>
  <p><a href="Periodico.html">Volver al formulario</a></p>
</body>
</html>
