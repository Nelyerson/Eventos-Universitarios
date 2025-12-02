<?php

require 'conexion.php';


$id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $cupos = $_POST['cupos'];
    $tipo = $_POST['tipo'];
    $fechai = $_POST['fechai'];
    $fechac = $_POST['fechac'];
    $ubicacion = $_POST['ubicacion'];
	$user = $_POST['user'];

	
$query = "UPDATE espacios SET disponibilidad = 'Ocupado' WHERE lugar = '$ubicacion'";
$resultado = $conexion->query($query);




	

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
		header("Location: homess.php?status=fotoerror"); exit ();
	}
}


$sql = "INSERT INTO cronologia (id, accion1) VALUES (NULL,'Usuario $user modifico un evento llamado $nombre')";
$resultado = mysqli_query($conexion,$sql);
       


    // Insertar el usuario en la base de datos
	$query = "UPDATE eventos SET ";

	if (!empty($nombre)) {
	  $query .= "nombre='$nombre', ";
	}
	
	if (!empty($cupos)) {
	  $query .= "cupos='$cupos', ";
	}
	
	if (!empty($tipo)) {
	  $query .= "tipo='$tipo', ";
	}

	if (!empty($fechai)) {
		$query .= "fechai='$fechai', ";
	  }

	  if (!empty($fechac)) {
		$query .= "fechac='$fechac', ";
	  }

	  if (!empty($cupos)) {
		$query .= "cupos='$cupos', ";
	  }

	  if (!empty($archivo)) {
		$query .= "foto='$archivo', ";
	  }

	  if (!empty($ubicacion)) {
		$query .= "espacio='$ubicacion', ";
	  }
	
	
	// Eliminar la última coma
	$query = substr($query, 0, -2);
	
	
	$query .= " WHERE id='$id'";
	
	$resultado = $conexion->query($query);

    

    if ($resultado) {
        header("Location: homess.php?status=success");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>