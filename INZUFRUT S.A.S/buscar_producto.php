<?php
include 'conexion.php';

$terminoBusqueda = $_POST['terminoBusqueda'];

// Realizar una consulta a la base de datos para buscar el término en la tabla deseada
// Modifica esta consulta según tus requisitos
$query = "SELECT * FROM productos WHERE Nom_producto  LIKE '%$terminoBusqueda%' OR Estado LIKE '%$terminoBusqueda%'";

$result = $conexion->query($query);

if ($result->num_rows > 0) {
    // Build a table with the search results
    echo "<table>";
    echo "<tr>";
    echo "<th>Nombre del producto</th>";
    echo "<th>Cantidad</th>";
    echo "<th>Estado</th>";
    echo "<th>Descripcion</th>";    
    echo "</tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Nom_producto'] . "</td>";        
        echo "<td>" . $row['Cantidad_produc'] . "</td>";
        echo "<td>" . $row['Estado'] . "</td>";
        echo "<td>" . $row['Descrip_producto'] . "</td>";
        echo "<td>";
        echo "<form action='eliminar_registro.php' method='POST'>";
        echo "<input type='hidden' name='id' value='" . $row['Num_Doc'] . "'>";
        echo "<button class='btbusca' type='submit' class='btn-eliminar' onclick=\"return confirm('¿Estás seguro de que quieres eliminar este registro?')\">Eliminar</button>";
        echo "</form>";
        echo "<br>";
        echo "<form action='actualizar_regis_prov.php' method='POST'>";
        echo "<input type='hidden' name='id' value='" . $row['Num_Doc'] . "'>";
        echo "<button class='btbusca' type='submit' class='btn-actualizar'>Modificar</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    } else {
    echo "No se encontraron resultados.";
    }
?>