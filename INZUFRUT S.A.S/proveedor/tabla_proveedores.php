<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="assets/img/icono.png" rel="icon">    
    <title>TABLA DE PROVEEDORES</title>
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
    </style>
</head>
<body>
<main class="Lista" style="height: 100%; overflow: auto;">
    <h2><img class="pabon" src="assets/img/icono.png" alt="icon"></a>Datos Registrados</h2><br>
    <form class="busqueda" method="post">
        <label for="terminoBusqueda">Término de Búsqueda:</label>
        <input class="stcuadr" type="text" name="terminoBusqueda" id="terminoBusqueda">
    </form>
    <table id="tablaDatos">
        <tr>
            <th>Tipo de Identificación</th>
            <th>Número de Documento</th>
            <th>Nombre del proveedor</th>
            <th>Direcciones</th>
            <th>Correo Electrónico</th>
            <th>Número de celular</th>
            <th>Nombre de producto</th>
            <th>Acciones</th>
        </tr>
        <?php
        $user = "SELECT * FROM proveedores";
        $result = mysqli_query($conexion, $user);
        while($ejec = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $ejec ['tipo_identificacion']?></td>
            <td><?php echo $ejec ['Num_Doc']?></td>
            <td><?php echo $ejec ['Nombre_prov']?></td>
            <td><?php echo $ejec ['Direccion']?></td>
            <td><?php echo $ejec ['correo']?></td>
            <td><?php echo $ejec ['celular']?></td>
            <td><?php echo $ejec ['producto']?></td>
            <td>
                <form action="eliminar_prov.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $ejec['Num_Doc']; ?>">
                    <button class="btbusca" type="submit" class="btn-eliminar" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?')">Eliminar</button>
                </form>
                <br>
                <form action="actualizar_regis_prov.php" method="POST">
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
    <a class="bt" href="providers.php">Regresar</a>
    <br>
    <br>
</main>
<!-- <div id="resultadoBusqueda" style="display: none;"></div> -->
<script>
    
$(document).ready(function () {
    $("#terminoBusqueda").on("keyup", function () {
        var termino = $(this).val();

        if (termino.length >= 1) {
            // Realiza una solicitud AJAX para buscar coincidencias
            $.ajax({
                url: "buscar_prov.php", // Ruta del archivo PHP de búsqueda
                method: "POST",
                data: { terminoBusqueda: termino },
                success: function (data) {
                    // Oculta la tabla de proveedores y muestra los resultados de la búsqueda
                    $("#resultadoBusqueda").hide();
                    $("#tablaDatos").html(data).show();
                }
            });
        } else {
            // Muestra la tabla de proveedores y oculta los resultados si el término es demasiado corto
            $("#resultadoBusqueda").hide();
            $("#tablaDatos").show();
        }
    });
});
</script>
</body>
</html>
