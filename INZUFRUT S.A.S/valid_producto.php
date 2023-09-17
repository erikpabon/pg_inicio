<?php

include 'conexion.php';

$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$estado = $_POST["estado"];
$descripcion = $_POST["descripcion"];

// Ahora, inserta en la tabla proveedores
$query = "INSERT INTO productos (Nom_producto, Cantidad_produc, Estado, Descrip_producto)
          VALUES ('$nombre', '$cantidad', '$estado', '$descripcion')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script>
            alert("Se ha completado el registro exitosamente");
            window.location = "tabla_producto.php";
          </script>';
} else {
    echo '<script>
            alert("Oops, algo ha salido mal con el registro");
            window.location = "products.php";
          </script>';
}

mysqli_close($conexion);

                

?>