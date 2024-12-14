<?php
    session_start();
    include 'compilado.php';

    // Añade esto para depuración
    error_log("Datos recibidos:");
    error_log("Email: " . $_POST['email']);
    error_log("Password: " . $_POST['password']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Modifica la consulta para ver si encuentra el usuario
    $stmt = $conexion->prepare("SELECT * FROM clientes WHERE emailcliente = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Añade depuración para ver qué encuentra
    error_log("Usuarios encontrados: " . $resultado->num_rows);
    
    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        error_log("Usuario encontrado: " . print_r($usuario, true));
        
        // Verifica la contraseña
        if ($password === $usuario['Contraseña']) { // Temporalmente comparamos directamente
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_name'] = $usuario['nombrecliente'];
            error_log("Login exitoso para: " . $usuario['nombrecliente']);
            header("Location: ../index.php");
            exit();
        }
    }
    
    $_SESSION['error'] = "Correo o contraseña incorrectos";
    header("Location: ../login.html");
    exit();
}
?>