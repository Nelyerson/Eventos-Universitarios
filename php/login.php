<?php
require 'conexion.php';
session_start();
if (isset($_POST['login'])) {
    
    error_reporting(0);
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    $_SESSION['username']= $usuario;
    

    // Buscar al usuario en la base de datos
    $sql = "SELECT * FROM usuarios WHERE username = '$usuario'";
    $resultado = mysqli_query($conexion, $sql);
    $rows = $resultado->num_rows;


    if ($rows >= 0) {
        $row = $resultado->fetch_assoc();

        if ($row['disp'] != '0') {
            $_SESSION['usuario'] = $row['username'];
        
        
            header("Location: inicio.php?status=usuarioerror");
          
            exit();
        }
        if (!empty($_POST['password'])) {
        
           

            // Verificar la contraseña del usuario
            if (password_verify($_POST['password'], $row['password'])) {
              
                // Iniciar sesión al usuario
                session_start();
                $_SESSION['usuario'] = $row['username'];
                $_SESSION['privilegio'] = $row['privilegio'];

                  // Verificar el estado de la cuenta
                  if ($row['activo'] == '0') {
                    $_SESSION['usuario'] = $row['username'];
                    header('Location: Suspender.php');
                    exit();
        
               
                   
                    }
          

                if ($row['privilegio'] == 1) {
                    $sql = "SELECT tutorial FROM usuarios WHERE username = '$usuario'";
                    $resultado = mysqli_query($conexion, $sql);
                    $valor_tutorial = mysqli_fetch_assoc($resultado)['tutorial'];
                    
                    // Redireccionamiento según el valor
                    if ($valor_tutorial == 0) {
                    header('Location: tut.php');
                    // MIENTRAS TANTO CAMBIAR AL TUTORIAL DESPUES
                    } else {
                      header('Location: homesss.php');
                    }
                   
                } else {
                   

                    
                    // Obtener el valor de la tabla tutorial
                    $sql = "SELECT tutorial FROM usuarios WHERE username = '$usuario'";
                    $resultado = mysqli_query($conexion, $sql);
                    $valor_tutorial = mysqli_fetch_assoc($resultado)['tutorial'];
                    
                    // Redireccionamiento según el valor
                    if ($valor_tutorial == 1) {
                      header('Location: tut.php');
                    // MIENTRAS TANTO CAMBIAR AL TUTORIAL DESPUES
                    } else {
                      header('Location: homesss.php');
                      // MIENTRAS TANTO CAMBIAR AL TUTORIAL DESPUES
                    }
                    
                
                    
                }
            } else {
             
              header("Location: inicio.php?status=usuarioerror");
                
            }
        } else {
          
          header("Location: inicio.php?status=usuarioerror");
          
        }
    } else {
      
      
      
    

    }

}
?>
