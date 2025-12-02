<?php

date_default_timezone_set('America/Caracas');
require 'conexion.php';
$conn= $conexion;
    $dni = $_POST['dni']; //nombre de estudiante
    $idvento = $_POST['idevento']; //id del evento


    $query = "SELECT * FROM asistencia WHERE dni= '$dni' AND ide= '$ideven'";
    $resultado=$conexion->query($query);
    $row11 = $resultado->fetch_assoc();

    $asis_estudiante= $row11 ['asis_estudiante'] ; 




    
   
    $query5 = "UPDATE asistencia SET asis_estudiante = '$asis_estudiante' + 1 WHERE ide='$idventodos' and dni= '$dni'";
    $resultado=$conexion->query($query5);
    







    ?>