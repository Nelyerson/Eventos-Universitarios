<?php require 'conexion.php';


session_start();


$id= $_REQUEST['id'];
$dni=$_POST['dni'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$condicion=$_POST['discapacidad'];
$telefono= $_POST['telefono'];
$pnf= $_POST['pnf'];
$direccion= $_POST['direccion'];


$query = "SELECT * FROM estudiantes WHERE dni= '$dni'";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();

	if (mysqli_num_rows($resultado) > 0 ){
		header("Location: cedulaerrormessaje.php"); exit ();

	}
    
    
    
    $query = "UPDATE estudiantes SET dni = '$dni', nombres='$nombres' , apellidos='$apellidos', discapacidad='$condicion', telefono='$telefono', pnf='$pnf', direccion='$direccion' WHERE id='$id'";
    
    $resultado = mysqli_query($conexion, $query);
    
    if ($resultado) {
        header("Location: SuperListaDeEstudiantes.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }
    
    ?>