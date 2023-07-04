<?php
function regresarConexion(){
    $server = "localhost";
    $usuario = "root";
    $clave = "";
    $base = "base_calendario";

    $conexion = mysqli_connect($server, $usuario, $clave, $base) or die ("Problemas con la conexión");
    mysqli_set_charset($conexion, 'utf8');
    return $conexion;
}
?>
