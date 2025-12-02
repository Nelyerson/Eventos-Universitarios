<?php

require 'conexion.php';


    $id= $_POST['id'];
    $capacidad = $_POST['capacidad'];
    $lugar = $_POST['lugar'];
    $user = $_POST['user'];
    date_default_timezone_set('America/Caracas');
    $fechaHoraActual = date("Y-m-d H:i:s");
    



    if ($_FILES["archivo"]["error"] === 0) {

        $permitidos = array("image/png", "image/jpg", "image/jpeg", "application/pdf");
        $limite_kb = 1024; //1 MB
    
        if (in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 3000) {
            $cont = 1;
            $cont = $cont + 1;
            $ruta = 'files/' . $nombre . $cont . '/';
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
                    header("Location: photomessaje.php"); exit ();
                }
            } else {
                header("Location: photomessaje.php"); exit ();
            }
        } else {
            header("Location: VerEspacio.php?status=fotoerror"); exit ();
        }
    }
  

    // Insertar el usuario en la base de datos
    $sql = "INSERT INTO cronologia (id, accion1, accion2, accion3) VALUES (NULL,'Usuario $user modifico los datos un espacio llamado $lugar','$user','$fechaHoraActual')";
    $resultados = mysqli_query($conexion,$sql);


    $query = "UPDATE espacios SET ";

    $updates = [];
    
    if (!empty($capacidad)) {
        $updates[] = "capacidad='$capacidad'";
    }
    
    if (!empty($lugar)) {
        $updates[] = "lugar='$lugar'";
    }
    
    if (!empty($archivo)) {
        $updates[] = "foto='$archivo'";
    }
    
    
    $query .= implode(', ', $updates);
    
    
    if (!empty($updates)) {
        $query .= " WHERE id='$id'";
    
        $resultado = $conexion->query($query);
    
        if ($resultado) {
            header("Location: VerEspacio.php?status=success");
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($conexion);
        }
    } else {
        header("Location: VerEspacio.php?status=success");
    }
    