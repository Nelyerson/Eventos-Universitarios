<?php require 'conexion.php';



$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$funda=$_POST['funda'];
$ide= $_POST['ide'];
$tutorial= '2';







	if ($_FILES["archivo"]["error"] === 0) {

		$permitidos = array("image/png", "image/jpg", "image/jpeg", "application/pdf");
		$limite_kb = 1024; //1 MB
	
		if (in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 3000) {
	
			$ruta = 'files/' . $dni . '/';
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
			header("Location: photomessaje.php"); exit ();
		}
	}
	
	   
  
    // Insertar el usuario en la base de datos
	$query = "UPDATE usuarios SET ";

	if (!empty($nombre)) {
	  $query .= "institucion='$nombre', ";
	}
	
	
	  if (!empty($funda)) {
		$query .= "fundacion='$funda', ";
	  }

	  if (!empty($direccion)) {
		$query .= "direccion='$direccion', ";
	  }

	  if (!empty($tutorial)) {
		$query .= "tutorial='$tutorial', ";
	  }

	  if (!empty($archivo)) {
		$query .= "foto='$archivo', ";
	  }


	
	// Eliminar la última coma
	$query = substr($query, 0, -2);
	
	
	$query .= " WHERE id='$ide'";
	
	$resultado = $conexion->query($query);

    

    if ($resultado) {
        header("Location: homess.php?status=success");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }



 ?>