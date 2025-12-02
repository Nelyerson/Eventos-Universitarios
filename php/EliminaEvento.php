<?php

require 'conexion.php';


    $id= $_REQUEST['id'];
    $user = $_POST['user'];
    $ide = $_POST['ide'];
    $nombre = $_POST['nombre'];
    $espacio = $_POST['espacio'];

    date_default_timezone_set('America/Caracas');
    $fechaHoraActual = date("Y-m-d H:i:s");
    




    
    $query = "UPDATE espacios SET disponibilidad = 'Disponible' WHERE lugar = '$espacio'";
    $resultado = $conexion->query($query);

    $sql = "INSERT INTO noti (id, texto, ide, fecha, accion) VALUES (NULL,'Se cancelo el evento llamado $nombre', '$ide', '$fechaHoraActual', '1')";
    $resultado = mysqli_query($conexion,$sql);

    
    $sql = "INSERT INTO cronologia (id, accion1, accion2, accion3) VALUES (NULL,'Usuario $user cancelo un evento llamado $nombre','$user','$fechaHoraActual')";
    $resultado = mysqli_query($conexion,$sql);


    $query = "UPDATE eventos SET estatus = 'Cancelado' WHERE id='$id'";
    $resultado=$conexion->query($query);

    if ($resultado) {
        header("Location: homess.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>