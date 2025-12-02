<?php

require 'conexion.php';
$conn= $conexion;

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $estudiante = $_POST['estudiante'];
    $ide = $_POST['ide'];
    $evento = $_POST['evento'];
    $tipo = $_POST['tipo'];
    $tipoevento = $_POST['tipoevento'];
    $dni = $_POST['dni'];
    $disc = $_POST['disc'];
    $idn = $_POST['idn'];
    $dispo = $_POST['dispo'];
    $firma = $_POST['firma'];
    

    
date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d H:i:s");

    

if ($tipoevento == 'Acta de grado' && $firma == 'No' ) {
    header("Location: homestwo.php?status=firma"); exit ();
}







    $query = "SELECT * FROM asistencia WHERE dni= '$dni' AND ide= '$ide'";
    $resultado=$conexion->query($query);
    $row = $resultado->fetch_assoc();
    
        if (mysqli_num_rows($resultado) > 0 ){

            $sql = "INSERT INTO cronologia (id, accion1, accion2, nombre, accion3) VALUES (NULL,'agrego un proximo evento llamado','$nombre','user', 'El usuario')";
            $resultado = mysqli_query($conexion,$sql);

          
        
            $sql = "INSERT INTO noti (id, texto,ide,fecha) VALUES (NULL,'El estudiante $nombre notifico que asistira por $tipo','$idn','$fechaHoraActual')";
            $resultado = mysqli_query($conexion,$sql);
            
            $query = "UPDATE eventos SET dispon = dispon - 1 WHERE id='$ide'";
            $resultado=$conexion->query($query);

          
            $sql = "UPDATE asistencia SET tipo = '$tipo' WHERE idestudiante = $estudiante AND ide= $ide";
            $resultadotipo = mysqli_query($conexion,$sql);


            $sql6 = "UPDATE asistencia SET estado = 1 WHERE idestudiante = $estudiante AND ide= $ide";
            $resultada = mysqli_query($conexion,$sql6);
            
    if ($resultado) {
        header("Location: homes.php?status=bien");
        exit();
    } else {
        header("Location: error.php");
        exit();
    }
        }

            $query = "SELECT * FROM eventos WHERE dispon= 0 AND id= '$ide'";
        $resultado=$conexion->query($query);
        $row = $resultado->fetch_assoc();
        
            if (mysqli_num_rows($resultado) > 0 ){
                header("Location: homes.php?status=evento"); exit ();
            }
                    if (mysqli_num_rows($resultado) > 0 ){
                        header("Location: homes.php?status=fam"); exit ();
                    }
    // Insertar el usuario en la base de datos
    if ($resultado) {
        header("Location: homes.php?status=no");
    } else {
        header("Location: error.php");
    }

