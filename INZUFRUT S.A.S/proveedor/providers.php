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
	<title>PROVEDORES</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
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
			<div class="full-width text-center NotificationArea-title tittles">Notificaciones <i
					class="zmdi zmdi-close btn-Notification"></i></div>
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
						<small>justo ahora</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-1">Notificación como no leída</div>
			</a>
			<a href="#" class="Notification" id="notifation-unread-2">
				<div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle"></i>
						<strong>Archivo subido</strong>
						<br>
						<small>justo ahora</small>
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
						<small>justo ahora</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-2">Notificación como no leída</div>
			</a>
			<a href="#" class="Notification" id="notifation-read-3">
				<div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle-o"></i>
						<strong>Eliminar carpeta</strong>
						<br>
						<small>ACEPTAR</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-3">Notificación como no leída</div>
			</a>
		</section>
	</section>
	<!-- navLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> INZUFRUT
			</div>
			<figure class="full-width navLateral-body-tittle-menu">
				<div>
					<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
				</div>
				<!-- <figcaption>
					<span>
						<?php echo $_SESSION['nombre']; ?><br>
						<small>Administrador</small>
					</span>					
				</figcaption> -->
			</figure>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="../products.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-washing-machine"></i>
							</div>
							<div class="navLateral-body-cr">
								PRODUCTOS
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="tabla_proveedores.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
							<div class="navLateral-body-cr">
								TABLA DE REGISTROS
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="../products.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-store"></i>
							</div>
							<div class="navLateral-body-cr">
								INVENTARIO
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
								AJUSTES
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
										OPCCIONES
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
				<div class="mdl-tooltip" for="btn-menu">Ocultar / Mostrar MENU</div>
				<nav class="navBar-options-list">
					<ul class="list-unstyle">
						<li class="btn-Notification" id="notifications">
							<i class="zmdi zmdi-notifications"></i>
							<div class="mdl-tooltip" for="notifications">Notificaciones</div>
						</li>
						<li class="btn-exit" id="btn-exit">
							<i class="zmdi zmdi-power"></i>
							<div class="mdl-tooltip" for="btn-exit">Cerrar Sesion</div>
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
						<li class="text-condensedLight noLink"><small>Nombre de usuario</small></li>
						<li class="noLink">
							<figure>
								<img src="https://tse1.mm.bing.net/th?id=OIP.cdMhukDrd3yxg27jeKt_2AHaFO&pid=Api&P=0&h=180"
									alt="Avatar"
									class="https://tse1.mm.bing.net/th?id=OIP.cdMhukDrd3yxg27jeKt_2AHaFO&pid=Api&P=0&h=180">
							</figure>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<section class="body">
			<header>
				<h1><img class="pabon" src="assets/img/icono.png" alt="icon"></a> Orden de Pedido</h1>
				<style>
					.stcuado{
						border-radius: 12px;
						width: 800px;
						height: 10px;
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
				</style>
			</header>
			<br>
			<br>
			<main class="Agregar">
    <form action="valid_proveedor.php" method="post">
        <label for="nombre_proveedor">Nombre del Proveedor:</label>
        <input type="text" class="stcuado" name="nombre_proveedor" required><br><br>

		<label class="tovar" for="tipo_identificacion">Tipo de Identificación:</label>
			<select id="tipo_iden" name="tipo_iden" required>
			<option value="cedula de ciudadania">Cédula de Ciudadanía</option>
			<option value="cedula de extranjera">Cédula Extranjera</option>
        </select><br><br>

        <label for="numero_identificacion">Número de Identificación:</label>
        <input type="text" class="stcuado" name="numero_identificacion" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" class="stcuado" name="direccion" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" class="stcuado" name="telefono" required><br>

        <label for="correo">Correo:</label>
        <input type="email" class="stcuado" name="correo" required><br>

        <label for="producto">Producto:</label>
        <input type="text" class="stcuado" name="producto" required><br>

        <input class="topar"  type="submit" value="Enviar Pedido">
    </form>
				</main>

		</section>
	</section>


</body>

</html>
