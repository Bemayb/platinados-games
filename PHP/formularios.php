<?php
$nombre = $_POST["nombrecliente"];
$apellido= $_POST["apellidocliente"];
$fecha= $_POST["FechaNacimientoCliente"];
$email= $_POST["emailcliente"];
$telefono= $_POST["telefonocliente"];

$nombre_completo= $nombre." ".$apellido;

echo "Bienvenido a Platinados ", $nombre_completo;    
echo "<div class='mensaje-exito'>¡Registro exitoso!</div>";

?>