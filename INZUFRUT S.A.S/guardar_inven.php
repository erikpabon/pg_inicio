<?php
include 'conexion.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actualizar'])) {
    // Recupera los datos actualizados del formulario
    $id = $_POST['id'];
    $nuevoNombre = $_POST['nuevoNombre'];
    $nuevaCantidad = $_POST['nuevaCantidad'];
    $nuevolote = $_POST['nuevolote'];
    $nuevafecha_ingre = $_POST['nuevafecha_ingre'];
    $nuevafecha_sali = $_POST['nuevafecha_sali'];
    $nuevaDescripcion = $_POST['nuevaDescripcion'];
    
    // Realiza la actualización en la base de datos
    $query = "UPDATE inventario SET 
              Nombre_producto = '$nuevoNombre',
              cantidad = '$nuevaCantidad',
              lote = '$nuevolote',
              fecha_entrada = '$nuevafecha_ingre',
              fecha_salida = '$nuevafecha_sali',
              descripcion = '$nuevaDescripcion'
              WHERE Nombre_producto = '$id'";
    
    if (mysqli_query($conexion, $query)) {
        echo "<script>
        alert('Los datos se han actualizado correctamente');
        window.location = 'tabla_inven.php';
        </script>";
    } else {
        echo "<script>
        alert('No se pudo completar la actualización de datos: " . mysqli_error($conexion) . "');
        window.location = 'tabla_inven.php';
        </script>";
    }
} else {
    echo "El formulario no se ha enviado correctamente";
}
?>
