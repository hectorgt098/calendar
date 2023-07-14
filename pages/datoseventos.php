<?php

header( 'Content-Type: application/json' );

require( 'bd.php' );

$conexion = regresarConexion();

switch( $_GET[ 'accion' ] ) {

    case 'listar':
    //code...
    $datos = mysqli_query( $conexion, "select id,
            titulo as title,
            descripcion,
            inicio as start,
            fin as end,
            colortexto as textColor,
            colorfondo as backgroundColor,
            imagen,
            ubicacion as ubication,
            lugar as location
            from eventos" );
    $resultado = mysqli_fetch_all( $datos, MYSQLI_ASSOC );
    echo json_encode( $resultado );

    break;

    case 'agregar':

    $imagen = $_FILES[ 'imagen' ];

    // Verificar si se subió correctamente la imagen
    if ( $imagen[ 'error' ] === UPLOAD_ERR_OK ) {
        $nombreTemporal = $imagen[ 'tmp_name' ];
        /* $nombreImagen = $imagen[ 'name' ];
        */

        $nombreImagen = date( 'YmdHis' ).rand( 0, 999999 );
        /* echo $nombreTemporal;
        */
        $nombreImagen = $nombreImagen.'.'.pathinfo( $imagen[ 'name' ] )[ 'extension' ];

        // Mover la imagen a una ubicación permanente
        move_uploaded_file( $nombreTemporal, "../../destino/$nombreImagen" );
    }

        $respuesta = mysqli_query( $conexion, "INSERT INTO eventos (titulo, descripcion, inicio, fin, colortexto, colorfondo, imagen, ubicacion, lugar) VALUES
        ('$_POST[titulo]', '$_POST[descripcion]', '$_POST[inicio]', '$_POST[fin]', '$_POST[colortexto]', '$_POST[colorfondo]', '$nombreImagen', '$_POST[ubicacion]', '$_POST[lugar]')" );
        echo json_encode( $respuesta );

    
    /*  */

    break;

    case 'modificar':
        $imagen = $_FILES[ 'imagen' ];

        $sql = "update eventos set titulo = '$_POST[titulo]',descripcion = '$_POST[descripcion]',inicio = '$_POST[inicio]',fin = '$_POST[fin]',colortexto = '$_POST[colortexto]',colorfondo = '$_POST[colorfondo]', ubicacion = '$_POST[ubicacion]',ubicacion = '$_POST[ubicacion]', lugar = '$_POST[lugar]'";
        // Verificar si se subió correctamente la imagen
        if ( $imagen[ 'error' ] === UPLOAD_ERR_OK ) {
            $nombreTemporal = $imagen[ 'tmp_name' ];
            /* $nombreImagen = $imagen[ 'name' ];
            */
    
            $nombreImagen = date( 'YmdHis' ).rand( 0, 999999 );
            /* echo $nombreTemporal;
            */
            $nombreImagen = $nombreImagen.'.'.pathinfo( $imagen[ 'name' ] )[ 'extension' ];
    
            // Mover la imagen a una ubicación permanente
            move_uploaded_file( $nombreTemporal, "../destino/$nombreImagen" );

            $sql .= ", imagen = '$nombreImagen'" ;
        }

            $sql .= " where id = '$_POST[id]'";
            $respuesta = mysqli_query( $conexion, $sql );

            echo json_encode( $respuesta );
        
        break;

    case 'borrar':
    $respuesta = mysqli_query( $conexion, "delete from eventos where id = $_POST[id]" );
    echo json_encode( $respuesta );
    break;
}

?>