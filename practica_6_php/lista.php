<?php
$conexion = mysqli_connect('localhost', 'trabajoentornos', 'entornos123', 'Capitales');

if (!$conexion) {
    die('Error de conexión: ' . mysqli_connect_error());
}

$query = "SELECT * FROM Ciudades";
$resultado = mysqli_query($conexion, $query);

if (!$resultado) {
    echo "Error al obtener las ciudades: " . mysqli_error($conexion);
} else {
    if (mysqli_num_rows($resultado) > 0) {
        echo "<h1>ABM de Ciudades - Listado de ciudades</h1>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre</th><th>País</th><th>Población</th></tr>";

        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['id'] . "</td>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['pais'] . "</td>";
            echo "<td>" . $fila['poblacion'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No hay ciudades para mostrar.";
    }
}

mysqli_close($conexion);
?>
