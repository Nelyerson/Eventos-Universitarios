<?php

require 'conexion.php';
$conn = $conexion;
$con = $conexion;

$ideevento = $_POST['id'];
$cedula = $_POST['cedula'];
$nombrevento = $_POST['nombrevento'];


// Primero, busca el estudiante en la tabla 'estudiantes'
// Es crucial usar comillas simples alrededor de $cedula en la consulta SQL
// para valores de cadena, incluso si son números.
$query_estudiante = "SELECT id, nombres, apellidos, telefono, sexo, discapacidad FROM estudiantes WHERE dni = '$cedula'";
$resultado_estudiante = $conexion->query($query_estudiante);

// Verifica si se encontró el estudiante
if ($resultado_estudiante->num_rows > 0) {
    $row_estudiante = $resultado_estudiante->fetch_assoc();

    $id_estudiante = $row_estudiante['id'];
    $nombres = $row_estudiante['nombres'];
    $apellidos = $row_estudiante['apellidos'];
    $telefono = $row_estudiante['telefono'];
    $sexo = $row_estudiante['sexo'];
    $disc = $row_estudiante['discapacidad'];
    


    // Ahora, verifica si esta cédula ya está registrada para este evento en la tabla 'asistencia'
    $query_check_duplicate = "SELECT COUNT(*) AS count FROM asistencia WHERE dni = '$cedula' AND ide = '$ideevento'";
    $resultado_check_duplicate = $conexion->query($query_check_duplicate);
    $row_check_duplicate = $resultado_check_duplicate->fetch_assoc();

    // Si count es 0, significa que no hay duplicados y podemos insertar
    if ($row_check_duplicate['count'] == 0) {
        $sql_insert = "INSERT INTO asistencia (id, ide, idestudiante, nombre, apellido, celular, genero, dni, disc) VALUES (NULL, '$ideevento', '$id_estudiante', '$nombres', '$apellidos', '$telefono', '$sexo', '$cedula',' $disc')";
        $resultado_insert = mysqli_query($conexion, $sql_insert);
        
        
          $insertarQR = "INSERT INTO qr(det, ide, idestudiante) VALUES('$nombrevento', '$ideevento', '$id_estudiante')";
            mysqli_query($con, $insertarQR);

        // Puedes añadir un mensaje de éxito o manejar errores aquí si lo necesitas
        // if ($resultado_insert) {
        //     echo "Asistencia registrada correctamente.";
        // } else {
        //     echo "Error al registrar asistencia: " . mysqli_error($conexion);
        // }
    } else {
        // Si count es mayor que 0, ya existe un duplicado.
        // No hacemos nada, simplemente redirigimos.
        // echo "La cédula ya está registrada para este evento.";
    }
} else {
 header("Location: detalles.php?id=$ideevento&status=error");

exit();
}

// Siempre redirige al final, sin importar si se insertó o si ya existía.
 header("Location: detalles.php?id=$ideevento&status=good");
exit(); // Es crucial usar exit() después de header() para asegurar la redirección

?>