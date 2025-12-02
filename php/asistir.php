<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>
<?php
include 'barra2.php';




require 'conexion.php';
$id= $_REQUEST ['id'];
$query = "SELECT * FROM eventos WHERE id= '$id'";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();


$query = "SELECT * FROM estudiantes WHERE dni= '$dni'";
$resultado=$conexion->query($query);
$row2 = $resultado->fetch_assoc();


$query = "SELECT * FROM asistencia WHERE ide= '$id'";
$resultado=$conexion->query($query);
$row3 = $resultado->fetch_assoc();



?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                
                <div class="row">

   
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Asistir</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homes.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Evento</li>
                                      
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Por favor eliga de que manera va a asistir.</h2>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="col-xl-12 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        Por Acta
                                        
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"> la asistencia será registrada en un acta, un documento oficial que detalla lo ocurrido en el evento.</p>
                                        <p class="card-text"> Esta disponible <?php echo $row ['familia'];?> invitaciones para familiares actualmente.</p>
                                        <form class="login" placeholder="Numero de familiares"action="AsistirActaP.php" method="POST"> 

                    
                                        <input class="form-control form-control-lg" style=" display:none ;"id="username"  name="nombre" type="text" placeholder="Cedula" value="<?php echo $row2 ['nombres'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style=" display:none ;"id="username"  name="apellido" type="text" placeholder="Cedula" value="<?php echo $row2 ['apellidos'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style=" display:none;"id="username"  name="genero" type="text" placeholder="Cedula" value="<?php echo $row2 ['sexo'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style=" display:none ;"id="username"  name="dni" type="text" placeholder="Cedula" value="<?php echo $row2 ['dni'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style=" display:none ;"id="username"  name="estudiante" type="text" placeholder="Cedula" value="<?php echo $row2 ['id'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style=" display:none ;"id="username"  name="ide" type="text" placeholder="Cedula" value="<?php echo $row ['id'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style=" display:none ;"id="username"  name="idn" type="text" placeholder="Cedula" value="<?php echo $row2 ['ide'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="evento" type="text" placeholder="Cedula" value="<?php echo $row ['nombre'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="tipoevento" type="text" placeholder="Cedula" value="<?php echo $row ['tipo'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="dispo" type="text" placeholder="Cedula" value="<?php echo $row ['famdisp'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="disc" type="text" placeholder="Cedula" value="<?php echo $row2 ['discapacidad'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="firma" type="text" placeholder="Cedula" value="<?php echo $row2 ['firma'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="famili" type="text" placeholder="Cedula" value="<?php echo $row3 ['familiares'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="tipo" type="text" placeholder="Cedula" value="Acta"autocomplete="off" >
                                        <button href="student.php" class="btn btn-primary btn-primary"><i class="zmdi zmdi-floppy"></i> Asistir por acta</button>
                                        </form>
                                       
                                        
                                    </div>
                                </div>
                            </div>   

                            <div class="col-xl-12 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                      Por Secretaria
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"> la asistencia será registrada en un acta, un documento oficial que detalla lo ocurrido en el evento.</p>
                                        <p class="card-text"> Esta disponible <?php echo $row ['familia'];?> limite familiares actualmente.</p>
                                        <form class="login" action="AsistirActaP.php" method="POST"> 

                                      
                                        <input class="form-control form-control-lg" style=" display:none ;"id="username"  name="nombre" type="text" placeholder="Cedula" value="<?php echo $row2 ['nombres'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style=" display:none ;"id="username"  name="apellido" type="text" placeholder="Cedula" value="<?php echo $row2 ['apellidos'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style=" display:none ;"id="username"  name="dni" type="text" placeholder="Cedula" value="<?php echo $row2 ['dni'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style=" display:none ;"id="username"  name="estudiante" type="text" placeholder="Cedula" value="<?php echo $row2 ['id'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style=" display:none ;"id="username"  name="ide" type="text" placeholder="Cedula" value="<?php echo $row ['id'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style=" display:none ;"id="username"  name="idn" type="text" placeholder="Cedula" value="<?php echo $row2 ['ide'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="evento" type="text" placeholder="Cedula" value="<?php echo $row ['nombre'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="tipoevento" type="text" placeholder="Cedula" value="<?php echo $row ['tipo'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="dispo" type="text" placeholder="Cedula" value="<?php echo $row ['famdisp'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="disc" type="text" placeholder="Cedula" value="<?php echo $row2 ['discapacidad'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="firma" type="text" placeholder="Cedula" value="<?php echo $row2 ['firma'];?>"autocomplete="off" >
                                        <input class="form-control form-control-lg" style="display :none ;"id="username"  name="famili" type="text" placeholder="Cedula" value="<?php echo $row3 ['familiares'];?>"autocomplete="off" >
                                    
                                        <input class="form-control form-control-lg" style=" display: none;"id="username"  name="tipo" type="text" placeholder="Cedula" value="Secretaria"autocomplete="off" >
                                        <button href="student.php" class="btn btn-primary btn-primary"><i class="zmdi zmdi-floppy"></i> Asistir por Secretaria</button>
                                        </form>
                                       
                                        
                                    </div>
                                </div>
                            </div>   
  







                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           
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