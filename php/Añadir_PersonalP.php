<?php require 'conexion.php';


session_start();


$user = $_POST['user'];
$dni=$_POST['dni'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$Especialidad=$_POST['Especialidad'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$ide= $_POST['ide'];

date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d H:i:s");


$query = "SELECT * FROM estudiantes WHERE dni= '$dni'";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();

	if (mysqli_num_rows($resultado) > 0 ){
		header("Location: cedulaerrormessaje.php"); exit ();

	}





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
	
	   
   

if($dni!=null && $apellidos!=null && $nombres!=null && $telefono!=null && $direccion!=null  && $archivo!=null )
{
    $sql = "INSERT INTO cronologia (id, accion1, accion2, accion3) VALUES (NULL,'creo un estudiante llamado','$nombres','$user', '$fechaHoraActual' )";
    $resultado2 = mysqli_query($conexion,$sql);

	
       $sql = "INSERT INTO profesores (dni,nombre,apellido,telefono,direccion,foto,ide,pnf) VALUES ('$dni','$nombres','$apellidos','$telefono','$direccion','$archivo','$ide','$Especialidad')";
       $resultado = mysqli_query($conexion,$sql);
   
	
       if ($resultado) {
        header("Location: homess.php");
    } 

}else{
	   $_SESSION['mensaje']="0";
	   header("student.php");
	   } 
	   
		  


 ?>