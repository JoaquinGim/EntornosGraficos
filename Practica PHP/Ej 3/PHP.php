<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_amigo = $_POST['nombre_amigo'];
    $email_amigo = $_POST['email_amigo'];
    $asunto = "Recomendación de un sitio web";

    $mensaje = "Hola $nombre_amigo,\n";
    $mensaje .= "Te recomiendo visitar este sitio web: http://tusitio.com\n";
    $mensaje .= "Espero que te guste.\n";
    $mensaje .= "Saludos,\n";
    $mensaje .= "Tu amigo";

    $enviado = mail($email_amigo, $asunto, $mensaje);

    if ($enviado) {
        echo "Correo enviado con éxito a $email_amigo";
    } else {
        echo "Error al enviar el correo. Por favor, inténtalo más tarde.";
    }
}
?>
