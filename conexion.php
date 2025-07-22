<?php
$conexion = new mysqli("localhost", "root", "root", "mibase", 8889);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>