<?php
include 'conexion.php';

$terminoBusqueda = $_POST['terminoBusqueda'];

// Realiza una consulta a la base de datos para buscar el término en la tabla deseada
// Modifica esta consulta según tus requisitos
$query = "SELECT * FROM proveedores WHERE tipo_identificacion LIKE '%$terminoBusqueda%' OR Num_Doc LIKE '%$terminoBusqueda%' OR Nombre_prov LIKE '%$terminoBusqueda%' OR Direccion LIKE '%$terminoBusqueda%' OR correo LIKE '%$terminoBusqueda%' OR celular LIKE '%$terminoBusqueda%' OR producto LIKE '%$terminoBusqueda%'";

$result = $conexion->query($query);

if ($result->num_rows > 0) {
    // Construye una tabla con los resultados de la búsqueda
    echo "<table>";
    echo "<tr>";
    echo "<th>Tipo de Identificación</th>";
    echo "<th>Número de Documento</th>";
    echo "<th>Nombre del proveedor</th>";
    echo "<th>Direcciones</th>";
    echo "<th>Correo Electrónico</th>";
    echo "<th>Número de celular</th>";
    echo "<th>Nombre de producto</th>";
    echo "<th>Acciones</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['tipo_identificacion'] . "</td>";
        echo "<td>" . $row['Num_Doc'] . "</td>";
        echo "<td>" . $row['Nombre_prov'] . "</td>";
        echo "<td>" . $row['Direccion'] . "</td>";
        echo "<td>" . $row['correo'] . "</td>";
        echo "<td>" . $row['celular'] . "</td>";
        echo "<td>" . $row['producto'] . "</td>";
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

