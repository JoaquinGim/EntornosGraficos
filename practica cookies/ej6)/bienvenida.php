<?php
session_start();

if (isset($_SESSION['nombre'])) {
    $nombre = $_SESSION['nombre'];
    echo "<h1>Bienvenido, $nombre</h1>";
} else {
    echo "No puedes acceder a esta página.";
}
?>
