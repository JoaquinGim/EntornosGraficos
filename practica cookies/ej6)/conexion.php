<?php
$servername = "localhost";
$username = "trabajoentornos";
$password = "entornos123";
$dbname = "base2";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
