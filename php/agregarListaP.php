<?php

require 'conexion.php';
$conn= $conexion;

    $nombres = $_POST['nombre'];
    $pnf = $_POST['pnf'];
    $number = $_POST['cupos'];
  

    // Insertar el usuario en la base de datos
    $sql = "INSERT INTO cronologia (id, accion1, accion2, nombre, accion3) VALUES (NULL,'agrego una lista llamado','super','user', 'El usuario')";
    $resultado = mysqli_query($conexion,$sql);

    $sql = "INSERT INTO graduando (nombre, pnf,cupos, ide) VALUES ('$nombres','$pnf','$number','2')";
    $resultado = mysqli_query($conexion,$sql);

   

    if ($resultado) {
        header("Location: homess.php");
    } else {
        header("Location: eventos.php");
    }


?>