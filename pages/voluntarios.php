<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/estilos/voluntario.css">
    <title>Voluntarios</title>
</head>
<body>
    <?php 
    require("bd.php");
    $conexion = regresarConexion();

    // Actualizar usuario
    if (isset($_POST['actualizar'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $cedula = $_POST['cedula'];
        $celular = $_POST['celular'];
        $correo = $_POST['correo'];
        $comuna = $_POST['comuna'];
        $barrio = $_POST['barrio'];

        $actualizar = mysqli_query($conexion, "UPDATE voluntarios SET nombre='$nombre', cedula='$cedula', celular='$celular', correo='$correo', comuna='$comuna', barrio='$barrio' WHERE id=$id");

        if ($actualizar) {
            echo "Usuario actualizado exitosamente";
        } else {
            echo "Error al actualizar el usuario: " . mysqli_error($conexion);
        }
    }

    // Eliminar usuario
    if (isset($_GET['eliminar'])) {
        $id = $_GET['eliminar'];

        $eliminar = mysqli_query($conexion, "DELETE FROM voluntarios WHERE id=$id");

        if ($eliminar) {
            echo "Usuario eliminado exitosamente";
        } else {
            echo "Error al eliminar el usuario: " . mysqli_error($conexion);
        }
    }

    // Insertar nuevo usuario
    if (isset($_POST['insertar'])) {
        $nombre = $_POST['nombre'];
        $cedula = $_POST['cedula'];
        $celular = $_POST['celular'];
        $correo = $_POST['correo'];
        $comuna = $_POST['comuna'];
        $barrio = $_POST['barrio'];

        $insertar = mysqli_query($conexion, "INSERT INTO voluntarios (nombre, cedula, celular, correo, comuna, barrio) VALUES ('$nombre', '$cedula', '$celular', '$correo', '$comuna', '$barrio')");

        if ($insertar) {
            echo "Usuario insertado exitosamente";
        } else {
            echo "Error al insertar el usuario: " . mysqli_error($conexion);
        }
    }

    $datos = mysqli_query($conexion, "SELECT id, nombre, cedula, celular, correo, comuna, barrio FROM voluntarios");

    $ep = mysqli_fetch_all($datos, MYSQLI_ASSOC);

    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Cédula</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Comuna</th>
            <th>Barrio</th>
            <th>Acciones</th>
        </tr>
        <?php foreach($ep as $fila){ ?>
            <tr> 
                <form method="POST" action="">
                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                    <td><input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"></td>
                    <td><input type="text" name="cedula" value="<?php echo $fila['cedula']; ?>"></td>
                    <td><input type="text" name="celular" value="<?php echo $fila['celular']; ?>"></td>
                    <td><input type="text" name="correo" value="<?php echo $fila['correo']; ?>"></td>
                    <td><input type="text" name="comuna" value="<?php echo $fila['comuna']; ?>"></td>
                    <td><input type="text" name="barrio" value="<?php echo $fila['barrio']; ?>"></td>
                    <td>
                        <button type="submit" name="actualizar">Actualizar</button>
                        <a href="?eliminar=<?php echo $fila['id']; ?>">Eliminar</a>
                    </td>
                </form>
            </tr>
        <?php } ?>
        <tr>
            <form method="POST" action="">
                <td><input type="text" name="nombre" placeholder="Nombre"></td>
                <td><input type="text" name="cedula" placeholder="Cédula"></td>
                <td><input type="text" name="celular" placeholder="Celular"></td>
                <td><input type="text" name="correo" placeholder="Correo"></td>
                <td><input type="text" name="comuna" placeholder="Comuna"></td>
                <td><input type="text" name="barrio" placeholder="Barrio"></td>
                <td><button type="submit" name="insertar">Insertar</button></td>
            </form>
        </tr>
    </table>
</body>
</html>
