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
	<title>Inventario</title>
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
						<small>En este momento</small>
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
						<small>hace 30 minutos</small>
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
						<small>hace 31 minutos</small>
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
						<small>hace 37 minutos</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-2">Notificación como lectura</div>
			</a>
			<a href="#" class="Notification" id="notifation-read-3">
				<div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle-o"></i>
						<strong>Eliminar la carpeta</strong>
						<br>
						<small>hace 1 hora</small>
					</p>
				</div>
				<div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-3">Notificación como lectura</div>
			</a>
		</section>
	</section>
	<!-- navLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> Inventario
			</div>
			<figure class="full-width navLateral-body-tittle-menu">
				<div>
					<img src="https://tse2.mm.bing.net/th?id=OIP.IMdgzsLntbNlCn4vOkas1gHaE8&pid=Api&P=0&h=180"
						alt="Avatar"
						class="https://tse2.mm.bing.net/th?id=OIP.IMdgzsLntbNlCn4vOkas1gHaE8&pid=Api&P=0&h=180">
				</div>
				<figcaption>
					<span>
						LIBARDO MALAVER PARRA<br>
						<small>GERENTE</small>
					</span>
				</figcaption>
			</figure>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="home.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-dashboard"></i>
							</div>
							<div class="navLateral-body-cr">
								INICIO
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="providers.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-washing-machine"></i>
							</div>
							<div class="navLateral-body-cr">
								PROVEEDORES
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="products.php" class="full-width">
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

					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="inventory.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-store"></i>
							</div>
							<div class="navLateral-body-cr">
								INVENTARIOS
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
										OPCIÓN

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
							<div class="mdl-tooltip" for="btn-exit">Cerrar sesión</div>
						</li>
						<li class="text-condensedLight noLink"><small>Nombre de Unuario</small></li>
						<li class="noLink">
							<figure>
								<img src="assets/img/avatar-male.png" alt="Perfil" class="img-responsive">
							</figure>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="full-width divider-menu-h"></div>
		<!DOCTYPE html>

		<title>Inventario</title>
		<style>
			table {
				border-collapse: collapse;
				width: 100%;
				margin: 1px;
			}

			th,
			td {
				border: 1px solid #fa9703;
				border-style: solid;
				background-color: #fafaf8;
				padding: 1px;
				text-align: center;
				margin: 2px;

			}

			th {
				background-color: #f2bb67;
			}

			.stcuad {
				border-radius: 12px;
				width: 200px;
				height: 20px;
				border-color: #f9c063;
				border-style: solid;
			}
		</style>
		<div class="centrado">
			<h1><img class="pabon" src="assets/img/icono.png" alt="icon">Inventario</h1>
		</div>
</body>

</html>

<div class="agregarinv">
	<div>
		<h3>Agregar nuevo producto</h3>
	</div>
	</body>

	</html>
	<div>
		<form class="d-flex justify-content-center align-items-center" id="formularioInventario">

			<label for="producto">Producto:</label>

			<input class="stcuadro" type="text" id="producto" placeholder="Naranja" name="producto" style="width: auto;"><br>


			<label for="cantidad">Cantidad:</label>
			<input class="stcuad" type="number" id="cantidad" placeholder="Eje 80 uds" name="cantidad"><br><br>

			<label for="precio">Precio ud:</label>
			<input class="stcuadro" type="text" id="precio" placeholder="Eje 3.000" name="precio" style="width: auto;"><br><br>

			<input class="egar" type="submit" value="Agregar">
			<button class="egar" type="button" onclick="guardarInventario()">Guardar Inventario</button>
		</form>
	</div>
</div>

<table class id="tablaInventario">
	<tr>
		<th>Producto</th>
		<th>Cantidad</th>
		<th>Precio Unitario</th>
		<th>Total</th>
		<th>Acciones</th>
	</tr>
</table>


<script>
	const inventario = [];

	document.getElementById("formularioInventario").addEventListener("submit", function (event) {
		event.preventDefault();

		const producto = document.getElementById("producto").value;
		const cantidad = document.getElementById("cantidad").value;
		const precio = document.getElementById("precio").value;
		const total = (parseFloat(cantidad) * parseFloat(precio)).toFixed(2);

		const tabla = document.getElementById("tablaInventario");
		const newRow = tabla.insertRow(tabla.rows.length);

		const cellProducto = newRow.insertCell(0);
		const cellCantidad = newRow.insertCell(1);
		const cellPrecio = newRow.insertCell(2);
		const cellTotal = newRow.insertCell(3);
		const cellAcciones = newRow.insertCell(4);

		cellProducto.innerHTML = producto;
		cellCantidad.innerHTML = cantidad;
		cellPrecio.innerHTML = `$${precio}`;
		cellTotal.innerHTML = `$${total}`;
		cellAcciones.innerHTML = '<button onclick="eliminarProducto(this)">Eliminar</button>';

		document.getElementById("producto").value = "";
		document.getElementById("cantidad").value = "";
		document.getElementById("precio").value = "";

		// Agregar al inventario
		inventario.push({ producto, cantidad, precio });
	});

	function eliminarProducto(row) {
		const rowIndex = row.parentNode.parentNode.rowIndex;
		document.getElementById("tablaInventario").deleteRow(rowIndex);
	}

	function guardarInventario() {
		const inventarioString = JSON.stringify(inventario);
		// Aquí puedes implementar la lógica para guardar el inventario en algún lugar (p. ej., en una base de datos)
		console.log("Inventario guardado:", inventarioString);
		alert("Inventario guardado. Abre la consola para ver los detalles.");
	}
</script>
</body>

</html>


</section>
</body>

</html>
				
