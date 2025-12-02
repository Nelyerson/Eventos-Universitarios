<?php

require 'conexion.php';



    $code= 1;
    $referencia = $_POST['referencia'];
    $fecha = date('Y-m-d');

    $user = $_POST['nombres'];
    $ide = $_POST['ide'];
    $idee = $_POST['idee'];




    if ($_FILES["archivo"]["error"] === 0) {
    
        $permitidos = array("image/png", "image/jpg", "image/jpeg", "application/pdf");
        $limite_kb = 3000; //1 MB
    
        if (in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 3000) {
        
            $ruta = 'files/' . $code  . '/';
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
                    echo "Error al guardar archivo";
                }
            } else {
                echo "Archivo ya existe";
            }
        } else {
            echo "Archivo no permitido o excede el tamaño";
        }
    }
   

    // Insertar el usuario en la base de datos

    $sql = "INSERT INTO cronologia (id, accion1, nombre, accion3) VALUES (NULL,'Ha notificado sobre la realizacion de un pago','$user', 'El usuario')";
    $resultado2 = mysqli_query($conexion,$sql);

     $sql2 = "INSERT INTO pagos (id, referencia,foto,code,nombre,status1,ide, fecha, idee) VALUES (NULL,'$referencia','$archivo','$code','$user','Pendiente','$ide','$fecha', '$idee')";
    $resultado = mysqli_query($conexion,$sql2);

 $query = "UPDATE estudiantes SET referencia = '$referencia' WHERE nombres = '$user'";
$resultado = $conexion->query($query);

    $sql3 = "INSERT INTO noti (id, texto,fecha,accion,ide) VALUES (NULL,'Ha sido notificado de un pago del usuario','$fecha','$user','$idee')";
    $resultado = mysqli_query($conexion,$sql3);

    if ($resultado) {
        header("Location: Espera.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }



    $resultado = mysqli_query($conexion,$sql);

    $query = "SELECT * FROM usuarios WHERE privilegio = '0' AND disp=0 ";
    $resultado2=$conexion->query($query);
    $row2 = $resultado2->fetch_assoc();
    
    $username= $row2['username'];
    $code= $row2['codigo'];
    $correo = $row2['email'];
    
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'php/Exception.php';
    require 'php/PHPMailer.php';
    require 'php/SMTP.php';
    
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings                
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp-mail.outlook.com';                   
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'nestorgabriel011@hotmail.com';   
        $mail->Password   = 'Marypili.06';                      
        $mail->Port       = 587;                                  
    
        //Recipients
        $mail->setFrom('nestorgabriel011@hotmail.com', 'Sporting Center');
        $mail->addAddress( $correo, 'usuario');     //Add a recipient
     
       
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Notificacion de pago';
        $mail->Body    = '<center><h1>Sporting Center</h1>
        
        ¡Hola! ' . $username . '
        
        La institucion  ' . $escuela . '  ha realizado un pago
        
        Este es el numero de la referencia  <br>
    
        <h1>' . $referencia . '</h1> <br>
    
        
       
        
        </center>';  
    
        $mail->AltBody = 'Sporting Center - Tu codigo de recuperacion';
    
        $mail->send();
        header("Location: platamessaje.php");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>