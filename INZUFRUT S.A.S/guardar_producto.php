<?php
include 'conexion.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actualizar'])) {
    // Recupera los datos actualizados del formulario
    $id = $_POST['id'];
    $nuevoNombre = $_POST['nuevoNombre'];
    $nuevaCantidad = $_POST['nuevaCantidad'];
    $nuevoTipoestado = $_POST['nuevoTipoestado'];
    $nuevaDescripcion = $_POST['nuevaDescripcion'];
    
    // Realiza la actualización en la base de datos
    $query = "UPDATE productos SET 
              Nom_producto = '$nuevoNombre',
              Cantidad_produc = '$nuevaCantidad',
              Estado = '$nuevoTipoestado',
              Descrip_producto = '$nuevaDescripcion'
              WHERE Nom_producto = '$id'";
    
    if (mysqli_query($conexion, $query)) {
        echo "<script>
        alert('Los datos se han actualizado correctamente');
        window.location = 'tabla_producto.php';
        </script>";
    } else {
        echo "<script>
        alert('No se pudo completar la actualización de datos: " . mysqli_error($conexion) . "');
        window.location = 'tabla_producto.php';
        </script>";
    }
} else {
    echo "El formulario no se ha enviado correctamente";
}
?>
