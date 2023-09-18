<?php

include ('../conexion.php');

$numer = $_POST ['numero_documento'];
$tip_iden = $_POST ['tipo_iden'];
$prim_nom = $_POST ['primer_nombre'];
$seg_nom = $_POST ['segundo_nombre'];
$prim_apell = $_POST ['primer_apellido'];
$seg_apell = $_POST ['segundo_apellido'];
$tip_per = $_POST ['tipo_persona'];
$correo = $_POST ['correo_electronico'];
$contra = $_POST ['cntrasena'];

$query = "INSERT INTO persona (Num_Doc, tipo_identificacion, primNombre, segNombre, primApellido, segApellido, correo, contrasena, tipo_persona)
             VALUES ('$numer', '$tip_iden', '$prim_nom', '$seg_nom', '$prim_apell', '$seg_apell', '$correo', '$contra', '$tip_per')";

$verifi = mysqli_query($conexion, "SELECT * FROM persona WHERE correo = '$correo'");

   if(mysqli_num_rows($verifi) > 0){
      echo '<script>
             alert ("Este correo electronico ya se encuentra registrado");
             window.location = "colaborador.php"    
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
           window.location = "colaborador.php";      
      </script>';
   }

   

   mysqli_close($conexion); 
                

?>
