<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre', '$correo')";
if ($conexion->query($sql)) {
    echo "✅ Datos guardados correctamente.";
} else {
    echo "❌ Error: " . $conexion->error;
}
?>