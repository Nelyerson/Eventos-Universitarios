<?php

require 'conexion.php';
$conn= $conexion;

$id= $_REQUEST['id'];
    $Capacidad = $_POST['Capacidad'];
    $Dimensiones = $_POST['Dimensiones'];
    $audiovisual = $_POST['audiovisual'];
    $internet = $_POST['internet'];
    $Iluminación = $_POST['Iluminación'];
    $Ventilación = $_POST['Ventilación'];
    $Accesibilidad = $_POST['Accesibilidad'];
    $Disponibilidad = $_POST['Disponibilidad'];
    $referencia = $_POST['referencia'];
    $lugar = $_POST['lugar'];
    $Contacto = $_POST['Contacto'];



    // Insertar el usuario en la base de datos
    $sql = "INSERT INTO cronologia (id, accion1, accion2, nombre, accion3) VALUES (NULL,'agrego un proximo evento llamado','$nombre','user', 'El usuario')";
    $resultado = mysqli_query($conexion,$sql);


    $query = "UPDATE espacios SET Capacidad = '$Capacidad', Dimensiones='$Dimensiones' , internet='$internet', Iluminación='$Iluminación', Ventilación='$Ventilación' , Accesibilidad='$Accesibilidad' , Disponibilidad='$Disponibilidad' , referencia='$referencia' , lugar='$lugar' , Contacto='$Contacto' WHERE id='$id'";

    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        header("Location: SuperVerEspacio.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }

?>