<?php
require('bd.php');
$conexion = regresarConexion();

// Obtener los datos enviados desde el formulario
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Consultar la tabla de usuarios para verificar las credenciales
$sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
$result = $conexion->query($sql);

// Verificar si se encontró un registro con las credenciales proporcionadas
if ($result->num_rows > 0) {
    // Iniciar sesión y almacenar el nombre de usuario en la variable de sesión
    session_start();
    $_SESSION['usuario'] = $usuario;
    
    // Redirigir al usuario a index.php
    header("Location: eventosadmin.php");
    exit();
} else {
    echo "Credenciales inválidas";
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
