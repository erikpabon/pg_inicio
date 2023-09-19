<?php

include 'conexion.php';

$nombre = $_POST["nom_productos"];
$cantidad = $_POST["cantidad"];
$lote = $_POST["lote"];
$fe_ingre = $_POST["fecha_ingreso"];
$fe_sali = $_POST["fecha_salida"];
$descripcion = $_POST["descripcion"];

// Ahora, inserta en la tabla proveedores
$query = "INSERT INTO inventario (Nombre_producto, cantidad, lote, fecha_entrada, fecha_salida, descripcion)
          VALUES ('$nombre', '$cantidad', '$lote', '$fe_ingre', '$fe_sali', '$descripcion')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script>
            alert("Se ha completado el registro exitosamente");
            window.location = "tabla_inven.php";
          </script>';
} else {
    echo '<script>
            alert("Oops, algo ha salido mal con el registro");
            window.location = "inventory.php";
          </script>';
}

mysqli_close($conexion);

                

?>