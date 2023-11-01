<?php
session_start();
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener el producto seleccionado desde la base de datos
    $sql = "SELECT * FROM catalogo WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Agregar el producto al carrito en la variable de sesión
        $_SESSION['carrito'][] = $row;
    }
}

$conn->close();

// Redirigir de vuelta al catálogo
header('Location: catalogo.php');
exit();
?>
