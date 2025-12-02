<?php

require 'conexion.php';


    $id= $_REQUEST['id'];


    $query = "UPDATE espacios SET activo = 1 WHERE id='$id'";
    $resultado=$conexion->query($query);

    if ($resultado) {
        header("Location: SuperVerEspacio.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>