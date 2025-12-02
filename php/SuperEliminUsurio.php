<?php

require 'conexion.php';


    $id= $_POST['id'];


    $query = "UPDATE usuarios SET disp = 1 WHERE id='$id'";
    $resultado=$conexion->query($query);

    $query = "UPDATE eventos  SET disp = 1 WHERE ide='$id'";
    $resultado=$conexion->query($query);

    $query = "UPDATE profesores SET disp = 1 WHERE ide='$id'";
    $resultado=$conexion->query($query);

    $query = "UPDATE estudiantes SET disp = 1 WHERE ide='$id'";
    $resultado=$conexion->query($query);

    $query = "UPDATE espacios SET disp = 1 WHERE ide='$id'";
    $resultado=$conexion->query($query);

    $query = "UPDATE asistencia SET disp = 1 WHERE ide='$id'";
    $resultado=$conexion->query($query);

    if ($resultado) {
        header("Location: SuperVer_Usuarios.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>