<?php

include 'conexion.php';

$tip_iden = $_POST ['tipo_iden'];
$numer = $_POST ['numero_identificacion'];
$nom = $_POST ['nombre_proveedor'];
$direc = $_POST ['direccion'];
$correo = $_POST ['correo'];
$celu = $_POST ['telefono'];
$produc = $_POST ['producto'];

// Comprobar si el valor existe en la tabla persona
$consulta_persona_existente = "SELECT * FROM persona WHERE Num_Doc = '$numer'";
$persona_existente = mysqli_query($conexion, $consulta_persona_existente);

if (mysqli_num_rows($persona_existente) == 0) {
    // Si el valor no existe, insértalo en persona primero
    $insercion_persona = "INSERT INTO persona (Num_Doc) VALUES ('$numer')";
    mysqli_query($conexion, $insercion_persona);
}

// Ahora, inserta en la tabla proveedores
$query = "INSERT INTO proveedores (tipo_identificacion, Num_Doc, Nombre_prov, Direccion, correo, celular, producto)
          VALUES ('$tip_iden', '$numer', '$nom', '$direc', '$correo', '$celu', '$produc')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script>
            alert("Se ha completado el registro exitosamente");
            window.location = "tabla_proveedores.php";
          </script>';
} else {
    echo '<script>
            alert("Oops, algo ha salido mal con el registro");
            window.location = "providers.php";
          </script>';
}

mysqli_close($conexion);

                

?>