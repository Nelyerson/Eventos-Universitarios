<?php

require 'conexion.php';


    $id= $_REQUEST['id'];
    $nombre = $_POST['Nombre'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $Nivel = $_POST['Nivel'];
    $Contacto = $_POST['Contacto'];

    

    $query = "UPDATE usuarios SET username = '$nombre', password='$password' , email='$email', privilegio='$Nivel', phone='$Contacto' WHERE id='$id'";

    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        header("Location: SuperVer_Usuarios.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }

?>