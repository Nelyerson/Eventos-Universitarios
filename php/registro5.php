<?php

require 'conexion.php';

if(isset ($_POST['registro'])) {

    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];
    $correo = $_POST['email'];
 
   
    $phone = $_POST['phone'];
    $activo ='1';
  


    $query = "SELECT * FROM usuarios WHERE username= '$usuario'";
    $resultado=$conexion->query($query);
    $row = $resultado->fetch_assoc();
    
        if (mysqli_num_rows($resultado) > 0 ){
            header("Location: registro.php?status=usuarioerror");  exit ();
    
        }

        $query2 = "SELECT * FROM usuarios WHERE email= '$correo'";
        $resultado2=$conexion->query($query2);
        $row2 = $resultado2->fetch_assoc();
        
            if (mysqli_num_rows($resultado2) > 0 ){
                header("Location: registro.php?status=usuarioerror2"); exit ();
        
            }

          


    // Encriptar la contraseña
    $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);


    // Insertar el usuario en la base de datos

    

    $sql = "SELECT COUNT(*) AS total_usuarios FROM usuarios;";
    $resultado = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_assoc($resultado);
    
    if ($fila['total_usuarios'] > 0) {
        $sql = "INSERT INTO usuarios (username, password, email,phone,tutorial,activo) VALUES ('$usuario', '$contrasena', '$correo' , '$phone',  '1','$activo')";
        $resultado = mysqli_query($conexion,$sql);
    
        if ($resultado) {
           header("Location:inicio.php?status=usuario"); 
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($conexion);
        }
        
     
    } else {
        $sql = "INSERT INTO usuarios (username, password, email,phone,tutorial,activo,privilegio) VALUES ('$usuario', '$contrasena', '$correo' , '$phone',  '1', '1', '1')";
        $resultado = mysqli_query($conexion,$sql);
    
        if ($resultado) {
           header("Location:inicio.php?status=usuario"); 
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($conexion);
        }
    }
    }
    
  


?>