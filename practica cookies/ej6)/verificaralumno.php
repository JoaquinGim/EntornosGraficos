<?php
session_start();
include 'conexion.php';

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Verifica si el correo electrónico existe en la tabla "alumnos"
    $sql = "SELECT nombre FROM alumnos WHERE mail = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si el correo electrónico existe, guarda el nombre en una variable de sesión
        $row = $result->fetch_assoc();
        $_SESSION['nombre'] = $row['nombre'];

        // Redirige a la tercera página
        header('Location: bienvenida.php');
        exit();
    } else {
        // Si el correo electrónico no existe, muestra un mensaje de error
        echo "El correo electrónico no existe en la base de datos.";
    }
}

$conn->close();
?>
