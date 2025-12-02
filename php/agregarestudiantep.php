<?php require 'conexion.php';


session_start();



$dni=$_POST['dni'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$sexo=$_POST['sexo'];
$condicion=$_POST['discapacidad'];
$telefono= $_POST['telefono'];
$pnf= $_POST['pnf'];
$direccion= $_POST['direccion'];
$user=$_POST['user'];
$ide=$_POST['ide'];

date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d H:i:s");



$query = "SELECT * FROM estudiantes WHERE dni= '$dni'";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();

	if (mysqli_num_rows($resultado) > 0 ){
		header("Location: listadeestudiantes.php?status=cedula"); exit ();

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
					header("Location: listadeestudiantes.php?status=fotoerror"); exit ();
				}
			} else {
				header("Location: listadeestudiantes.php?status=fotoerror"); exit ();
			}
		} else {
			header("Location: listadeestudiantes.php?status=fotoerror"); exit ();
		}
	}
	
	   
   

if($dni!=null && $apellidos!=null && $nombres!=null && $telefono!=null && $direccion!=null && $condicion!=null && $archivo!=null && $pnf!=null)
{
    $sql = "INSERT INTO cronologia (id, accion1, accion2, accion3) VALUES (NULL,'Usuario $user agrego un estudiante llamado $nombres','$user','$fechaHoraActual')";
    $resultado2 = mysqli_query($conexion,$sql);

	
       $sql = "INSERT INTO estudiantes (dni,nombres,apellidos, sexo, telefono,direccion,discapacidad,foto,ide,pnf,graduando,firma,paquete,acto,medalla) VALUES ('$dni','$nombres','$apellidos','$sexo','$telefono','$direccion','$condicion','$archivo','$ide','$pnf','No','No','No','No','No')";
       $resultado = mysqli_query($conexion,$sql);
   
	
       if ($resultado) {
        header("Location: ListaDeEstudiantes.php");
    } 

}else{
	   $_SESSION['mensaje']="0";
	   header("student.php");
	   } 
	   
		  


 ?>