<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base = "proyedos";


$conexion = mysqli_connect ($servidor, $usuario, $contrasena, $base);


if (!$conexion) {
	echo "no base de datos encontrada";
	exit();
}
















?>