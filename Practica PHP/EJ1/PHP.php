<?php
$phpmailer = new PHPMailer(true);
$phpmailer->isSMTP();
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = '853aa364460dbf';
$phpmailer->Password = '36412ba761dfa7';

$phpmailer->setFrom('from@example.com', 'Tu Nom');
$phpmailer->addAddress('to@example.com', 'Recp Nom');
$phpmailer->Subject = 'Prueba de correo electrónico HTML';

$htmlContent = 'Ejemplo1';

$phpmailer->isHTML(true);
$phpmailer->Body = $htmlContent;

try {
    $phpmailer->send();
    echo 'El correo electrónico ha sido enviado correctamente.';
} catch (Exception $e) {
    echo 'Error al enviar el correo electrónico: ' . $phpmailer->ErrorInfo;
}
?>

php>
