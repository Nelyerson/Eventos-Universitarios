<?php

require 'conexion.php';
$conn= $conexion;
$id = $_POST['id'];
    $firma = $_POST['firma'];
    $paquete = $_POST['paquete'];
    $acto = $_POST['acto'];
    $medalla = $_POST['medalla'];
  
  

    // Insertar el usuario en la base de datos
    $sql = "INSERT INTO cronologia (id, accion1, accion2, nombre, accion3) VALUES (NULL,'agrego una lista llamado','super','user', 'El usuario')";
    $resultado = mysqli_query($conexion,$sql);

    
    $query66 = "UPDATE estudiantes SET firma = '$firma', paquete = '$paquete', acto = '$acto', medalla = '$medalla', graduando = '1' WHERE id='$id'";
    $resultado66=$conexion->query($query66);

   

    if ($resultado) {
        header("Location: lista.php");
    } else {
        header("Location: eventos.php");
    }


?>