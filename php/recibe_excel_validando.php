<?php
require('config.php');
require 'conexion.php';
$con = $conexion;

require 'vendor/autoload.php'; // PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\IOFactory;

$evento = $_POST['evento'];
$nombrevento = $_POST['nombrevento'];

$archivo = $_FILES['dataCliente']['tmp_name'];
$tipoArchivo = $_FILES['dataCliente']['type'];

$allowed = [
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    'application/vnd.ms-excel'
];

if (!in_array($tipoArchivo, $allowed)) {
    header("Location: detalles.php?id=$evento&status=tipo_invalido");
    exit();
}

// Leer archivo XLSX
$documento = IOFactory::load($archivo);
$hoja = $documento->getActiveSheet();
$lineas = $hoja->toArray();

// Validar columnas
$encabezadosEsperados = ["Nombre", "Apellido", "DNI", "Correo", "Celular"];
if ($lineas[0] !== $encabezadosEsperados) {
    header("Location: detalles.php?id=$evento&status=errordos");
    exit();
}

$i = 0;

foreach ($lineas as $linea) {

    if ($i != 0) {

        list($nombre, $apellido, $dni, $correo, $celular) = $linea;

        if (!empty($dni)) {
            $queryEstudiante = "SELECT id, discapacidad, sexo FROM estudiantes WHERE dni = '$dni'";
            $resultEstudiante = mysqli_query($con, $queryEstudiante);
            $rowEstudiante = mysqli_fetch_assoc($resultEstudiante);

            $idEstudiante = $rowEstudiante['id'] ?? null;
            $disca = $rowEstudiante['discapacidad'] ?? null;
            $genero = $rowEstudiante['sexo'] ?? null;

            if ($idEstudiante === null || $idEstudiante == 0) {
                header("Location: detalles.php?id=$evento&status=error");
                exit();
            }
        }

        $cant_duplicidad = 0;
        if (!empty($celular)) {
            $checkemail_duplicidad = "SELECT celular FROM asistencia WHERE celular='$celular' AND ide = $evento";
            $ca_dupli = mysqli_query($con, $checkemail_duplicidad);
            $cant_duplicidad = mysqli_num_rows($ca_dupli);
        }

        if ($cant_duplicidad == 0) {
            
            $insertarData = "INSERT INTO asistencia(
                nombre, apellido, dni, correo, celular,
                ide, idestudiante, disc, genero
            ) VALUES(
                '$nombre', '$apellido', '$dni', '$correo', '$celular',
                '$evento', '$idEstudiante', '$disca', '$genero'
            )";
            mysqli_query($con, $insertarData);

            $insertarQR = "INSERT INTO qr(det, ide, idestudiante)
                           VALUES('$nombrevento', '$evento', '$idEstudiante')";
            mysqli_query($con, $insertarQR);

        } else {

            $updateData = "UPDATE asistencia SET 
                nombre = '$nombre',
                apellido = '$apellido',
                dni = '$dni',
                correo = '$correo',
                celular = '$celular',
                ide = '$evento',
                idestudiante = '$idEstudiante',
                disc = '$disca',
                genero = '$genero'
                WHERE celular = '$celular'";
            mysqli_query($con, $updateData);
        }
    }
    $i++;
}

header("Location: detalles.php?id=$evento&status=exito");
?>
