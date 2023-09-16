<?php
include 'conexion.php';

// Verificar si se ha enviado un ID para eliminar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];

    // Realizar la eliminación en la base de datos
    $user = "DELETE FROM proveedores WHERE Num_Doc = $id"; // Cambia "persona" por el nombre de tu tabla
    if (mysqli_query($conexion, $user)) {
        echo "<script>
        alert('Los datos se han eliminado correctamente');
        window.location = 'tabla_proveedores.php';
        </script>";
    } else {
        echo "<script>
        alert('No se pudo completar la eliminación de datos');
        window.location = 'tabla_proveedores.php';
        </script>" . mysqli_error($conexion);
    }
}