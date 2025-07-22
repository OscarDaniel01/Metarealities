<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: login.php");
  exit();
}
include("conexion.php");
$sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Usuarios</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 2rem; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #aaa; padding: 8px 12px; text-align: left; }
    th { background-color: #2d72d9; color: white; }
    tr:nth-child(even) { background-color: #f3f3f3; }
    h1 { color: #2d72d9; }
  </style>
</head>
<body>
  <h1>Usuarios registrados</h1>
  <p><a href="exportar_csv.php">📥 Exportar a CSV</a> | <a href="cerrar_sesion.php">🔓 Cerrar sesión</a></p>
  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Acciones</th>
    </tr>
    <?php while($fila = $resultado->fetch_assoc()): ?>
    <tr>
      <td><?php echo $fila["id"]; ?></td>
      <td><?php echo htmlspecialchars($fila["nombre"]); ?></td>
      <td><?php echo htmlspecialchars($fila["correo"]); ?></td>
      <td>
        <a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a> |
        <a href="eliminar.php?id=<?php echo $fila['id']; ?>" onclick="return confirm('¿Seguro que deseas eliminar este usuario?');">Eliminar</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>