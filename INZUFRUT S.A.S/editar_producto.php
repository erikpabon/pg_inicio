<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los datos del formulario
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $cantidad = $_POST['cantidad'];
  $estado = $_POST['estado'];
  $descripcion = $_POST['descripcion'];

  // Actualizar el producto en la base de datos
  $sql = "UPDATE productos SET nombre = ?, cantidad = ?, estado = ?, descripcion = ? WHERE id = ?";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("sissi", $nombre, $cantidad, $estado, $descripcion, $id);
  $stmt->execute();

  // Redireccionar a la página de inventario o mostrar un mensaje de éxito
  header("Location: inventario.php");
  exit();
} else {
  // Obtener el ID del producto a editar desde la URL
  $id = $_GET['id'];

  // Obtener los datos del producto desde la base de datos
  $sql = "SELECT * FROM productos WHERE id = ?";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $resultado = $stmt->get_result();
  $producto = $resultado->fetch_assoc();

  // Mostrar el formulario de edición
  ?>
  <form action="editar_producto.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
    <label for="nombre">Nombre del Producto:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $producto['nombre']; ?>" required><br><br>

    <label for="cantidad">Precio:</label>
    <input type="number" id="cantidad" name="cantidad" value="<?php echo $producto['cantidad']; ?>" min="1" required><br><br>

    <label for="estado">Proveedor:</label>
    <select id="estado" name="estado" required>
      <option value="fresco" <?php if ($producto['estado'] == 'fresco') echo 'selected'; ?>>Fresco</option>
      <option value="maduro" <?php if ($producto['estado'] == 'maduro') echo 'selected'; ?>>Maduro</option>
      <option value="podrido" <?php if ($producto['estado'] == 'podrido') echo 'selected'; ?>>Podrido</option>
    </select><br><br>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" rows="4" cols="50" required><?php echo $producto['descripcion']; ?></textarea><br><br>

    <button type="submit">Actualizar Producto</button>
  </form>
  <?php
}
?>
