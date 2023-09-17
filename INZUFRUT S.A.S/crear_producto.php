<?php
require 'conexion.php';

// Procesar los datos enviados desde el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $nombre = $_POST['Nom_producto'];
    $cantidad = $_POST['Cantidad_produc'];
    $estado = $_POST['estado'];
    $descripcion = $_POST['Descrip_producto'];

    // Realizar la inserción en la base de datos
    $sql = "INSERT INTO productos (Nom_producto, Cantidad_produc, estado, Descrip_producto) VALUES ('$nombre', $cantidad, '$estado', '$descripcion')";
    if (mysqli_query($conexion, $sql)) {
        echo "Producto registrado exitosamente";
    } else {
        echo "Error al registrar el producto: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>
