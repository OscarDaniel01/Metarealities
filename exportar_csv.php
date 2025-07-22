<?php
include("conexion.php");
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="usuarios.csv"');
$output = fopen("php://output", "w");
fputcsv($output, ['ID', 'Nombre', 'Correo']);
$resultado = $conexion->query("SELECT * FROM usuarios");
while ($fila = $resultado->fetch_assoc()) {
    fputcsv($output, [$fila['id'], $fila['nombre'], $fila['correo']]);
}
fclose($output);
exit();
?>