<?php

require 'conexion.php';
$conn= $conexion;
  
    $nombre = $_POST['nombre'];
    $user = $_POST['user'];
    $cupos = $_POST['cupos'];
    $tipo = $_POST['tipo'];
    $campo = $_POST['campo'];
    $familia = $_POST['familia'];
    $fechai = $_POST['fechai'];
    $fechac = $_POST['fechac'];
    $horai = $_POST['horai'];
    $horac = $_POST['horac'];
    $ide = $_POST['ide'];
    $descrip = $_POST['descrip'];
    $pnf = $_POST['pnf'];


    date_default_timezone_set('America/Caracas');
    $fechaHoraActual = date("Y-m-d H:i:s");
    

$colores = array("#5969ff", "#ff407b", "#ffc750");
$indiceAleatorio = array_rand($colores);
$color = $colores[$indiceAleatorio];





$totalfamiliares = $familia * $cupos;




echo $campo;


if ($fechac < $fechai) {
    header("Location: AgregarEvento.php?status=fecha");   exit();
}





$sql = "SELECT MAX(id) AS ultimo_id FROM eventos";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    echo "El último ID es: " . $fila['ultimo_id'];
    $nuevo_id = $fila['ultimo_id'] + 1;
} else {
    echo "No se encontraron resultados.";
}


   
    if (isset($_POST['prof'])) {
        $opciones = $_POST['prof']; // Esto es un array de las opciones seleccionadas
        
        // Guardar como una cadena separada por comas
        $opciones_seleccionadas = implode(',', $opciones);
        
        // Insertar en la base de datos
        $sql = "INSERT INTO profes (nombre,ide) VALUES ('$opciones_seleccionadas',' $nuevo_id')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Opciones guardadas correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "No se seleccionó ninguna opción.";
    }





switch ($tipo) {
    case 'Firma del libro':
        $numero = 1;
        break;
    case 'Acta de grado':
        $numero = 2;
        break;
    case 'Imposision de medalla':
        $numero = 3;
        break;
    case 'Otro de medalla':
        $numero = 4;
        break;
            
        
  
    default:
        $numero = 0; 
}


$sql = "SELECT MAX(id) AS ultimo_id FROM eventos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $ultimo_id = $row["ultimo_id"];
    echo $ultimo_id;
} else {
   
}
 
    $id_insert = $conn->insert_id;

 
    if ($_FILES["archivo"]["error"] === 0) {
    
        $permitidos = array("image/png", "image/jpg", "image/jpeg", "application/pdf");
        $limite_kb = 1024; //1 MB
    
        if (in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 3000) {
        
            $ruta = 'files/' . $nombre  . '/';
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
                    header(header: "Location: AgregarEvento.php?status=fotoerror"); exit ();
                }
            } else {
                header("Location: AgregarEvento.php?status=fotoerror"); exit ();
            }
        } else {
            header("Location: AgregarEvento.php?status=fotoerror"); exit ();
        }
    }

    // Insertar el usuario en la base de datos
    $sql = "INSERT INTO cronologia (id, accion1, accion2, accion3) VALUES (NULL,'Usuario $user agrego un evento llamado $nombre', '$user', '$fechaHoraActual')";
    $resultado = mysqli_query($conexion,$sql);

    $sql = "INSERT INTO noti (id, texto, ide, fecha, accion) VALUES (NULL,'Hay un nuevo evento llamado $nombre', '$ide', '$fechaHoraActual', '1')";
    $resultado = mysqli_query($conexion,$sql);

    $sql = "INSERT INTO eventos (nombre, espacio, fechai, fechac, horai,horac, foto, ide, tipo, tipoid,cupos,dispon,color,estatus,familia,famdisp, detalle, pnf) VALUES ('$nombre','$campo','$fechai','$fechac','$horai', '$horac','$archivo','$ide','$tipo','$numero','$cupos','$cupos','$color','Vigente','$familia','$totalfamiliares','$descrip','$pnf')";
    $resultado = mysqli_query($conexion,$sql);



$query = "UPDATE espacios SET disponibilidad = 'Ocupado' WHERE lugar = '$campo'";
$resultado = $conexion->query($query);

$query = "UPDATE espacios SET tempo = '$fechac' WHERE lugar = '$campo'";
$resultado = $conexion->query($query);



    if ($resultado) {
        header("Location: homess.php");
    } else {
        header("Location: homess.php");
    }


?>