<?php
include("conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$sql = "UPDATE usuarios SET nombre='$nombre', correo='$correo' WHERE id=$id";
$conexion->query($sql);
header("Location: ver_usuarios.php");
exit();
?>