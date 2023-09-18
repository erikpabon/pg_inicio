<?php
include ('../conexion.php');

// Verificar si se ha enviado el ID del registro a actualizar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Consulta para obtener los datos del registro actual
    $query = "SELECT * FROM persona WHERE Num_Doc = '$id'";
    $result = mysqli_query($conexion, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $registro = mysqli_fetch_assoc($result);
    } else {
        echo "Registro no encontrado";
        exit(); // Terminar el script si no se encuentra el registro
    }
} else {
    echo "ID de registro no proporcionado";
    exit(); // Terminar el script si no se proporciona el ID
}

// Procesar el formulario de actualización si se envió
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actualizar'])) {
    // Recupera los datos actualizados del formulario
    $nuevoTipoIdentificacion = $_POST['nuevoTipoIdentificacion'];
    $nuevoNumeroDocumento = $_POST['nuevoNumeroDocumento'];
    $nuevoPrimerNombre = $_POST['nuevoPrimerNombre'];
    $nuevoSegundoNombre = $_POST['nuevoSegundoNombre'];
    $nuevoPrimerApellido = $_POST['nuevoPrimerApellido'];
    $nuevoSegundoApellido = $_POST['nuevoSegundoApellido'];
    $nuevoTipoPersona = $_POST['nuevoTipoPersona'];
    $nuevoCorreo = $_POST['nuevoCorreo'];
    
    // Realiza la actualización en la base de datos
    $query = "UPDATE persona SET 
              tipo_identificacion = '$nuevoTipoIdentificacion',
              Num_Doc = '$nuevoNumeroDocumento',
              primNombre = '$nuevoPrimerNombre',
              segNombre = '$nuevoSegundoNombre',
              primApellido = '$nuevoPrimerApellido',
              segApellido = '$nuevoSegundoApellido',
              tipo_persona = '$nuevoTipoPersona',
              correo = '$nuevoCorreo'
              WHERE Num_Doc = '$id'";
    
    if (mysqli_query($conexion, $user)) {
        echo "<script>
        alert('Los datos se han actualizado correctamente');
        window.location = 'tabla_registro.php';
        </script>" ;
    } else {
        echo "<script>
        alert('No se pudo completar la actualizacion de datos');
        window.location = 'tabla_registro.php';
        </script>" . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Registro</title>
    <!-- Agrega tus estilos CSS aquí -->
</head>
<body>
    <h2>Actualizar Registro</h2>
    <form action="guardar_modificacion.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nuevoTipoIdentificacion">Nuevo Tipo de Identificación:</label>
        <input type="text" name="nuevoTipoIdentificacion" value="<?php echo $registro['tipo_identificacion']; ?>"><br>

        <label for="nuevoNumeroDocumento">Nuevo Número de Documento:</label>
        <input type="text" name="nuevoNumeroDocumento" value="<?php echo $registro['Num_Doc']; ?>"><br>

        <label for="nuevoPrimerNombre">Nuevo Primer Nombre:</label>
        <input type="text" name="nuevoPrimerNombre" value="<?php echo $registro['primNombre']; ?>"><br>

        <label for="nuevoSegundoNombre">Nuevo Segundo Nombre:</label>
        <input type="text" name="nuevoSegundoNombre" value="<?php echo $registro['segNombre']; ?>"><br>

        <label for="nuevoPrimerApellido">Nuevo Primer Apellido:</label>
        <input type="text" name="nuevoPrimerApellido" value="<?php echo $registro['primApellido']; ?>"><br>

        <label for="nuevoSegundoApellido">Nuevo Segundo Apellido:</label>
        <input type="text" name="nuevoSegundoApellido" value="<?php echo $registro['segApellido']; ?>"><br>

        <label for="nuevoTipoPersona">Nuevo Tipo de Persona:</label>
        <input type="text" name="nuevoTipoPersona" value="<?php echo $registro['tipo_persona']; ?>"><br>

        <label for="nuevoCorreo">Nuevo Correo Electrónico:</label>
        <input type="text" name="nuevoCorreo" value="<?php echo $registro['correo']; ?>"><br>

        <button class="btbusca" type="submit" name="actualizar">Actualizar</button>
    </form>
</body>
</html>

