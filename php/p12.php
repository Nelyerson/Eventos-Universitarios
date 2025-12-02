<?php

require 'conexion.php';






// Obtener el correo electrónico del formulario

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$correo = $_POST['correo'];

$sql = "SELECT * FROM usuarios WHERE email = '$correo'";
$resultado = mysqli_query($conexion, $sql);

// Comprobar si se encontró el nombre
if (mysqli_num_rows($resultado) == 0) {
  header("Location: recuperar.php?status=usuarioerror");
} else {
    // El nombre se encontró en la base de datos, realizar las acciones necesarias

    $fecha_expiracion = date('Y-m-d H:i:s', strtotime('+10 minutes'));


function generarCodigo() {
    $codigo = "";
    for ($i = 0; $i < 6; $i++) {
      $codigo .= rand(0, 9);
    }
    return $codigo;
  }
  
  // Generar el código
$codigo = generarCodigo();

$sql = "UPDATE usuarios SET codigo = '$codigo', exp = '$fecha_expiracion' WHERE email = '$correo'";
$resultado = mysqli_query($conexion,$sql);

$query = "SELECT * FROM usuarios WHERE email= '$correo' AND disp=0 ";
$resultado2=$conexion->query($query);
$row2 = $resultado2->fetch_assoc();

$username= $row2['username'];
$code= $row2['codigo'];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


require 'php/Exception.php';
require 'php/PHPMailer.php';
require 'php/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp-relay.gmail.com';                   
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'nestormontiel0309@gmail.com';   
    $mail->Password   = 'nestor30460082';                      
    $mail->Port       = 465;                                  

    //Recipients
    $mail->setFrom('nestormontiel0309@gmail.com', 'Eventos');
    $mail->addAddress( $correo, 'usuario');     //Add a recipient
 
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Tu codigo de recuperacion';
    $mail->Body    = '<center><h1>Eventos</h1>
    
    ¡Hola!' . $username . '!
    
    Has solicitado un restablecimiento de contraseña para tu cuenta en Eventos.
    
    Para continuar, debes introducir este codigo en la pagina para cambiar la contraseña <br>

    <h1>' . $code . '</h1> <br>

    
   
    <br>
    Este Codigo se expira en 10 minutos
    
    </center>';  

    $mail->AltBody = 'Eventos - Tu codigo de recuperacion';

    $mail->send();
    header("Location: recuperar23.php?correo=$correo");
} catch (Exception $e) {
  header("Location: recuperar.php?status=corro");
}


   
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>


