<!DOCTYPE html>
<html>
<head>
  <title>Catálogo de Productos</title>
</head>
<body>
  <h1>Catálogo de Productos</h1>

  <?php
  include 'conexion.php';

  // Obtener los productos del catálogo desde la base de datos
  $sql = "SELECT * FROM catalogo";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      echo "<table>";
      echo "<tr><th>ID</th><th>Producto</th><th>Precio</th><th>Acciones</th></tr>";
      while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['producto']."</td>";
          echo "<td>".$row['precio']."</td>";
          echo "<td><a href='agregar_carrito.php?id=".$row['id']."'>Agregar al Carrito</a></td>";
          echo "</tr>";
      }
      echo "</table>";
  } else {
      echo "No hay productos en el catálogo.";
  }

  $conn->close();
  ?>
</body>
</html>
