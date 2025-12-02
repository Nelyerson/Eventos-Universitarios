<?php

require 'conexion.php';


    $id= $_REQUEST['id'];


    $query = "UPDATE noti SET disp = 1 WHERE id='$id'";
    $resultado=$conexion->query($query);

    if ($resultado) {
        header("Location: notificaciones.php?status=success");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>