<?php
header("Content-Type: application/xls");

header("Content-Disposition: attachment; filename= archivo.xls");
?>
            <table>
                <tr>
                    <th>Tipo de Identificacion</th>
                    <th>Numero de Documento</th>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Tipo de Persona</th>
                    <th>Correo Electronico</th>
                </tr>
    
<?php
include'conexion.php';
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
<td><?php echo $ejec ['Tipo_persona']?></td> 
<td><?php echo $ejec ['Correo']?></td> 
</tr>

<?php
}
?>
</table>