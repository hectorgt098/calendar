<?php
require("bd.php");
$conexion = regresarConexion();

if (isset($_POST['cedula']) && isset($_POST['nombre']) && isset($_POST['celular']) && isset($_POST['correo']) && isset($_POST['comuna']) && isset($_POST['barrio']) && isset($_POST['tpvoluntario'])) {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $comuna = $_POST['comuna'];
    $barrio = $_POST['barrio'];
    $tpvoluntario = $_POST['tpvoluntario'];

    $insertar = mysqli_query($conexion, "INSERT INTO voluntarios (cedula, nombre, celular, correo, comuna, barrio, tpvoluntario) VALUES ('$cedula', '$nombre', '$celular', '$correo', '$comuna', '$barrio', '$tpvoluntario')");

    if ($insertar) {
        echo "Usuario insertado exitosamente";
    } else {
        echo "Error al insertar el usuario: " . mysqli_error($conexion);
    }
}
?>
