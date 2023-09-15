<?php
include 'conexion.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actualizar'])) {
    // Recupera los datos actualizados del formulario
    $id = $_POST['id'];
    $nuevoNumDoc = $_POST['nuevoNumDoc'];
    $nuevoNombreProv = $_POST['nuevoNombreProv'];
    $nuevaDireccion = $_POST['nuevaDireccion'];
    $nuevoCorreo = $_POST['nuevoCorreo'];
    $nuevoCelular = $_POST['nuevoCelular'];
    $nuevoProducto = $_POST['nuevoProducto'];
    
    // Realiza la actualización en la base de datos
    $query = "UPDATE proveedores SET 
              Num_Doc = '$nuevoNumDoc',
              Nombre_prov = '$nuevoNombreProv',
              Direccion = '$nuevaDireccion',
              correo = '$nuevoCorreo',
              celular = '$nuevoCelular',
              producto = '$nuevoProducto'
              WHERE Num_Doc = '$id'";
    
    if (mysqli_query($conexion, $query)) {
        echo '<script>
        alert("Los datos se han actualizado correctamente");
        window.location = "tabla_proveedores.php";
        </script>';
    } else {
        echo '<script>
        alert("No se pudo completar la actualización de datos: ' . mysqli_error($conexion) . '");
        window.location = "tabla_proveedores.php";
        </script>';
    }
} else {
    echo "El formulario no se ha enviado correctamente";
}
?>


