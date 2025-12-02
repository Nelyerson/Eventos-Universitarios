<?php require 'conexion.php';


session_start();


$id= $_REQUEST['id'];
$dni=$_POST['DNI'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$Especialidad=$_POST['Especialidad'];
$telefono= $_POST['Telefono'];
$direccion= $_POST['Direccion'];






$query = "UPDATE profesores SET dni = '$dni', nombre='$nombres' , apellido='$apellidos', pnf='$Especialidad', telefono='$telefono', direccion='$direccion' WHERE id='$id'";

$resultado = mysqli_query($conexion, $query);

if ($resultado) {
	header("Location: SuperVer_Personal.php");
} else {
	echo "Error al registrar el usuario: " . mysqli_error($conexion);
}

?>