<?php

require 'conexion.php';


    $id= $_REQUEST['id'];
    $nombre = $_POST['nombre'];
    $cupos = $_POST['cupos'];
    $tipo = $_POST['tipo'];
    $fechai = $_POST['fechai'];
    $fechac = $_POST['fechac'];
    $cupos = $_POST['cupos'];

    $id_insert = $conn->insert_id;

 
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
		header("Location: photomessaje.php"); exit ();
	}
}

       



    

    $query = "UPDATE eventos SET nombre = '$nombre', cupos='$cupos' , tipo='$tipo', fechai='$fechai', fechac='$fechac', cupos='$cupos', foto = CASE WHEN '$archivo' <> '' THEN '$archivo' ELSE foto END WHERE id = '$id'";

    if ($resultado) {
        header("Location: Superhomess.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }


?>