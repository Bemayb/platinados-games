<?php
$host = 'localhost';
$usuario = 'root';  // usuario XAMPP
$contraseña = '';   // contraseña XAMPP
$base_datos = 'platinados_games';

$conexion = new mysqli($host, $usuario, $contraseña, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>