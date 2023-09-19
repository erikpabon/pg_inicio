<!-- 
* Copyright 2018 Carlos Eduardo Alfaro Orellana
  https://www.youtube.com/c/CarlosAlfaro007
-->
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/img/icono.png" rel="icon">
	<title>producto</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
	</script>
	<script src="js/material.min.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/main.js"></script>
</head>

<body>
	<!-- Notifications area -->
	<section class="full-width container-notifications">
		<div class="full-width container-notifications-bg btn-Notification"></div>
		<section class="NotificationArea">
			<div class="full-width text-center NotificationArea-title tittles">Notificaciones <i class="zmdi zmdi-close btn-Notification"></i></div>
			<a href="#" class="Notification" id="notifation-unread-1">
				<div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle"></i>
						<strong>Registro de nuevo usuario</strong>
						<br>
						<small>Justo ahora</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-1">Notificación como no leída</div>
			</a>
			<a href="#" class="Notification" id="notifation-read-1">
				<div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle-o"></i>
						<strong>Nuevas actualizaciones</strong>
						<br>
						<small>Hace 30 minutos</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-1">Notificación como lectura</div>
			</a>
			<a href="#" class="Notification" id="notifation-unread-2">
				<div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle"></i>
						<strong>Archivo subido</strong>
						<br>
						<small>Hace 31 minutos</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-2">Notificación como no leída</div>
			</a>
			<a href="#" class="Notification" id="notifation-read-2">
				<div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle-o"></i>
						<strong>Nuevo correo</strong>
						<br>
						<small>Hace 37 minutos</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-2">Notificación como leida</div>
			</a>
			<a href="#" class="Notification" id="notifation-read-3">
				<div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle-o"></i>
						<strong>Eliminar carpeta</strong>
						<br>
						<small>Hace 1 hora</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-3">Notificación como leida</div>
			</a>
		</section>
	</section>
	<!-- navLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> Producto
			</div>
			<figure class="full-width navLateral-body-tittle-menu">
				<div>
					<img src="https://cdn-icons-png.flaticon.com/512/1514/1514469.png" alt="Avatar" class="img-responsive">
				</div>
			</figure>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="inventory.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-washing-machine"></i>
							</div>
							<div class="navLateral-body-cr">
							     INICIO
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="tabla_producto.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
							<div class="navLateral-body-cr">
								REGISTROS DE PRODUCTOS
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-wrench"></i>
							</div>
							<div class="navLateral-body-cr">
								Ajustes
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="#!" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-widgets"></i>
									</div>
									<div class="navLateral-body-cr">
										Opcion
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="#!" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-widgets"></i>
									</div>
									<div class="navLateral-body-cr">
										Opcion
									</div>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<!-- navBar -->
		<div class="full-width navBar">
			<div class="full-width navBar-options">
				<i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>
				<div class="mdl-tooltip" for="btn-menu">Ocultar Menu/ Mostrar Menu</div>
				<nav class="navBar-options-list">
					<ul class="list-unstyle">
						<li class="btn-Notification" id="notifications">
							<i class="zmdi zmdi-notifications"></i>
							<div class="mdl-tooltip" for="notifications">Notificaciones</div>
						</li>
						<li class="btn-exit" id="btn-exit">
							<i class="zmdi zmdi-power"></i>
							<div class="mdl-tooltip" for="btn-exit">Cerrar Sesión</div>
						</li>
						<script>
							// Función para cerrar la sesión y redirigir a index.php
							function cerrarSesion() {
								// Realiza una petición al servidor para cerrar la sesión (puedes usar AJAX o redireccionar)
								// En PHP, puedes usar session_destroy() para eliminar la sesión del servidor.
								// Después, redirige al usuario a index.php.
								window.location.href = 'index.php';
							}

							// Agrega un evento de clic al botón de "Cerrar Sesión"
							document.getElementById('btn-exit').addEventListener('click', cerrarSesion);
						</script>
						<li class="text-condensedLight noLink"><small>nombre de usuario</small></li>
						<li class="noLink">
							<figure>
								<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
							</figure>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<style>
			/* Estilos para el formulario */
form {
    max-width: 400px;
    margin: 0 auto;
    padding: 40px;
    border-radius: 10px;
	border-color: orange;
	border-style: solid;
    background-color: #f9f9f9;
}
form input[type="text"], form input[type="email"], form input[type="number"], textarea {
  border-style: solid;
  width: 100%;
  padding: 0.5rem;
  margin-bottom: 1rem;
  position: relative;
  border-color: orange;
  border-radius: 10px;
}
/* Estilos para las etiquetas */
label {
    font-weight: bold;
    display: block;
}
select{
	border-style: solid;
	border-radius: 10px;
	border-color: orange;
	width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    font-size: 16px;
}

/* Estilos para los campos de entrada y el área de texto */
.addProduct {
	border-style: solid;
	border-radius: 10px;
	border-color: orange;
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    font-size: 16px;
}

/* Estilos para el botón */
.addProduct[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    font-size: 18px;
    cursor: pointer;
}

.addProduct[type="submit"]:hover {
    background-color: rgb(251, 213, 155);
    color: black;
    text-decoration: solid;
}

/* Alineación del botón */
.addProduct[type="submit"] {
    background-color: rgb(254, 252, 251); /* Cambiar el fondo del botón a naranja */
    color: black;
    background-color: rgb(254, 252, 251);
    border-color: rgb(255, 179, 0);
    padding: 10px 20px;
    border-radius: 10px;
	border-style: solid;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
}


/* Espaciado adicional entre elementos */
br {
    clear: both;
}

		</style>
		<section class="body">
			<header>
				<h1><img class="pabon" src="assets/img/icono.png" alt="icon"></a> REGISTRO DE PRODUCTO</h1>
			</header>

			<main class="Agregar">
				<form action="valid_producto.php" method="POST">
					<label for="nombre">Nombre del Producto:</label>
					<input type="text" id="nombre" name="nombre" required class="addProduct"><br><br>


					<label for="cantidad">cantidad:</label>
					<input type="number" id="cantidad" name="cantidad" min="1" required class="addProduct"><br><br>

					<label for="estado">Estado:</label>
					<select id="estado" name="estado" required>
						<option value="fresco">Fresco</option>
						<option value="maduro">Maduro</option>
						<option value="podrido">Podrido</option>
					</select><br><br>

					<label for="descripcion">Descripción:</label>
					<textarea id="descripcion" name="descripcion" rows="4" cols="50" required class="addProduct"></textarea><br><br>


					<button type="submit" class="addProduct">Registrar Producto</button>
				</form>

			</main>
		</section>
</body>

</html>