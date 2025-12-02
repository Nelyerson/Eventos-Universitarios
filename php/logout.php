<?php
session_start(); // Iniciar la sesión

// Cerrar la sesión eliminando todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al formulario de inicio de sesión
header('Location: inicio.php');
exit();
