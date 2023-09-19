<?php
// Archivo eliminar_producto.php

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {
    $inven_id = $_POST["id"];
    
    // Realiza la consulta para eliminar el producto por su ID
    $user = "DELETE FROM inventario WHERE Nombre_producto = '$inven_id'";
    if (mysqli_query($conexion, $user)) {
        echo "<script>
        alert('Los datos se han eliminado correctamente');
        window.location = 'tabla_inven.php';
        </script>";
    } else {
        echo "<script>
        alert('No se pudo completar la eliminación de datos');
        window.location = 'tabla_inven.php';
        </script>" . mysqli_error($conexion);
    }
}

?>