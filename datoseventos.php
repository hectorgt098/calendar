<?php

header('Content-Type: application/json');

require("conexion.php");

$conexion = regresarConexion();

switch($_GET['accion']){

    case 'listar':
        //code...
        $datos = mysqli_query($conexion,"select id,
        titulo as title,
        descripcion,
        inicio as start,
        fin as end,
        colortexto as textColor,
        colofondo as backgroundColor
        from eventos");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);

        break;

        case 'agregar':
            /* "insert into eventos (titulo, descripcion, inicio, fin, colortexto, colorfondo) values
            ('$_POST[titulo]','$_POST[descripcion]','$_POST[inicio]','$_POST[fin]','$_POST[colortexto]','$_POST[colorfondo]')" */

            break;

            case 'modificar':
                //code...

                /* "update eventos set titulo = '$_POST[titulo]',
                                    descripcion = '$_POST[descripcion]',
                                    inicio = '$_POST[inicio]',
                                    fin = '$_POST[fin]',
                                    colortexto = '$_POST[colortexto]',
                                    colorfondo = '$_POST[colorfondo]',
                                    where id = $_POST[id]" */
                break;

                case 'borrar':
                    //code...

                    /* "delete from eventos where id = $_POST[id]" */
                    break;
}

?>