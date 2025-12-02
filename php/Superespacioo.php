<?php

require 'conexion.php';
$conn= $conexion;

    $Capacidad = $_POST['Capacidad'];
    $Disponibilidad = 'Disponible';
    $lugar = $_POST['lugar'];
    $ide = $_POST['ide'];
    $nombre = $_POST['username'];

    date_default_timezone_set('America/Caracas');
    $fechaHoraActual = date("Y-m-d H:i:s");
    


 
    if ($_FILES["archivo"]["error"] === 0) {
    
        $permitidos = array("image/png", "image/jpg", "image/jpeg", "application/pdf");
        $limite_kb = 1024; //1 MB
    
        if (in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 3000) {
        
            $ruta = 'files/' . $nombre  . '/';
            $archivoNombre = $_FILES["archivo"]["name"];
            $extension = pathinfo($archivoNombre, PATHINFO_EXTENSION);
            $archivo = $ruta . uniqid() . "foto."  . $extension;
    
            if (!file_exists($ruta)) {
                mkdir($ruta, 0777, true);
            }
    
            if (!file_exists($archivo)) {
    
                $resultado = move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
    
                if ($resultado) {
                    echo "Archivo Guardado";
                } else {
                    header("Location: verespacio.php?status=fotoerror"); exit ();
                }
            } else {
                header("Location: verespacio.php?status=fotoerror"); exit ();
            }
        } else {
            header("Location: verespacio.php?status=fotoerror"); exit ();
        }
    }

    // Insertar el usuario en la base de datos
    $sql = "INSERT INTO cronologia (id, accion1, accion2, accion3) VALUES (NULL,'Usuario $nombre agrego un campo llamado $lugar','$nombre','$fechaHoraActual')";
    $resultado = mysqli_query($conexion,$sql);

    $sql = "INSERT INTO espacios (id, Capacidad, Disponibilidad, lugar, foto,ide) VALUES (null,'$Capacidad','$Disponibilidad','$lugar','$archivo','$ide')";
    $resultado = mysqli_query($conexion,$sql);


    if ($resultado) {
        header("Location: VerEspacio.php");
    } else {
        header("Location: Espacio1.php");
    }


?>