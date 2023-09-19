<?php
include 'conexion.php';

// Verificar si se ha enviado el ID del registro a actualizar
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Consulta para obtener los datos del registro actual
    $query = "SELECT * FROM inventario WHERE Nombre_producto = '$id'";
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
              descripcion = '$nuevaDescripcion',
              WHERE Nombre_producto = '$id'";
    
    if (mysqli_query($conexion, $user)) {
        echo "<script>
        alert('Los datos se han actualizado correctamente');
        window.location = 'tabla_producto.php';
        </script>" ;
    } else {
        echo "<script>
        alert('No se pudo completar la actualizacion de datos');
        window.location = 'tabla_producto.php';
        </script>" . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Registro</title>
    <style>
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

input[type="text"]{
	border-radius: 10px;
	width: 300px;
	height: 30px;
	border-color: #f9c063;
	border-style: solid;
}
input[type="number"] {
    border-radius: 10px;
	width: 300px;
	height: 30px;
	border-color: #f9c063;
	border-style: solid; 
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
padding-left: 500px;
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
.descrip{
    border-radius: 10px;
	width: 300px;
	height: 30px;
	border-color: #f9c063;
	border-style: solid;
}
select{
    border-radius: 10px;
	width: 300px;
	height: 30px;
	border-color: #f9c063;
	border-style: solid;
}


    </style>
</head>
<body>
    <header>
    <h2><img class="pabon" src="assets/img/icono.png" alt="icon">MODIFICAR PRODUCTO</h2><br>
    </header>
    <br>
    <form action="guardar_inven.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nuevoNombre">Nuevo Nombre de Producto:</label>
        <input type="text" name="nuevoNombre" value="<?php echo $registro['Nombre_producto']; ?>"><br><br>

        <label for="nuevaCantidad">Nueva cantidad:</label>
        <input type="number" name="nuevaCantidad" value="<?php echo $registro['cantidad']; ?>"><br><br>

        <label for="nuevoTipoestado">Nuevo lote:</label>
        <input type="text" name="nuevolote" value="<?php echo $registro['lote']; ?>"><br><br>

        <label for="nuevoTipoestado">Nueva Fecha de Ingreso:</label>
        <input type="text" name="nuevafecha_ingre" value="<?php echo $registro['fecha_entrada']; ?>"><br><br>

        <label for="nuevoTipoestado">Nueva Fecha de Salida:</label>
        <input type="text" name="nuevafecha_sali" value="<?php echo $registro['fecha_salida']; ?>"><br><br>

        <label for="nuevaDescripcion">Nueva Descripción:</label>
        <input type="text" name="nuevaDescripcion" value="<?php echo $registro['descripcion']; ?>"><br><br>

        <button class="btbusca" type="submit" name="actualizar">Actualizar</button><br>
    </form><br>
</body>
</html>
