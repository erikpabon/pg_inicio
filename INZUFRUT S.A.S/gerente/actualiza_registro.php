<?php
include 'conexion.php';

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
<link href="assets/img/icono.png" rel="icon">
    <title>INZUFRUT</title>
    <!-- Agrega tus estilos CSS aquí -->
    <style>
    /* Estilos generales */
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    border-style: solid;
    border-color: #fa9702;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ff8000; /* Cambiar el fondo a naranja */
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 30px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"], input[type="email"] {
	border-radius: 10px;
	width: 920px;
	height: 30px;
	border-color: #ff6600;
	border-style: solid;
    font-size: 15px;
}

button[type="submit"] {
    background-color: rgb(254, 252, 251); /* Cambiar el fondo del botón a naranja */
    color: black;
    background-color: rgb(254, 252, 251);
    border-color: rgb(255, 179, 0);
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}

button[type="submit"]:hover {
    background-color: rgb(251, 213, 155);
    color: black;
    text-decoration: solid;
}
form{
text-align: center;
}
label{
    padding-right: 690px;
}
header {
    background-color: #faf9f6;
    color: #0a0a0a;
    border-radius: 12px;
    border-color: #f9c063;
    border-style: solid;
    text-align: center;
    padding: 1rem;
	
    
  }
.pabon{
	width: 70px;
	float: left;
}
.tip{
    padding-right: 700px;
}
.nom{
    padding-right: 750px;
}
.nomb{
    padding-right: 735px;
}
.apell{
    padding-right: 735px;
}
.correo{
    padding-right: 734px;
}
    </style>
</head>
<body>
<header>
    <h2><img class="pabon" src="assets/img/icono.png" alt="icon"></a>ACTUALIZAR REGISTRO</h2>
    <br>
    </header><br><br>
    <form action="guardar_modificacion.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label class="tip" for="nuevoTipoIdentificacion">Nuevo Tipo de Identificación:</label>
        <input type="text" name="nuevoTipoIdentificacion" value="<?php echo $registro['Tipo_identificacion']; ?>"><br>

        <label for="nuevoNumeroDocumento">Nuevo Número de Documento:</label>
        <input type="text" name="nuevoNumeroDocumento" value="<?php echo $registro['Num_Doc']; ?>"><br><br>

        <label class="nom" for="nuevoPrimerNombre">Nuevo Primer Nombre:</label>
        <input type="text" name="nuevoPrimerNombre" value="<?php echo $registro['primNombre']; ?>"><br><br>

        <label class="nomb" for="nuevoSegundoNombre">Nuevo Segundo Nombre:</label>
        <input type="text" name="nuevoSegundoNombre" value="<?php echo $registro['segNombre']; ?>"><br><br>

        <label class="nom" for="nuevoPrimerApellido">Nuevo Primer Apellido:</label>
        <input type="text" name="nuevoPrimerApellido" value="<?php echo $registro['primApellido']; ?>"><br><br>

        <label class="apell" for="nuevoSegundoApellido">Nuevo Segundo Apellido:</label>
        <input type="text" name="nuevoSegundoApellido" value="<?php echo $registro['segApellido']; ?>"><br><br>

        <label class="nom" for="nuevoTipoPersona">Nuevo Tipo de Persona:</label>
        <input type="text" name="nuevoTipoPersona" value="<?php echo $registro['Tipo_persona']; ?>"><br><br>

        <label class="correo" for="nuevoCorreo">Nuevo Correo Electrónico:</label>
        <input type="email" name="nuevoCorreo" value="<?php echo $registro['Correo']; ?>"><br><br>

        <label for="nuevaContrasena">Digite Nueva Contraseña: </label>
        <input type="password" name="nuevaContrasena" value="<?php echo $registro['contrasena'];?>"><br><br>

        <button class="btbusca" type="submit" name="actualizar">Actualizar</button>
    </form><br><br>
</body>
</html>

