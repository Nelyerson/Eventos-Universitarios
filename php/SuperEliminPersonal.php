<?php

require 'conexion.php';


    $id= $_REQUEST['id'];


    $query = "UPDATE profesores SET activo = 1 WHERE id='$id'";
    $resultado=$conexion->query($query);

    if ($resultado) {
        header("Location: SuperVer_Personal.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>