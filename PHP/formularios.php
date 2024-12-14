<?php
include 'compilado.php';

$nombre = $_POST["nombrecliente"];
$apellido= $_POST["apellidocliente"];
$fecha= $_POST["FechaNacimientoCliente"];
$email= $_POST["emailcliente"];
$telefono= $_POST["telefonocliente"];
$password = password_hash($_POST["Contraseña"], PASSWORD_DEFAULT);
$nombre_completo= $nombre." ".$apellido;

$sql = "INSERT INTO clientes (nombrecliente, apellidocliente, FechaNacimientoCliente, emailcliente, telefonocliente, Contraseña) 
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssssss", $nombre, $apellido, $fecha, $email, $telefono, $password);

if ($stmt->execute()) {
    echo "Bienvenido a Platinados ", $nombre_completo;
    echo "<div class='mensaje-exito'>¡Registro exitoso!</div>";
    header("Location: ../login.html");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>