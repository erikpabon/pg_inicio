<?php
require 'conexion.php';

// Procesar los datos enviados desde el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $estado = $_POST['estado'];
    $descripcion = $_POST['descripcion'];

    // Realizar la inserción en la base de datos
    $sql = "INSERT INTO productos (nombre, cantidad, estado, descripcion) VALUES ('$nombre', $cantidad, '$estado', '$descripcion')";
    if (mysqli_query($conexion, $sql)) {
        echo "Producto registrado exitosamente";
    } else {
        echo "Error al registrar el producto: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>
