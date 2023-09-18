<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
<link href="assets/img/icono.png" rel="icon">
	<title>INZUFRUT</title>
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

        .bt {
            border-radius: 10px;
            border-style: solid;
            border-color: orangered;
            margin-left: 600px;
            padding: 1vh;
            background-color: #FBA663;
            color: black;
            margin-top: 20px;
        }

        .Lista {
            border-radius: 12px;
            border-color: #f9c063;
            border-style: solid;
            background-color: #faf9f5;
            height: 500px;
        }

        h2 {
            background-color: #faf9f6;
            color: #0a0a0a;
            text-align: center;
            padding: 1rem;
            font-size: 30px;
        }

        .pabon {
            width: 70px;
            float: left;
        }

        .busqueda {
            text-align: right;
            padding: 30px;
        }

        .btbusca {
            border-style: solid;
            border-radius: 12px;
            background-color: rgb(254, 252, 251);
            border-color: rgb(255, 179, 0);
        }

        .btbusca:hover {
            background-color: rgb(251, 213, 155);
            color: black;
            text-decoration: solid;
        }

        .stcuadr {
            border-radius: 12px;
            height: 20px;
            width: 300px;
            border-color: #f9c063;
            border-style: solid;
        }
        .esportar{
   
        }
    </style>
</head>
<body>
<main class="Lista">
    <h2><img class="pabon" src="assets/img/icono.png" alt="icon"></a>Datos Registrados</h2><br>
    <form class="busqueda" method="post">
        <label for="terminoBusqueda">Término de Búsqueda:</label>
        <input class="stcuadr" type="text" name="terminoBusqueda" id="terminoBusqueda">
    </form>
    <table id="tablaDatos">
        <thead>
            <tr>
                <th>Nombre del Producto</th>
                <th>Cantidad</th>
                <th>Estado</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
            <?php
        $user = "SELECT * FROM productos";
        $result = mysqli_query($conexion, $user);
        while($ejec = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $ejec ['Nom_producto']?></td>
            <td><?php echo $ejec ['Cantidad_produc']?></td>
            <td><?php echo $ejec ['Estado']?></td> 
            <td><?php echo $ejec ['Descrip_producto']?></td>
            <td>
            <!-- Agregar el botón de eliminar con funcionalidad -->
            <form method="post" action="eliminar_producto.php">
                <input type="hidden" name="producto_id" value="<?php echo $ejec['id_producto']; ?>">
                <button class="btbusca" type="submit">Eliminar</button>
            </form>
            <br>
            <form method="post" action="actualizar_producto.php">
                <input type="hidden" name="id" value="<?php echo $ejec['Nom_producto']; ?>">
                <button class="btbusca" type="submit">Modificar</button>
            </form><br>
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
    <a class="bt" href="products.php">Regresar</a>
    <form class="exportar" method="post" action="exportar_excel.php">
        <button class="bt" type="submit" name="exportar_excel">Exportar</button>
    </form>
</main>
</body>
</html>
