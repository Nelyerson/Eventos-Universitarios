<?php

date_default_timezone_set('America/Caracas');
require 'conexion.php';
$conn= $conexion;
    $nombre = $_POST['nombre']; //nombre de estudiante
    $dni = $_POST['dni']; //nombre de estudiante
    $id = $_POST['id']; // id del estudiante
    $lista = $_POST['lista']; // id del evento en la tabla lista
    $tipo = $_POST['tipo']; // tipo del evento
    $idvento = $_POST['idevento']; //id del evento
    $idventodos = $_POST['idevento']; //id del evento
    $fechaHoraActual = date("Y-m-d H:i:s");
    $fechaHoraActual1 = date("H:i:s");
    $horac = $_POST['horavento'];

echo $fechaHoraActual1;


    $query15 = "SELECT * FROM asistencia WHERE dni= '$dni' and  ide='$idventodos'";
    $resultado=$conexion->query($query15);
    $row15 = $resultado->fetch_assoc();
    
    $idee= $row15 ['id'];
    
        
        $query = "SELECT * FROM asistencia WHERE dni= '$dni' and  ide='$idventodos'";
$resultado=$conexion->query($query);
$row12 = $resultado->fetch_assoc();

$asistencia1= $row12 ['asistencia'];

        $query3 = "UPDATE eventos SET asis = asis + 1 WHERE id='$idventodos'";
        $resultado=$conexion->query($query3);
        
        
        $query5 = "UPDATE asistencia SET asistencia = '$asistencia1' + 1 WHERE ide='$idventodos' and dni= '$dni'";
        $resultado=$conexion->query($query5);     
    
    
        $query = "SELECT * FROM asistencia WHERE dni= '$dni' AND ide= '$idvento'";
        $resultado=$conexion->query($query);
        $row11 = $resultado->fetch_assoc();
    
        $asis_estudiante= $row11 ['asis_estudiante'] ; 
   
    $query5 = "UPDATE asistencia SET asis_estudiante = asis_estudiante + 1 WHERE ide='$idventodos' and dni= '$dni'";
    $resultado=$conexion->query($query5);
    
    
 


switch ($tipo) {
    case 'Firma del libro':
        $numero = 'Firma';
        break;
    case 'Acta de grado':
        $numero = 'acto';
        break;
    case 'Imposision de medalla':
        $numero = 'medalla';
        break;
    case 'Otro':
        $numero = 'Otro';
        break;
            
        
  
    default:
        $numero = 0; 


}



if($horac > $fechaHoraActual1){

$asistencia = "Presente";
echo $asistencia;
echo $lista;
}else  {
    $asistencia = "Rezagado";
    echo $asistencia;
}

$query = "SELECT asistencia FROM asistencia WHERE dni= '$dni' and  ide='$idventodos'";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();

$asistencia1= $row ['asistencia'];


$query5 = "UPDATE asistencia SET fecha = '$fechaHoraActual' WHERE dni= '$dni' and  ide='$idventodos'";
$resultado=$conexion->query($query5);


$query5 = "UPDATE asistencia SET asistencial = '$asistencia' WHERE dni= '$dni' and  ide='$idventodos'";
$resultado=$conexion->query($query5);






    if($numero == 'acto'){


    $query3 = "UPDATE estudiantes SET $numero = 'Si' WHERE id='$id'";
    $resultado=$conexion->query($query3); 

    $query6 = "UPDATE estudiantes SET graduando = 'Si' WHERE id='$id'";
    $resultado=$conexion->query($query6); 

    if ($resultado) {
        header("Location: qr.php?id= ". $idee);exit;
    } else {
        header("Location: error.php");exit;
    }

   
    exit ();
    }
    $query = "UPDATE estudiantes SET $numero = 'Si' WHERE id='$id'";
    $resultado=$conexion->query($query);

    $query = "UPDATE estudiantes SET $numero = 'Si' WHERE id='$id'";
    $resultado=$conexion->query($query);


    if ($resultado) {
        header("Location: qr.php?id= ". $idee);exit;
    } else {
        header("Location: error.php");
    }

?>
