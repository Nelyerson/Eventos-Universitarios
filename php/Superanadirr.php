<?php

require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = mysqli_real_escape_string($conexion, $_POST['Nombre']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $Correo = mysqli_real_escape_string($conexion, $_POST['email']);
    $Nivel = mysqli_real_escape_string($conexion, $_POST['Nivel']);
    $Contacto = mysqli_real_escape_string($conexion, $_POST['Contacto']);

    $query2 = "SELECT * FROM usuarios WHERE email = '$Correo'";
    $resultado2 = mysqli_query($conexion, $query2);

    if (mysqli_num_rows($resultado2) > 0) {
        header("Location: registro.php?status=usuarioerror2");
        exit();
    }

    $archivo = ""; // Inicializar la variable $archivo

    if ($_FILES["archivo"]["error"] === 0) {
        $permitidos = array("image/png", "image/jpg", "image/jpeg", "application/pdf");
        $limite_kb = 1024; // 1 MB

        if (in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 3000) {
            $ruta = 'files/' . $nombre . '/';
            $archivoNombre = $_FILES["archivo"]["name"];
            $extension = pathinfo($archivoNombre, PATHINFO_EXTENSION);
            $archivo = $ruta . uniqid() . "foto." . $extension;

            if (!is_dir($ruta)) {
                mkdir($ruta, 0777, true);
            }

            if (!file_exists($archivo)) {
                $resultado = move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);

                if (!$resultado) {
                    header("Location: photomessaje.php");
                    exit();
                }
            } else {
                header("Location: photomessaje.php");
                exit();
            }
        } else {
            header("Location: photomessaje.php");
            exit();
        }
    }

    // Insertar el usuario en la base de datos
    $sql_cronologia = "INSERT INTO cronologia (accion1, accion2, nombre, accion3) VALUES ('agrego un proximo evento llamado', '$nombre', 'user', 'El usuario')";
    mysqli_query($conexion, $sql_cronologia);

    $sql_usuarios = "INSERT INTO usuarios (username, password, email, phone, privilegio, foto) VALUES ('$nombre', '$password', '$Correo', '$Contacto', '$Nivel', '$archivo')";
    $resultado_usuarios = mysqli_query($conexion, $sql_usuarios);

    if ($resultado_usuarios) {
        header("Location: SuperVer_Usuarios.php");
    } else {
        echo "Error al insertar el usuario: " . mysqli_error($conexion); // Manejo de errores
        // header("Location: Superanadir.php"); // Puedes redirigir a otra página de error
    }
}
?>