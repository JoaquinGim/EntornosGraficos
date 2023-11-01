<?php
include 'conexion.php';

if (isset($_POST['cancion'])) {
    $cancion = $_POST['cancion'];

    // Realizar la búsqueda en la base de datos
    $sql = "SELECT * FROM buscador WHERE canciones LIKE '%$cancion%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>Resultados de la búsqueda:</h1>";
        while ($row = $result->fetch_assoc()) {
            echo "<p>".$row['canciones']."</p>";
        }
    } else {
        echo "<p>No se encontraron canciones.</p>";
    }
}

$conn->close();
?>
