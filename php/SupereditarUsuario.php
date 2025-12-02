<?php

require 'conexion.php';

$id = $_POST['id'];
    $nombre = $_POST['Nombre'];
    $email = $_POST['email'];
    $Nivel = $_POST['Nivel'];
    $activo = $_POST['activo'];
    $Contacto = $_POST['Contacto'];


// Convertir el nivel de texto a un valor numérico
if ($Nivel === "Usuario") {
    $nivel_numerico = 0;
} elseif ($Nivel === "Super Usuario") {
    $nivel_numerico = 1;
} else {
    // Manejar caso donde el valor no sea válido
    echo "Nivel no válido";
    exit; // O realizar otra acción, como redirigir o mostrar un mensaje de error
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


// Ahora $nivel_numerico contiene 0 para "Usuario" y 1 para "Superusuario"

 
    // Insertar el usuario en la base de datos
	$query = "UPDATE usuarios SET ";

	if (!empty($nombre)) {
	  $query .= "username='$nombre', ";
	}
	
	if (!empty($email)) {
	  $query .= "email='$email', ";
	}
    
    if (isset($nivel_numerico)) {
        $query .= "privilegio='$nivel_numerico', ";
    }

     if (isset($activo_numerico)) {
        $query .= "activo='$activo_numerico', ";
    }

	  if (!empty($Contacto)) {
		$query .= "phone='$Contacto', ";
	  }

	
	// Eliminar la última coma
	$query = substr($query, 0, -2);
	
	
	$query .= " WHERE id='$id'";
	
	$resultado = $conexion->query($query);

    

    if ($resultado) {
        header("Location: SuperVer_Usuarios.php?status=success");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }
       
?>