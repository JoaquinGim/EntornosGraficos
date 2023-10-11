<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $consulta = $_POST["consulta"];

    $destinatario = "webmaster@example.com"; // Reemplaza con la dirección de correo del webmaster
    $asunto = "Consulta de contacto";

    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo electrónico: $email\n";
    $mensaje .= "Consulta:\n$consulta";

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "¡Correo enviado con éxito!";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
