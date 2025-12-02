<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agregar Lista</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>
<?php
include 'barra.php';

require 'conexion.php';
$id= $_REQUEST ['id'];
$query = "SELECT * FROM estudiantes WHERE id= '$id'";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();
?>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">

            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Agregar a <?php echo $row ['nombres']; ?> a la lista</h2>
                          
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homess.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Lista de graduando</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Agregar Lista</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Crear Nueva Lista</h5>
                            <div class="card-body">
                                <form action="agregaralistaP.php?user=super" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">¿<?php echo $row ['nombres']; ?> Ha realizado la firma del libro?</label>
<br>
                                        <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="firma" value="Si" checked="" class="custom-control-input"><span class="custom-control-label">Si</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="firma" value="No" class="custom-control-input"><span class="custom-control-label">No</span>
                                            </label>
                                        
                                      
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">¿Ha <?php echo $row ['nombres']; ?>  pagado el paquete de grado?</label>
<br>
                                        <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="paquete" value="Si" checked="" class="custom-control-input"><span class="custom-control-label">Si</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="paquete" value="No" class="custom-control-input"><span class="custom-control-label">No</span>
                                            </label>
                                        
                                      
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">¿<?php echo $row ['nombres']; ?> va a ir por acto o secretaria?</label>
<br>
                                        <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="acto" value="Acto" checked="" class="custom-control-input"><span class="custom-control-label">Acto</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="acto" value="Secretaria" checked="" class="custom-control-input"><span class="custom-control-label">Secretaria</span>
                                            </label>
                                           
                                        
                                      
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Imposision de medalla</label>
<br>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="medalla" value="Directora" checked class="custom-control-input">
                                            <span class="custom-control-label">Directora</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="medalla" value="Representante" checked class="custom-control-input">
                                            <span class="custom-control-label">Representante</span>
                                        </label>                   
                                    </div>

                                    <input type="text" class="controls" name="id"   style=" display: none;" value="<?php echo $row['id'];?>"maxlength= "3" minlength="1" required="" pattern= "[0-9]+"/>
                                    <button href="student.php" class="btn btn-primary btn-block"><i class="zmdi zmdi-floppy"></i>Agregar</button>
                                    
                                   
                                </form>
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