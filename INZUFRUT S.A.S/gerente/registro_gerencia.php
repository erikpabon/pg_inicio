<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/img/icono.png" rel="icon">
    <title>REGISTRO </title>
    <style>
        .pabon{
	width: 80px;
	float: left;
}
.body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    border-color: #fa9702;
  }
.Agregar{
    border-radius: 12px;
    border-color: #f9c063;
    border-style:solid;
    background-color:#f6f6f4;	
	align-content: center;
	padding-right: 5%;
    
}
.stcuadro{
	border-radius: 12px;
	width: 920px;
	height: 20px;
	border-color: #f9c063;
	border-style: solid;	
}
.contra{
  border-radius: 12px;
	width: 500px;
	height: 20px;
	border-color: #f9c063;
	border-style: solid;
}
.stcuadr{
	border-radius: 12px;
	height: 10px;
	width: 300px;
	border-color: #f9c063;
	border-style: solid;	
}

  header {
    background-color: #faf9f6;
    color: #0a0a0a;
    border-radius: 12px;
    border-color: #f9c063;
    border-style: solid;
    text-align: center;
    padding: 1rem;
    font-size: 30px;
	
    
  }

  main {
    padding: 2rem;
  }

  
h2{
	font-size: 40px;
}
  form input[type="text"],
  form input[type="email"],
  form input[type="number"],
  textarea {	
	border-style: solid;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
	position: relative; /* Necesario para que el recorte funcione */
  }
  .bt{
    background-color: #f2a50b;
    color: #0d0d0d;
    border: none;
    border-color: #fa9702;
    border-radius: 12px;
    border-style: solid;
    padding: 0.5rem 1rem;
    cursor: pointer;
	background-color: rgb(240, 237, 229);
    margin-left: 60px;
  }
.bt:hover{
    background-color: rgb(251, 213, 155);
    color: black;
    text-decoration:solid;
}
 .topar{
    background-color: #f2a50b;
    color: #0d0d0d;
    border: none;
    border-color: #fa9702;
    border-radius: 12px;
    border-style: solid;
    padding: 0.5rem 1rem;
    cursor: pointer;
	background-color: rgb(240, 237, 229);
	
  }
  .topar:hover{
	background-color: rgb(251, 213, 155);
    color: black;
    text-decoration:solid;
  }select{
    border-radius: 12px;
	width: 200px;
	height: 30px;
	border-color: #f9c063;
	border-style: solid;
  }
    </style>
</head>
<body>
<section class="body">
			<header>
		<h1><img class="pabon" src="assets/img/icono.png" alt="icon"></a>Formulario de Registro</h1>
		</header>
		<main class="Agregar">
        <h2>Datos de Registro</h2>
        <form action="valid_registro.php" method="POST">
		<label class="tovar" for="tipo_identificacion">Tipo de Identificación:</label>
			<select id="tipo_iden" name="tipo_iden" required>
			<option value="cedula_ciudadania">Cédula de Ciudadanía</option>
			<option value="cedula_extranjera">Cédula Extranjera</option>
        </select><br>
        
        <label for="numero_documento">Número de Documento:</label><br>
        <input class="stcuadro" type="number" id="numero_documento" name="numero_documento" required><br>
        
        <label for="primer_nombre">Primer Nombre:</label><br>
        <input class="stcuadro" type="text" id="primer_nombre" name="primer_nombre" required><br>
        
        <label for="segundo_nombre">Segundo Nombre:</label><br>
        <input class="stcuadro" type="text" id="segundo_nombre" name="segundo_nombre"><br>
        
        <label for="primer_apellido">Primer Apellido:</label><br>
        <input class="stcuadro" type="text" id="primer_apellido" name="primer_apellido" required><br>
        
        <label for="segundo_apellido">Segundo Apellido:</label><br>
        <input class="stcuadro" type="text" id="segundo_apellido" name="segundo_apellido"><br>
        
        <label class="tovar" for="tipo_persona">Tipo de Persona:</label>
        <select id="tipo_persona" name="tipo_persona" required>
            <option value="gerente">Gerente</option>
            <option value="colaborador">Colaborador</option>
        </select><br><br>
        
        <label for="correo_electronico">Correo Electrónico:</label><br>
        <input class="stcuadro" type="email" id="correo_electronico" name="correo_electronico" required><br>

        <label for="contrasena">Contraseña:</label>
        <input class="contra" type="password"id="contrasena" name="contrasena" required><br><br>

        <input class="topar" type="submit" value="Registrar">
        <a class="bt" href="home.php">Regresar</a>
    </form>
    
</main>

    
	</section>
</body>
</html>