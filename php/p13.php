<?php
require 'conexion.php';

if(isset($_POST['enviar'])) {
    $correo = $_POST['correo'];
    $codigo = $_POST['codigo'];
    $contra = $_POST['contrasena'];
  

    $sql = "SELECT codigo, exp FROM usuarios WHERE email = '$correo'";
$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
  $fila = mysqli_fetch_assoc($resultado);

  // Obtener la fecha actual
  $fecha_actual = date('Y-m-d H:i:s');

  // Comparar la fecha actual con la fecha de expiración
  if ($fecha_actual > $fila['exp']) {
    header("Location: recuperar.php?status=exp");
    echo  date('Y-m-d H:i:s');
  } else {


    if($codigo == $fila ['codigo'] ){
    echo "El código es válido";
    echo  $fila ['codigo'];

        $nueva_contraseña = $_POST['contrasena'];
        $nueva_contraseña = password_hash($nueva_contraseña, PASSWORD_DEFAULT);
        $query = "UPDATE usuarios SET password='$nueva_contraseña' WHERE email='$correo'";
        header("Location:inicio.php?status=contra");
        
        $resultado = mysqli_query($conexion, $query);
  } else {  header("Location: recuperar23.php?correo=$correo");}}

} else {
  echo "Error al obtener el código";
}
} // Aquí se cierra el bloque del if(isset($_POST['enviar']))
?>