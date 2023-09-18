<?php
header("Content-Type: application/xls");

header("Content-Disposition: attachment; filename= archivo.xls");
?>

<table id="tablaDatos">
        <thead>
            <tr>
                <th>Nombre del Producto</th>
                <th>Cantidad</th>
                <th>Estado</th>
                <th>Descripcion</th>
            </tr>
            <?php 
            include'conexion.php';
        $user = "SELECT * FROM productos";
        $result = mysqli_query($conexion, $user);
        while($ejec = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $ejec ['Nom_producto']?></td>
            <td><?php echo $ejec ['Cantidad_produc']?></td>
            <td><?php echo $ejec ['Estado']?></td> 
            <td><?php echo $ejec ['Descrip_producto']?></td>
        </tr>
        <?php
        }
        ?>
    </table>