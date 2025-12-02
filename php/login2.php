<?php
require 'conexion.php';
session_start();

if (isset($_POST['login'])) {

    $usuario = $_POST['cedula'];
    $contrasena = $_POST['contrasena'];

    // Buscar al usuario en la base de datos
    $sql = "SELECT * FROM estudiantes WHERE dni = '$usuario'";
    $resultado = mysqli_query($conexion, $sql);
    $rows = $resultado->num_rows;

    if ($rows > 0) {
        $row = $resultado->fetch_assoc();
        if ($row['disp'] != '0') {
            $_SESSION['usuario'] = $row['username'];
            header("Location: inicio2.php?status=usuarioerror");
            exit();
        }

        
        // Verificar la contraseña del usuario
        
            // Inicializar la variable de sesión
            $_SESSION['dni'] = $row['dni'];
  // Verificar el estado de la cuenta
                  if ($row['activo'] != '1') {
                    $_SESSION['dni'] = $row['dni'];
                    header('Location: SuspenderE.php');
                    exit();}
            // Redirigir al usuario a la página principal
            header('Location: homestwo.php');
        
    } else {
        header("Location: inicio2.php?status=usuarioerror");
    }
}

?>
