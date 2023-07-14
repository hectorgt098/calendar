<?php

$nombreImagen = "nombre_imagen.jpg";
$rutaCarpeta = "";

$rutaCompleta = $rutaCarpeta . $nombreImagen;

if (file_exists($rutaCompleta)) {
    // Verificar si el archivo existe antes de intentar eliminarlo
    if (unlink($rutaCompleta)) {
        echo "La imagen se eliminó correctamente.";
    } else {
        echo "No se pudo eliminar la imagen.";
    }
} else {
    echo "La imagen no existe en la carpeta especificada.";
}


?>