<?php
header( 'Content-Type: application/json' );

require( 'bd.php' );

$conexion = regresarConexion();

$accion = $_GET["accion"];

switch ($accion) {
    case "agregar":
        $titulo = $_POST["titulo"];
        $imagen = $_FILES["imagen"];

        // Verificar si se subió correctamente la imagen
        if ($imagen["error"] === UPLOAD_ERR_OK) {
            $nombreTemporal = $imagen["tmp_name"];
            /* $nombreImagen = $imagen["name"]; */

            $nombreImagen = date("YmdHis").rand(0, 999999);
            /* echo $nombreTemporal; */
            $nombreImagen = $nombreImagen.".".pathinfo($imagen["name"])['extension'];
             
            // Mover la imagen a una ubicación permanente
            move_uploaded_file($nombreTemporal, "destino/$nombreImagen");
            
            // Guardar el título y la ruta de la imagen en la base de datos
            $respuesta = mysqli_query($conexion, "INSERT INTO eventos (titulo, imagen) VALUES ('$titulo', '$nombreImagen')");
            
            if ($respuesta) {
                echo json_encode("Evento agregado correctamente.");
            } else {
                echo json_encode("Hubo un error al agregar el evento.");
            }
       } else {
            echo json_encode("Hubo un error al subir la imagen.");
        }

        break;

    // Otros casos...

    default:
        echo json_encode("Acción no válida.");
        break;
}
?>
