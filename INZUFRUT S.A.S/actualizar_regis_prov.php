
<?php
include 'conexion.php';

// Verificar si se ha enviado el ID del registro a actualizar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Consulta para obtener los datos del registro actual en la tabla proveedores
    $query = "SELECT * FROM proveedores WHERE Num_Doc = '$id'";
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
        echo "<script>
        alert('Los datos se han actualizado correctamente');
        window.location = 'tabla_proveedores.php';
        </script>";
    } else {
        echo "<script>
        alert('No se pudo completar la actualización de datos');
        window.location = 'tabla_proveedores.php';
        </script>" . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="assets/img/icono.png" rel="icon">
	<title>ACTUALIZAR PROVEEDORES</title>
 <style>
    /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"], input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    font-size: 16px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Estilos específicos para el formulario de actualización */
form {
    margin-top: 20px;
}

/* Agrega estilos adicionales según tus necesidades */

 </style>
</head>
<body>
    <h2>Actualizar Proveedor</h2>
    <form action="guardar_modif_prov.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nuevoNumDoc">Nuevo Num. de Documento:</label>
        <input type="text" name="nuevoNumDoc" value="<?php echo $registro['Num_Doc']; ?>"><br>

        <label for="nuevoNombreProv">Nuevo Nombre del Proveedor:</label>
        <input type="text" name="nuevoNombreProv" value="<?php echo $registro['Nombre_prov']; ?>"><br>

        <label for="nuevaDireccion">Nueva Dirección:</label>
        <input type="text" name="nuevaDireccion" value="<?php echo $registro['Direccion']; ?>"><br>

        <label for="nuevoCorreo">Nuevo Correo Electrónico:</label>
        <input type="text" name="nuevoCorreo" value="<?php echo $registro['correo']; ?>"><br>

        <label for="nuevoCelular">Nuevo Número de Celular:</label>
        <input type="text" name="nuevoCelular" value="<?php echo $registro['celular']; ?>"><br>

        <label for="nuevoProducto">Nuevo Producto:</label>
        <input type="text" name="nuevoProducto" value="<?php echo $registro['producto']; ?>"><br>

        <button type="submit" name="actualizar">Actualizar</button>
    </form>
</body>
</html>
