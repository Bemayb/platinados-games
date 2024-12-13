<?php
session_start();
include 'conexion.php'; // Asegúrate de tener tu archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta SQL (usando declaraciones preparadas para seguridad)
    $stmt = $conexion->prepare("SELECT id, nombrecliente, emailcliente, password FROM clientes WHERE emailcliente = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        // Verifica la contraseña (asumiendo que está hasheada)
        if (password_verify($password, $usuario['password'])) {
            // Inicio de sesión exitoso
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_name'] = $usuario['nombrecliente'];
            header("Location: ../index.html"); // Redirecciona al inicio
            exit();
        } else {
            // Contraseña incorrecta
            $_SESSION['error'] = "Correo o contraseña incorrectos";
            header("Location: ../login.html");
            exit();
        }
    } else {
        // Usuario no encontrado
        $_SESSION['error'] = "Correo o contraseña incorrectos";
        header("Location: ../login.html");
        exit();
    }
}
?>