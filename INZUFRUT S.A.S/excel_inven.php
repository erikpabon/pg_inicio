<?php
header("Content-Type: application/xls");

header("Content-Disposition: attachment; filename= archivo.xls");
?>
<table id="tablaDatos">
        <thead>
            <tr>
                <th>Nombre del Producto</th>
                <th>Cantidad</th>
                <th>lote</th>
                <th>Fecha de Entra</th>
                <th>Fecha de Salida</th>
                <th>Descripcion</th>
            </tr>
            <?php
            include'conexion.php';
        $user = "SELECT * FROM inventario";
        $result = mysqli_query($conexion, $user);
        while($ejec = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $ejec ['Nombre_producto']?></td>
            <td><?php echo $ejec ['cantidad']?></td>
            <td><?php echo $ejec ['lote']?></td>
            <td><?php echo $ejec ['fecha_entrada']?></td> 
            <td><?php echo $ejec ['fecha_salida']?></td>
            <td><?php echo $ejec ['descripcion']?></td>
        </tr>
        <?php
        }
        ?>
    </table>