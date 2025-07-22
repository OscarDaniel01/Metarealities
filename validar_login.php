<?php
include("conexion.php");
session_start();
$usuario = $_POST['usuario'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM admins WHERE usuario = '$usuario' AND password = '$password'";
$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0) {
    $_SESSION['usuario'] = $usuario;
    header("Location: ver_usuarios.php");
} else {
    echo "❌ Usuario o contraseña incorrectos.";
}
?>