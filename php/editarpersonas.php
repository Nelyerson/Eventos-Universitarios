<?php

require 'conexion.php';


$id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $pnf = $_POST['pnf'];
    $telefono = $_POST['telefono'];
    $dni = $_POST['dni'];
    $direccion = $_POST['direccion'];
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
		header("Location: ver_personal.php?status=fotoerror"); exit ();
	}
}

       
$sql = "INSERT INTO cronologia (id, accion1, accion2, accion3) VALUES (NULL,'Usuario $user modifico los datos del personal $nombre', '$user', '$fechaHoraActual')";
    $resultado = mysqli_query($conexion,$sql);


    // Insertar el usuario en la base de datos
	$query = "UPDATE profesores SET ";

	if (!empty($nombre)) {
	  $query .= "nombre='$nombre', ";
	}
	
	if (!empty($apellido)) {
	  $query .= "apellido='$apellido', ";
	}
	
	if (!empty($telefono)) {
	  $query .= "telefono='$telefono', ";
	}

	if (!empty($dni)) {
		$query .= "dni='$dni', ";
	  }

	  if (!empty($direccion)) {
		$query .= "direccion='$direccion', ";
	  }

	  if (!empty($pnf)) {
		$query .= "pnf='$pnf', ";
	  }

	  if (!empty($archivo)) {
		$query .= "foto='$archivo', ";
	  }
	
	
	
      $query = substr($query, 0, -2);
	
	
      $query .= " WHERE id = '$id'";

$resultado = $conexion->query($query);

if ($resultado) {
    header("Location: ver_personal.php?status=success");
} else {
    echo "Error al registrar el usuario: " . mysqli_error($conexion);
}

?>