<?php

require 'conexion.php';


    $id= $_REQUEST['id'];
    $user = $_POST['user'];
    $nombre = $_POST['nombre'];
    date_default_timezone_set('America/Caracas');
    $fechaHoraActual = date("Y-m-d H:i:s");
    

         
$sql = "INSERT INTO cronologia (id, accion1, accion2, accion3) VALUES (NULL,'Usuario $user elimino a $nombre de su personal','$user', '$fechaHoraActual')";
$resultado = mysqli_query($conexion,$sql);


    $query = "UPDATE profesores SET disp = 1 WHERE id='$id'";
    $resultado=$conexion->query($query);

    if ($resultado) {
        header("Location: ver_personal.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>