<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $pais = $_POST['pais'];
    $poblacion = $_POST['poblacion'];

    $conexion = mysqli_connect('localhost', 'trabajoentornos', 'entornos123', 'Capitales');

    if (!$conexion) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $query = "INSERT INTO Ciudades (nombre, pais, poblacion) VALUES ('$nombre', '$pais', $poblacion)";

    if (mysqli_query($conexion, $query)) {
        echo "Ciudad agregada correctamente.";
    } else {
        echo "Error al agregar la ciudad: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>ABM de Ciudades - Agregar ciudad</title>
</head>
<body>
    <h1>ABM de Ciudades - Agregar ciudad</h1>

    <form method="POST" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" required><br>

        <label for="poblacion">Población:</label>
        <input type="number" id="poblacion" name="poblacion" required><br>

        <button type="submit">Agregar</button>
    </form>
</body>
</html>
