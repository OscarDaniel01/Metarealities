<?php
include("conexion.php");
$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id = $id";
$conexion->query($sql);
header("Location: ver_usuarios.php");
exit();
?>