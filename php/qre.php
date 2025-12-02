<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>
<?php


require 'barra2.php';
require 'conexion.php';
$id= $_REQUEST ['id'];
$query = "SELECT * FROM qr WHERE id= '$id' ";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();

$ides = $row['idestudiante'];

$query = "SELECT * FROM estudiantes WHERE id= $ides";
$resultado=$conexion->query($query);
$row2 = $resultado->fetch_assoc();


$username = $_SESSION['usuario'];
$query = "SELECT * FROM usuarios WHERE username= '$username'";
$resultado=$conexion->query($query);
$row3 = $resultado->fetch_assoc();




?>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">

            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Informacion del pase</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homess.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Agregar Evento</li>

                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
      
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                        <h2 class="text-center">Nombre del estudiante</h2>
                        <h3 class="text-center">-<?php echo $row2 ['nombres'] ; ?> <?php echo $row2 ['apellidos'] ; ?>-</h3>
                        <h2 class="text-center">Cedula</h2>
                        <h3 class="text-center">-<?php echo $row2 ['dni'] ; ?>-</h3>
                        <h2 class="text-center">PNF</h2>
                        <h3 class="text-center">-<?php echo $row2 ['pnf'] ; ?>-</h3>
                        <h2 class="text-center">-Ha realizado la firma del libro?-</h2> <br>
                        <h3 class="text-center">-<?php echo $row2 ['firma'] ; ?>-</h3>
                        <h2 class="text-center">-Ha realizado la imposision de medalla?-</h2> <br>
                        <h3 class="text-center">-<?php echo $row2 ['medalla'] ; ?>-</h3>
                        <h2 class="text-center">-Es estudiante graduando?-</h2> <br>
                        <h3 class="text-center">-<?php echo $row2 ['graduando'] ; ?>-</h3>
                        <h2 class="text-center">-Ha pagado por el paquete?-</h2> <br>
                        <h3 class="text-center">-<?php echo $row2 ['paquete'] ; ?>-</h3>
                        <h3 class="text-center">boton</h3>





                       
                            <div class="card-body">
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>