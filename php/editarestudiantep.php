<?php require 'conexion.php';



$id = $_POST['id'];
$dni=$_POST['dni'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$condicion=$_POST['discapacidad'];
$telefono= $_POST['telefono'];
$pnf= $_POST['pnf'];
$direccion= $_POST['direccion'];
$user= $_POST['user'];
$activo = $_POST['activo'];

date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d H:i:s");



$query = "SELECT * FROM estudiantes WHERE dni= '$dni'";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();


if (mysqli_num_rows($resultado) > 0) {
    // Obtener el primer resultado (asumiendo que quieres comparar con el primero)
    $fila = mysqli_fetch_assoc($resultado);
    $id_coincidente = $fila['id'];

    // Comparar el ID coincidente con el ID del usuario actual
    if ($id_coincidente == $dni) {
        header("Location: cedula.php");
        exit();
    }
}
    if ($activo === "Activar") {
    $activo_numerico = 1;
} elseif ($activo === "Suspender") {
    $activo_numerico = 0;
} else {
    // Manejar caso donde el valor no sea válido
    echo "Nivel no válido";
    exit; // O realizar otra acción, como redirigir o mostrar un mensaje de error
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
		header("Location: ListaDeEstudiantes.php?status=fotoerror"); exit ();
	}
}



$sql = "INSERT INTO cronologia (id, accion1, accion2, accion3) VALUES (NULL,'Usuario $user modifico al estudiante $nombre','$user','$fechaHoraActual')";
$resultado = mysqli_query($conexion,$sql);

    
    
    // Insertar el usuario en la base de datos
	$query = "UPDATE estudiantes SET ";

	if (!empty($nombre)) {
	  $query .= "nombres='$nombre', ";
	}
	
	if (!empty($apellidos)) {
	  $query .= "apellidos='$apellidos', ";
	}
	if (!empty($sexo)) {
		$query .= "sexo='$sexo', ";
	  }
	  
	
	if (!empty($condicion)) {
	  $query .= "discapacidad='$condicion', ";
	}

	if (!empty($telefono)) {
		$query .= "telefono='$telefono', ";
	  }

	  if (!empty($pnf)) {
		$query .= "pnf='$pnf', ";
	  }

	  if (!empty($direccion)) {
		$query .= "direccion='$direccion', ";
	  }

     if (isset($activo_numerico)) {
        $query .= "activo='$activo_numerico', ";
	 }
	  if (!empty($archivo)) {
		$query .= "foto='$archivo', ";
	  }
	
	// Eliminar la última coma
	$query = substr($query, 0, -2);
	
	
	$query .= " WHERE id='$id'";
	
	$resultado = $conexion->query($query);

    

    if ($resultado) {
        header("Location: ListaDeEstudiantes.php?status=success");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }

    ?>