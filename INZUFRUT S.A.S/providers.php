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
				<i class="zmdi zmdi-close btn-menu"></i> Inventario
			</div>
			<figure class="full-width navLateral-body-tittle-menu">
				<div>
					<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
				</div>
				<figcaption>
					<span>
						Nombre del proveedor<br>
						<small>proveedor</small>
					</span>
				</figcaption>
			</figure>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="Inicio.html" class="full-width">
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
						<a href="products.html" class="full-width">
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
						<a href="ventas.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
							<div class="navLateral-body-cr">
								VENTAS
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="inventario.html" class="full-width">
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
				<h1><img class="pabon" src="assets/img/icono.png" alt="icon"></a> REGISTRO DE PROVEEDORES</h1>
			</header>

			<main class="Agregar">
				<h2>AGREGAR PROVEEDOR</h2>

				<form id="proveedorForm">
					<label class="tovar" for="tipo_identificacion">Tipo de Identificación:</label>
					<select id="tipo_iden" name="tipo_iden" required>
						<option value="cedula_ciudadania">Cédula de Ciudadanía</option>
						<option value="cedula_extranjera">Cédula Extranjera</option>
					</select><br>

					<label for="numero">Numero Identificacion:</label>
					<input class="stcuadro" type="text" id="numero" name="numero" placeholder="107823665 "
						required><br><br>
					<label for="nombre">Nombre:</label>
					<input class="stcuadro" type="text" id="nombre" name="nombre" placeholder="Proveedor "
						required><br><br>

					<label for="correo">Correo Electrónico:</label>
					<input class="stcuadro" type="email" id="correo" name="correo" placeholder="proveedor@example.com"
						required><br><br>

					<label for="telefono">Teléfono:</label>
					<input class="stcuadro" type="text" id="telefono" name="telefono" placeholder="1234567890"
						required><br><br>

					<input class="topar" type="submit" value="Agregar Proveedor">
				</form>
			</main>

			<main class="Lista">
				<h2>LISTA DE PROVEEDORES</h2>

				<div class="busqueda">
					<label for="busqueda">Buscar proveedores:</label>
					<input class="stcuadr" type="text" id="busqueda" name="busqueda">
					<button class="btbusca" id="btnBusqueda">Buscar</button>
				</div>

				<table id="proveedoresTable">
					<thead>
						<tr>
							<th>Tipo de identificacion</th>
							<th>Numero Identificacion</th>
							<th>Nombre</th>
							<th>Correo Electrónico</th>
							<th>Teléfono</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody id="proveedoresList">
						<!-- Filas de proveedores se agregarán aquí -->
					</tbody>
				</table>
			</main>

			<script>
				const proveedoresList = document.getElementById("proveedoresList");
				const proveedorForm = document.getElementById("proveedorForm");
				const tipo_idenInput = document.getElementById("tipo_iden");
				const numeroInput = document.getElementById("numero");
				const nombreInput = document.getElementById("nombre");
				const correoInput = document.getElementById("correo");
				const telefonoInput = document.getElementById("telefono");
				const busquedaInput = document.getElementById("busqueda");
				const btnBusqueda = document.getElementById("btnBusqueda");

				// Obtener proveedores del almacenamiento local al cargar la página
				const proveedoresGuardados = JSON.parse(localStorage.getItem("proveedores")) || [];
				proveedoresGuardados.forEach(proveedor => {
					agregarProveedorATabla(proveedor);
				});

				proveedorForm.addEventListener("submit", function (event) {
					event.preventDefault();
					const tipo_iden = tipo_idenInput.value;
					const numero = numeroInput.value;
					const nombre = nombreInput.value;
					const correo = correoInput.value;
					const telefono = telefonoInput.value;

					if (validarCorreo(correo)) {
						const proveedor = {
							tipo_iden: tipo_iden,
							numero: numero,
							nombre: nombre,
							correo: correo,
							telefono: telefono
						};

						agregarProveedorATabla(proveedor);
						guardarProveedor(proveedor);
						limpiarFormulario();
					} else {
						alert("Por favor, ingresa una dirección de correo electrónico válida.");
					}
				});

				btnBusqueda.addEventListener("click", function () {
					const busquedaTexto = busquedaInput.value.toLowerCase();
					const filas = proveedoresList.getElementsByTagName("tr");

					for (let i = 0; i < filas.length; i++) {
						const fila = filas[i];
						const celdas = fila.getElementsByTagName("td");
						let encontrado = false;

						for (let j = 0; j < celdas.length - 1; j++) { // Ignorar la última celda de acciones
							const celdaTexto = celdas[j].textContent.toLowerCase();

							if (celdaTexto.includes(busquedaTexto)) {
								encontrado = true;
								break;
							}
						}

						if (encontrado) {
							fila.style.display = "";
						} else {
							fila.style.display = "none";
						}
					}
				});

				function agregarProveedorATabla(proveedor) {
					const row = document.createElement("tr");

					row.innerHTML = `
				  <td>${proveedor.tipo_iden}</td>
					<td>${proveedor.numero}</td>
					<td>${proveedor.nombre}</td>
					<td>${proveedor.correo}</td>
					<td>${proveedor.telefono}</td>
					<td>
					  <button class="b3tn-editar">Editar</button>
					  <button class="b3tn-eliminar">Eliminar</button>
					</td>
				  `;

					proveedoresList.appendChild(row);

					const b3tnEditar = row.querySelector(".b3tn-editar");
					const b3tnEliminar = row.querySelector(".b3tn-eliminar");

					b3tnEditar.addEventListener("click", function () {
						editarProveedor(proveedor, row);
					});

					b3tnEliminar.addEventListener("click", function () {
						eliminarProveedor(proveedor, row);
					});
				}

				function guardarProveedor(proveedor) {
					const proveedoresGuardados = JSON.parse(localStorage.getItem("proveedores")) || [];
					proveedoresGuardados.push(proveedor);
					localStorage.setItem("proveedores", JSON.stringify(proveedoresGuardados));
				}

				function limpiarFormulario() {
					tipo_idenInput.value = "";
					numeroInput.value = "";
					nombreInput.value = "";
					correoInput.value = "";
					telefonoInput.value = "";
				}

				function editarProveedor(proveedor, row) {
					const nuevoTipo_iden = prompt("Ingrese el nuevo tipo de identificacion:", proveedor.tipo_iden);
					const nuevoNumero = prompt("Ingrese el nuevo numero de identificacion:", proveedor.numero);
					const nuevoNombre = prompt("Ingrese el nuevo nombre:", proveedor.nombre);
					const nuevoCorreo = prompt("Ingrese el nuevo correo:", proveedor.correo);
					const nuevoTelefono = prompt("Ingrese el nuevo teléfono:", proveedor.telefono);

					proveedor.tipo_iden = nuevoTipo_iden;
					proveedor.numero = nuevoNumero;
					proveedor.nombre = nuevoNombre;
					proveedor.correo = nuevoCorreo;
					proveedor.telefono = nuevoTelefono;

					row.innerHTML = `
				  <td>${proveedor.tipo_iden}</td>
					<td>${proveedor.numero}</td>
					<td>${proveedor.nombre}</td>
					<td>${proveedor.correo}</td>
					<td>${proveedor.telefono}</td>
					<td>
					  <button class="btn-editar">Editar</button>
					  <button class="btn-eliminar">Eliminar</button>
					</td>
				  `;

					actualizarProveedor(proveedor);
				}

				function actualizarProveedor(proveedor) {
					const proveedoresGuardados = JSON.parse(localStorage.getItem("proveedores")) || [];
					const index = proveedoresGuardados.findIndex(p => p.correo === proveedor.correo);

					if (index !== -1) {
						proveedoresGuardados[index] = proveedor;
						localStorage.setItem("proveedores", JSON.stringify(proveedoresGuardados));
					}
				}

				function eliminarProveedor(proveedor, row) {
					if (confirm("¿Estás seguro de que deseas eliminar este proveedor?")) {
						row.remove();
						const proveedoresGuardados = JSON.parse(localStorage.getItem("proveedores")) || [];
						const index = proveedoresGuardados.findIndex(p => p.correo === proveedor.correo);

						if (index !== -1) {
							proveedoresGuardados.splice(index, 1);
							localStorage.setItem("proveedores", JSON.stringify(proveedoresGuardados));
						}
					}
				}

				function validarCorreo(correo) {
					const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
					return regexCorreo.test(correo);
				}
			</script>
		</section>
	</section>

</body>

</html>