<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $conexion = mysqli_connect('localhost', 'trabajoentornos', 'entornos123', 'Capitales');

    if (!$conexion) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $query = "DELETE FROM Ciudades WHERE id = $id";

    if (mysqli_query($conexion, $query)) {
        echo "Ciudad eliminada correctamente.";
    } else {
        echo "Error al eliminar la ciudad: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ABM de Ciudades - Eliminar ciudad</title>
</head>
<body>
    <h1>ABM de Ciudades - Eliminar ciudad</h1>

    <form method="POST" action="">
        <label for="id">ID de la ciudad a eliminar:</label>
        <input type="number" id="id" name="id" required><br>

        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
