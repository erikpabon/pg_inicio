<?php

include 'conexion.php';

$numer = $_POST ['numero_documento'];
$tip_iden = $_POST ['tipo_iden'];
$prim_nom = $_POST ['primer_nombre'];
$seg_nom = $_POST ['segundo_nombre'];
$prim_apell = $_POST ['primer_apellido'];
$seg_apell = $_POST ['segundo_apellido'];
$correo = $_POST ['correo_electronico'];
$contra = $_POST ['contrasena'];
$tip_per = $_POST ['tipo_persona'];

$query = "INSERT INTO persona (Num_Doc, Tipo_identificacion, primNombre, segNombre, primApellido, segApellido, Correo, contrasena, Tipo_persona)
             VALUES ('$numer', '$tip_iden', '$prim_nom', '$seg_nom', '$prim_apell', '$seg_apell', '$correo', '$contra', '$tip_per')";

$verifi = mysqli_query($conexion, "SELECT * FROM persona WHERE correo = '$correo'");

   if(mysqli_num_rows($verifi) > 0){
      echo '<script>
             alert ("Este correo electronico ya se encuentra registrado");
             window.location = "registro_gerencia.php"    
      </script>';

      exit();
   }
      $ejecutar = mysqli_query($conexion, $query);         
   
   
   if ($ejecutar){
      echo '<script>
            alert("Se ha completado el registro exitosamente");
            window.location = "tabla_registro.php";
      </script>';
   }

   else{
      echo '<script>
           alert("Oops algo ha salido mal con el registro");
           window.location = "registro_gerencia.php";      
      </script>';
   }

   

   mysqli_close($conexion); 
                

?>
