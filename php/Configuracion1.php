<?php

require 'conexion.php';


$id = $_POST['id'];
    $nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$banco = $_POST['banco'];
	$telefono = $_POST['telefono'];
	$viejo = $_POST['viejo'];
	$membresia = $_POST['membresia'];
	



	





	if ($correo != $viejo) {
		
		 // Consulta para contar los correos iguales en la tabla usuarios
		 $sql = "SELECT COUNT(*) AS total_iguales FROM usuarios WHERE email = '$correo'";
		 $result = mysqli_query($conexion, $sql);
	 
		 if ($result) {
			 $row = mysqli_fetch_assoc($result);
			 $total_iguales = $row['total_iguales'];

			 echo "Hay $total_iguales correos iguales en la tabla.";
			 if ($total_iguales >= 1) {

				header("Location: configuracion.php?id=$id&status=email");  exit();
			 }
			
			
		 }
		


	} 

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



       


    // Insertar el usuario en la base de datos
	$query = "UPDATE usuarios SET ";

	if (!empty($nombre)) {
	  $query .= "institucion='$nombre', ";
	}
	
	
	  if (!empty($correo)) {
		$query .= "email='$correo', ";
	  }

	  if (!empty($telefono)) {
		$query .= "phone='$telefono', ";
	  }

	   if (!empty($banco)) {
		$query .= "banco='$banco', ";
	  }
	     if (!empty($membresia)) {
		$query .= "membresia='$membresia', ";
	  }


	  if (!empty($archivo)) {
		$query .= "foto='$archivo', ";
	  }


	
	// Eliminar la última coma
	$query = substr($query, 0, -2);
	
	
	$query .= " WHERE id='$id'";
	
	$resultado = $conexion->query($query);

    

    if ($resultado) {
        header("Location: Configuracion.php?id=$id&status=success");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>