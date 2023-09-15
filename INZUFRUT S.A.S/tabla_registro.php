<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Registro</title>
    <?php
include 'conexion.php';

?>
    <style>
          table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    border: 1px solid #fa9702;
    border-style: solid;
    background-color: #fafaf8;
    padding: 0.5rem;
    text-align: center;
  }

  th {
    background-color: #f2bb67;
  }
  .bt{
            border-radius: 10px;
            border-style: solid;
            border-color: orangered;
            margin-left: 600px;
            padding: 1vh;
            background-color: #FBA663;
            color: black;
            margin-top: 20px;
        }
        .Lista{
    border-radius: 12px;
    border-color: #f9c063;
    border-style:solid;
    background-color:#faf9f5;
    height: 500px;
}
h2{
    background-color: #faf9f6;
    color: #0a0a0a;
    text-align: center;
    padding: 1rem;
    font-size: 30px;
}
.pabon{
	width: 70px;
	float: left;
}
.busqueda{
    text-align:right;
    padding: 30px;
    
  }
.btbusca{
    border-style: solid;
    border-radius: 12px;
    background-color: rgb(254, 252, 251);
    border-color: rgb(255, 179, 0);
	
}
.btbusca:hover{
	background-color: rgb(251, 213, 155);
    color: black;
    text-decoration:solid;
}
.stcuadr{
	border-radius: 12px;
	height: 20px;
	width: 300px;
	border-color: #f9c063;
	border-style: solid;
}	
    </style>
</head>
<body>
<main class="Lista">
            <h2><img class="pabon" src="assets/img/icono.png" alt="icon"></a>Datos Registrados</h2><br>
    <form class="busqueda" method="post" action="buscar.php">
        <label for="terminoBusqueda">Término de Búsqueda:</label>
        <input class="stcuadr" type="text" name="terminoBusqueda" id="terminoBusqueda">
        <input class="btbusca" type="submit" value="Buscar">
    </form>
            <table>
                <tr>
                    <th>Tipo de Identificación</th>
                    <th>Número de Documento</th>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Tipo de Persona</th>
                    <th>Correo Electrónico</th>
                    <th>Acciones</th>
                </tr>
    
<?php
$user = "SELECT * FROM persona";
$result = mysqli_query($conexion, $user);
while($ejec = mysqli_fetch_array($result)){
?>

<tr>
<td><?php echo $ejec ['Tipo_identificacion']?></td>
<td><?php echo $ejec ['Num_Doc']?></td>
<td><?php echo $ejec ['primNombre']?></td>
<td><?php echo $ejec ['segNombre']?></td>
<td><?php echo $ejec ['primApellido']?></td>
<td><?php echo $ejec ['segApellido']?></td>
<td><?php echo $ejec ['Correo']?></td>  
<td><?php echo $ejec ['Tipo_persona']?></td> 
<td>
        <form action="eliminar_registro.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $ejec['Num_Doc']; ?>">
            <button class="btbusca" type="submit" class="btn-eliminar" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?')">Eliminar</button>
        </form>
        <br>
        <form action="actualiza_registro.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $ejec['Num_Doc']; ?>">
                <button class="btbusca" type="submit" class="btn-actualizar">Modificar</button>
         </form>
    </td>
</tr>

<?php
}
?>
</table>
<br>
<br>
<br>
<br>

<a class="bt" href="colaborador.php">Regresar</a>
</body>
</html>

