<?php
include 'conexion.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actualizar'])) {
    // Recupera los datos actualizados del formulario
    $id = $_POST['id'];
    $nuevoTipoIdentificacion = $_POST['nuevoTipoIdentificacion'];
    $nuevoNumeroDocumento = $_POST['nuevoNumeroDocumento'];
    $nuevoPrimerNombre = $_POST['nuevoPrimerNombre'];
    $nuevoSegundoNombre = $_POST['nuevoSegundoNombre'];
    $nuevoPrimerApellido = $_POST['nuevoPrimerApellido'];
    $nuevoSegundoApellido = $_POST['nuevoSegundoApellido'];
    $nuevoTipoPersona = $_POST['nuevoTipoPersona'];
    $nuevoCorreo = $_POST['nuevoCorreo'];
    $nuevacontra = $_POST['nuevaContrasena'];
    
    // Realiza la actualización en la base de datos
    $query = "UPDATE persona SET 
              tipo_identificacion = '$nuevoTipoIdentificacion',
              Num_Doc = '$nuevoNumeroDocumento',
              primNombre = '$nuevoPrimerNombre',
              segNombre = '$nuevoSegundoNombre',
              primApellido = '$nuevoPrimerApellido',
              segApellido = '$nuevoSegundoApellido',
              tipo_persona = '$nuevoTipoPersona',
              correo = '$nuevoCorreo',
              contrasena = '$nuevacontra'
              WHERE Num_Doc = '$id'";
    
    if (mysqli_query($conexion, $query)) {
        echo "<script>
        alert('Los datos se han actualizado correctamente');
        window.location = 'tabla_registro.php';
        </script>";
    } else {
        echo "<script>
        alert('No se pudo completar la actualización de datos: " . mysqli_error($conexion) . "');
        window.location = 'tabla_registro.php';
        </script>";
    }
} else {
    echo "El formulario no se ha enviado correctamente";
}
?>
