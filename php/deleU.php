<?php

require 'conexion.php';


    $id= $_REQUEST['id'];
    $id2= $_REQUEST['id2'];
    $id3= $_REQUEST['id3'];
    $user= $_REQUEST['user'];
    $fecha = date('Y-m-d');


    

    $fecha_actual = $fecha;




    
    $query = "UPDATE pagos SET fechar='$fecha' WHERE id = '$id'";
    $resultado2=$conexion->query($query);




    $query = "UPDATE pagos SET status1='Rechazado' WHERE idee='$id3' AND id = '$id'";
    $resultado=$conexion->query($query);

    $sql = "INSERT INTO noti (id, texto,fecha,accion2,ide) VALUES (NULL,'Ha sido rechazado su pago','$fecha','$user','$id3')";
    $resultado = mysqli_query($conexion,$sql);

    if ($resultado) {
        header("Location: VerpagosU.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>