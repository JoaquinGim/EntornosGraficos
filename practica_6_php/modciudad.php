<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $pais = $_POST['pais'];
    $poblacion = $_POST['poblacion'];

    $conexion = mysqli_connect('localhost', 'trabajoentornos', 'entornos123', 'Capitales');

    if (!$conexion) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $query = "UPDATE Ciudades SET nombre = '$nombre', pais = '$pais', poblacion = $poblacion WHERE id = $id";

    if (mysqli_query($conexion, $query)) {
        echo "Ciudad modificada correctamente.";
    } else {
        echo "Error al modificar la ciudad: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ABM de Ciudades - Modificar ciudad</title>
</head>
<body>
    <h1>ABM de Ciudades - Modificar ciudad</h1>

    <form method="POST" action="">
        <label for="id">ID de la ciudad a modificar:</label>
        <input type="number" id="id" name="id" required><br>

        <label for="nombre">Nuevo nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="pais">Nuevo país:</label>
        <input type="text" id="pais" name="pais" required><br>

        <label for="poblacion">Nueva población:</label>
        <input type="number" id="poblacion" name="poblacion" required><br>

        <button type="submit">Modificar</button>
    </form>
</body>
</html>
