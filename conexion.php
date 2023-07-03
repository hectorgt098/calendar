<?php


$server = "localhost";
$usuario = "root";
$password = "";
$database = "base_calendario";

$conexion = new mysqli($server, $usuario, $password, $database);

// Verificar la conexión
if ($conexion->connect_errno) {
    echo "Error en la conexión: " . $conexion->connect_error;
    exit();
}

// Establecer el juego de caracteres
$conexion->set_charset('utf8');

// Ejemplo de consulta
$query = "SELECT * FROM eventos";
$resultado = $conexion->query($query);

// Verificar si la consulta tuvo éxito
if ($resultado) {
    // Procesar los resultados de la consulta
    while ($fila = $resultado->fetch_assoc()) {
        // Acceder a los valores de cada fila
        echo "ID: " . $fila['id'] . ", titulo: " . $fila['titulo'] . ", inicio: " .$fila['Inicio'] . "<br>";
    }
} else {
    // Mostrar mensaje de error si la consulta falló
    echo "Error en la consulta: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();

?>
