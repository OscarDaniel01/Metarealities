<?php
include("conexion.php");
$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = $id";
$res = $conexion->query($sql);
$dato = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Editar Usuario</title>
</head>
<body>
  <h1>Editar Usuario</h1>
  <form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $dato['id']; ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo htmlspecialchars($dato['nombre']); ?>"><br><br>
    Correo: <input type="email" name="correo" value="<?php echo htmlspecialchars($dato['correo']); ?>"><br><br>
    <button type="submit">Actualizar</button>
  </form>
</body>
</html>