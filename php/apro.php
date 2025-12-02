<?php

require 'conexion.php';


    $id= $_REQUEST['id'];
    $id2= $_REQUEST['id2'];
    $id3= $_REQUEST['id3'];
    $user= $_REQUEST['user'];
    $fecha = date('Y-m-d');


    

    $fecha_actual = $fecha;

    // Calcula la fecha con el mes siguiente
    $fechames = date('Y-m-d', strtotime('+1 month', strtotime($fecha_actual)));



    // Insertar el usuario en la base de datos
    $query = "UPDATE estudiantes SET activo='1' WHERE id='$id3'";
    $resultado2=$conexion->query($query);

    
    $query = "UPDATE estudiantes SET fecha_expiracion	='$fechames' WHERE id='$id3'";
    $resultado2=$conexion->query($query);

    $query = "UPDATE pagos SET status1='Aprobado' WHERE idee='$id3' AND ide = '$id2' AND id = '$id'";
    $resultado=$conexion->query($query);

    $sql = "INSERT INTO noti (id, texto,fecha,accion2,ide) VALUES (NULL,'Ha sido aprovado su pago','$fecha','$user','$id3')";
    $resultado = mysqli_query($conexion,$sql);

    if ($resultado) {
        header("Location: Verpagos.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>