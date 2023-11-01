<?php
session_start();
include 'conexion.php';

echo "<h1>Carrito de Compras</h1>";

// Verificar si hay productos en el carrito
if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
    $total = 0;

    echo "<table>";
    echo "<tr><th>ID</th><th>Producto</th><th>Precio</th></tr>";
    foreach ($_SESSION['carrito'] as $producto) {
        echo "<tr>";
        echo "<td>".$producto['id']."</td>";
        echo "<td>".$producto['producto']."</td>";
        echo "<td>".$producto['precio']."</td>";
        echo "</tr>";

        $total += $producto['precio'];
    }
    echo "<tr><td colspan='2'>Total:</td><td>".$total."</td></tr>";
    echo "</table>";
} else {
    echo "El carrito está vacío.";
}

$conn->close();
?>
