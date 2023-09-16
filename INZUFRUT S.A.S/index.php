<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="INZUFRUT S.A.S" content="width=device-width, initial-scale=1">
	<link href="assets/img/icono.png" rel="icon">
	<title>ACCESO</title>
	<link href="assets/img/icono.png" rel="icon">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
	<style>
	.logo {
  font-size: 30px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
}
 .logo a {
  color: #fff;
}
 .logo img {
  max-height: 40px;
}

	</style>
</head>
<body><h1 class="logo"><a href="../inicio_pag.php"><img src="https://cdn-icons-png.flaticon.com/128/10010/10010114.png" alt="icon"></a></h1>
	<div class="login-wrap cover">
		<div class="container-login">
			<p class="text-center" style="font-size: 80px;">
				<i class="zmdi zmdi-account-circle"></i>
			</p>
			<p class="text-center text-condensedLight">Ingresa con tu cuenta</p>
			<form action="login_usuario.php" method="POST">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" name="correo" type="texto" id="correo">
				    <label class="mdl-textfield__label" for="userName">Nombre Usuario</label>
				</div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				    <input class="mdl-textfield__input" name="contrasena" type="password" id="pass">
				    <label class="mdl-textfield__label" for="pass">Contraseña</label>
				</div>
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color:  #ff9b04; margin: 0 auto; display: block;">
					INGRESAR
				</button>
			</form>
		</div>
	</div>
</body>
</html>
