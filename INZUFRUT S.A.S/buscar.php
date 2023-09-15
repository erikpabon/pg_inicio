<?php
include 'conexion.php';

$terminoBusqueda = $_POST['terminoBusqueda'];

// Realizar una consulta a la base de datos para buscar el término en la tabla deseada
// Modifica esta consulta según tus requisitos
$query = "SELECT * FROM Persona WHERE primNombre LIKE '%$terminoBusqueda%' OR correo LIKE '%$terminoBusqueda%'";

$result = $conexion->query($query);

if ($result->num_rows > 0) {
    // Mostrar los resultados de la búsqueda
    while ($row = $result->fetch_assoc()) {
        echo "Num_Doc: " . $row['Num_Doc'] . "<br>";
        echo "Nombre: " . $row['primNombre'] . " " . $row['segNombre'] . " " . $row['primApellido'] . " " . $row['segApellido'] . "<br>";
        echo "Correo: " . $row['Correo'] . "<br>";
        echo "Tipo Persona: " . $row['Tipo_persona'] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No se encontraron resultados.";
}
?>
