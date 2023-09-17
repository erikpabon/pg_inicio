<?php
require 'conexion.php';

// Obtener la lista de productos desde la base de datos
$sql = "SELECT * FROM productos";
$resultado = $mysqli->query($sql);

// Mostrar la lista de productos
while ($row = $resultado->fetch_assoc()) {
  echo "Nombre: " . $row['nombre'] . "<br>";
  echo "Cantidad: " . $row['cantidad'] . "<br>";
  echo "Estado: " . $row['estado'] . "<br>";
  echo "Descripción: " . $row['descripcion'] . "<br>";
  echo "<a href='editar_producto.php?id=" . $row['id'] . "'>Editar</a> | ";
  echo "<a href='eliminar_producto.php?id=" . $row['id'] . "'>Eliminar</a>";
  echo "<hr>";
}
?>