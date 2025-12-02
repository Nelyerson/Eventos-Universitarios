<?php

require 'conexion.php';


    $id= $_REQUEST['id'];


    $query = "UPDATE estudiantes SET disp = 1 WHERE id='$id'";
    $resultado=$conexion->query($query);

    if ($resultado) {
        header("Location: SuperListaDeEstudiantes.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>