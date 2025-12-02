<?php require 'conexion.php';


session_start();



$dni=$_POST['DNI'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$Especialidad=$_POST['Especialidad'];
$telefono= $_POST['Telefono'];
$direccion= $_POST['Direccion'];
$user = $_POST['user'];
$ide = $_POST['ide'];

date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d H:i:s");



$query65 = "SELECT * FROM profesores WHERE dni= '$dni'";
$resultado65=$conexion->query($query65);
$row65 = $resultado65->fetch_assoc();

	if (mysqli_num_rows($resultado65) > 0 ){
		header("Location: Ver_personal.php?status=cedula");  exit ();

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
					header("Location: Ver_personal.php?status=fotoerror"); exit ();
				}
			} else {
				header("Location: Ver_personal.php?status=fotoerror"); exit ();
			}
		} else {
			header("Location: Ver_personal.php?status=fotoerror"); exit ();
		}
	}
	
	   
   

if($dni!=null && $apellidos!=null && $nombres!=null && $telefono!=null && $direccion!=null && $Especialidad!=null && $archivo!=null && $direccion!=null)
{
    $sql = "INSERT INTO cronologia (id, accion1, accion2, accion3) VALUES (NULL,'$user creo un personal llamado $nombres','$user', '$fechaHoraActual')";
    $resultado2 = mysqli_query($conexion,$sql);

	
       $sql = "INSERT INTO profesores (dni,nombre,apellido,telefono,direccion,pnf,foto,ide) VALUES ('$dni','$nombres','$apellidos','$telefono','$direccion','$Especialidad','$archivo','$ide')";
       $resultado = mysqli_query($conexion,$sql);
   
	
       if ($resultado) {
        header("Location: ver_personal.php");
    } 

}else{
	   $_SESSION['mensaje']="0";
	   header("Añadir_Personal.php");
	   } 
	   
		  


 ?>