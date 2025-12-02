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
?>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">

            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Agregar Lista de graduando</h2>
                            <p>Crea una nueva lista para los graduando</p>
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
                                <form action="agregarlistaP.php?user=super" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Nombre de la lista</label>
                                        
                                        <input id="inputText3" name="nombre" type="text" class="form-control" maxlength= "40" minlength="5" required="" pattern= "[a-z A-Z]+">
                                    </div>
                                  
                                    
                                            <div class="form-group">
                                                <label for="input-select">PNF</label>
                                                <select class="form-control" id="input-select" name="pnf" required>
                                                    <option>Informatica</option>
                                                    <option>Electronica</option>
                                                </select>
                                            </div>
                           

                                    <div class="form-group">
                                                <label for="inputText4" class="col-form-label">Numeros de Cupos</label>
                                                <input id="inputText4" type="number" class="form-control" placeholder="Numeros" name="cupos" maxlength= "2">
                                            </div>
                                    

                                   
                                    <button href="student.php" class="btn btn-primary btn-block"><i class="zmdi zmdi-floppy"></i> Crear</button>
                                    
                                   
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