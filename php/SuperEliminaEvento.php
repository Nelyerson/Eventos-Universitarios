<?php

require 'conexion.php';


    $id= $_REQUEST['id'];


    $query = "UPDATE eventos SET disp = 1 WHERE id='$id'";
    $resultado=$conexion->query($query);

    if ($resultado) {
        header("Location: Superhomess.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>