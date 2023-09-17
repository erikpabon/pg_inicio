<?php
require 'conexion.php';

// Obtener el ID del producto a eliminar desde la URL
$id = $_GET['id'];

// Eliminar el producto de la base de datos
$sql = "DELETE FROM productos WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

// Redireccionar a la página de inventario o mostrar un mensaje de éxito
header("Location: inventario.php");
exit();
?>
