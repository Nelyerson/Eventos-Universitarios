<!doctype html>
<html lang="en">

 
<>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    <title>Detalles</title>
</head>
<?php
include 'barra.php';

require 'conexion.php';
$id= $_REQUEST ['id'];
$query = "SELECT * FROM graduando WHERE id= '$id'";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();



$dispo = $row ['cupos'] - $row ['cantidad'];
$pnf = $row ['pnf'];

?>
 
        <div class="dashboard-wrapper">
            <div class="influence-profile">
                <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Lista</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homess.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Lista de graduando</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Listas</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Detalles de <?php echo $row ['nombre']; ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                 
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- profile -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- card profile -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                  
                                    <div class="text-center">
                                        <h2 class="font-24 mb-0">Detalles de <?php echo $row ['nombre']; ?></h2>
                                      
                                    </div>
                                </div>
                               
                              
                            </div>
                            <!-- ============================================================== -->
                            <!-- end card profile -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end profile -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- campaign data -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- campaign tab one -->
                            <!-- ============================================================== -->
                            <div class="influence-profile-content pills-regular">
                                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                        <a class="nav-link"   href="listadetalle.php?id=<?php echo $row['id'];?>">Resumen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"   href="#">Estudiantes Agregados</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"   href="ListaDetalledisponible.php?id=<?php echo $row['id'];?>">Estudiantes Disponibles</a>
                                    </li>
                                   
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                                       
                                    <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                    
                        </tr>
                        <tr>
                        <th>Foto</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Telefono</th>
                            <th>Dni</th>
                            <th>Acciones</th>
                        
                            



                        </tr>	

            </thead>

            <tbody>
            </div>
            <?php
            require 'conexion.php';


            $query = "SELECT * FROM estudiantes WHERE disp = 0 AND pnf = '$pnf' AND graduando = 1 ORDER BY id DESC";

            $resultado=$conexion->query($query);
            while ($row = $resultado->fetch_assoc()) {
            ?>
            <tr>
            <td><img height="150px" src="<?php echo $row['foto']; ?>"/></td>
            <td><?php echo $row ['nombres'];?></td>
            <td><?php echo $row ['apellidos'];?></td>
            <td><?php echo $row ['telefono'];?></td>
            <td><?php echo $row ['dni'];?></td>
            <th><a href="#">Generar Pase<i class="zmdi zmdi-edit"></i></a></th>

            </tr>

            <?php

            }
            ?>
                </tbody>		
            </table>
            </div>

                                </div>
                            </div>
                        </div>
                                        
                                        
                                    </div>
                                    <div class="tab-pane fade" id="pills-packages" role="tabpanel" aria-labelledby="pills-packages-tab">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="section-block">
                                                    <h2 class="section-title">Estudiantes Agregados</h2>


                                                    

                                                    
                                                </div>
                                            </div>
                                          
                                           
                                           
                                        </div>
                                    </div>

                                    
                                    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                        <div class="row">
                                            
                                        <div class="section-block">
                                                    <h2 class="section-title">Agregar Estudiantes</h2>
                                                </div>
                                        </div>
                                      

                       </div>
                                   
                 </div>
              </div>
                            <!-- ============================================================== -->
                            <!-- end campaign tab one -->
                            <!-- ============================================================== -->
           </div>
                        <!-- ============================================================== -->
                        <!-- end campaign data -->
                        <!-- ============================================================== -->
          </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end content -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
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
        <!-- ============================================================== -->
        <!-- end wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1  -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../assets/libs/js/main-js.js"></script>
   
</body>
 
</html>