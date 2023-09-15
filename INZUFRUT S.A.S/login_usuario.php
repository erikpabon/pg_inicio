<?php
session_start();

// Conectar a la base de datos
include 'conexion.php';

// Verificar si la conexión se estableció correctamente
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Consulta para verificar las credenciales
$query = "SELECT * FROM Persona WHERE correo = '$correo' AND contrasena = '$contrasena'";
$result = $conexion->query($query);

if ($result->num_rows == 1) {
    // Credenciales válidas, determinar el rol del usuario
    $row = $result->fetch_assoc();
    $tipo_persona = $row['Tipo_persona'];

    // Establecer una variable de sesión para el rol
    $_SESSION['Tipo_persona'] = $tipo_persona;

    // Redirigir según el rol
    if ($tipo_persona == 'gerente') {
        header("Location: home.php");
    } elseif ($tipo_persona == 'colaborador') {
        header("Location: colaborador.php");
    } elseif ($tipo_persona == 'proveedor') {
        header("Location: providers.php");
    } else {
        echo "Rol no válido.";
    }
} else {
    echo '<script>
    alert("Deligencie los campos");
    window.location = "index.php";
</script>';
}

$conexion->close();
?>
