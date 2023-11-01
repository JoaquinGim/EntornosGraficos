<?php
$servername = "localhost";
$username = "trabajoentornos";
$password = "entornos123";
$dbname = "Compras";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
