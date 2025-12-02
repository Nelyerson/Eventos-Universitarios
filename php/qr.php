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


require 'barra.php';
require 'conexion.php';
$id= $_REQUEST ['id'];



$query = "SELECT * FROM asistencia WHERE id= '$id' ";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();

$ides = $row['idestudiante'];

$idqr = $row['ide'];





$query = "SELECT * FROM estudiantes WHERE id= $ides";
$resultado=$conexion->query($query);
$row2 = $resultado->fetch_assoc();


$username = $_SESSION['usuario'];
$query = "SELECT * FROM usuarios WHERE username= '$username'";
$resultado=$conexion->query($query);
$row3 = $resultado->fetch_assoc();


$query = "SELECT * FROM eventos WHERE id= $idqr";
$resultado=$conexion->query($query);
$row4 = $resultado->fetch_assoc();

$ideven = $row4['id'];

$query = "SELECT * FROM asistencia WHERE ide= $ideven";
$resultado=$conexion->query($query);
$row5 = $resultado->fetch_assoc();
date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d H:i:s");

?>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Informacion del evento</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                      
                                  
                                   
                                       
                              

                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

              
      
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">

                    <div class="row">
	                                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
	                                        <div class="text-center">
	                                            <img src="<?php echo $row4['foto']; ?>" alt="User Avatar" class="rounded-circle user-avatar-xxl">
	                                            </div>
	                                        </div>
	                                        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
	                                            <div class="user-avatar-info">
	                                                <div class="m-b-20">
	                                                    <div class="user-avatar-name">
	                                                        <h2 class="mb-1"><?php echo $row4 ['nombre'] ; ?></h2>
	                                                    </div>
	                                                  
	                                                </div>
	                                                <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
	                                                <div class="user-avatar-address">
	                                                    <p class="border-bottom pb-3">
	                                                        <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i><?php echo $row4 ['espacio'] ; ?></span>
	                                                        <span class="mb-2 ml-xl-4 d-xl-inline-block d-block"><i class="fa fas fa-calendar-plus mr-2 text-primary "></i>Fecha de inico: <?php echo $row4 ['fechai'] ; ?></span>
                                                            <span class="mb-2 ml-xl-4 d-xl-inline-block d-block"><i class="fa fas fa-calendar-times mr-2 text-primary"></i>Fecha de culminacion: <?php echo $row4 ['fechac'] ; ?></span>
	                                                       
	                                                    </p>
	                                                    <div class="mt-3">
	                                                        <a href="#" class="badge badge-light mr-1"><?php echo $row4 ['tipo'] ; ?></a>
	                                                    </div>
                                                        <br>   <br> 
                                                        
	                                                </div>
	                                            </div>
                                                
	                                        </div>
	                                    </div>
                                        
                                        </div>
                                        <div class="row">
                        <!-- ============================================================== -->
                        <!-- profile -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                            
                            <!-- ============================================================== -->
  
                            <!-- ============================================================== -->
                            <!-- card profile -->
                            <!-- ============================================================== -->
                            <h2 class="pageheader-title">Informacion del estudiante</h2>
                            
                            <div class="card">
                                
                                
                                <div class="card-body">
                                    <div class="user-avatar text-center d-block">
                                        <img src="<?php echo $row2['foto']; ?>" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                    </div>
                                    <div class="text-center">
                                        <h2 class="font-24 mb-0"><?php echo $row2['nombres']; ?></h2>
                                        <p>Estudiante</p>
                                        <p> <i class="fas fa-fw fa-solid fa-id-card mr-2"></i><?php echo $row2['dni']; ?></p>
                                 
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16">Contacto</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                               
                                        <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i><?php echo $row2['telefono']; ?></li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16">PNF</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-fw fa-solid fa-book mr-2"></i><?php echo $row2['pnf']; ?></li>
                            
                                    </ul>
                                    </div>
                                </div>
                                
                                
                            <!-- ============================================================== -->
                            <!-- end card profile -->
                            <!-- ============================================================== -->
                        </div>

                        </div>          
            <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- campaign tab one -->
                            <!-- ============================================================== -->
                            <div class="influence-profile-content pills-regular">
                                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link " id="pills-campaign-tab" aria-selected="true"></a>
                                    </li>
                                   
                                </ul>
            <div class="section-block">
                                         
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                            
                                                            <div class="media-body ">
                                                                <div class="influencer-profile-data">
                                                                    
                                                                <form action="qrp.php" method="POST" enctype="multipart/form-data">
                                  



</div>




                            <div class="card-header">
                                <h5 class="mb-0">Informacion del pase</h5>
                                <p>Al darle al boton "Confirmar asistencia" se cambiara el estado del <?php echo $row4 ['tipo'] ; ?> a Si.</p>
                                



<?php

$asistencia11 = $row['asistencia']; // Inicializamos el contador de asistencia en 0
$limite_familiares = $row4['familia']; // Establecemos el límite de familiares



    $cupos_restantes = $limite_familiares - $asistencia11;
    echo "Escaneos restantes de familiares: " . $cupos_restantes . "<br>";


?>


                            <div class="card-body">        
                            <div class="table-responsive ">
  <table id="example" class="table table-striped table-bordered second" style="width:100%">
                    
		<thead>
			<tr>
		
			</tr>
			<tr>
           
				<th>Firma del libro realizada?</th>
                <th>Imposición de medalla realizada?</th>
                <th>Acta de grado realizado?</th>
                <th>Ha pagado por el paquete?</th>
                <th>Es un estudiante graduando?</th>
			</tr>	
</thead>
<tbody>

<td><?php echo $row2 ['firma'];?></td>
<td><?php echo $row2 ['medalla'];?></td>
<td><?php echo $row2 ['graduando'];?></td>
<td><?php echo $row2 ['acto'];?></td>
<td><?php echo $row2 ['paquete'];?></td>
                      

</tbody>
</table><br>
                        <div class="card">
                        

                        <?php

$dni= $row2 ['dni'] ; 


$query = "SELECT * FROM asistencia WHERE dni= '$dni' AND ide= '$ideven'";
$resultado=$conexion->query($query);
$row9 = $resultado->fetch_assoc();

$asistencia= $row9 ['asistencia'] ; 


$fechaInicio = new DateTime($row4['fechai']);
$fechaCulminacion = new DateTime($row4['fechac']);
$fechaActual = new DateTime();

// Convertir a enteros (si es necesario)
$familia = intval($row4['familia']);

if ($fechaCulminacion < $fechaActual) {
    ?> <p style="text-align: center;"> <a href="#" class="btn btn-secondary btn-center disabled" style="pointer-events: none; opacity: 0.6;">  Caduco </a> </p> <?php
exit;

    
} 
if ($cupos_restantes <= 0) {
    ?> <p style="text-align: center;"> <a href="#" class="btn btn-secondary btn-center disabled" style="pointer-events: none; opacity: 0.6;">  Alcanzo el limite </a> </p> <?php  
} 


if ($cupos_restantes > 0 ) {
    ?>
    <form class="login" action="qrp.php" method="POST" id="form_familiar">
        <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($row2['nombres']); ?>">
        <input type="hidden" name="dni" value="<?php echo htmlspecialchars($row2['dni']); ?>">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row2['id']); ?>">
        <input type="hidden" name="idevento" value="<?php echo htmlspecialchars($row4['id']); ?>">
        <input type="hidden" name="horavento" value="<?php echo htmlspecialchars($row4['horac']); ?>">
        <input type="hidden" name="tipo" value="<?php echo htmlspecialchars($row4['tipo']); ?>">
        <input type="hidden" name="lista" value="<?php echo htmlspecialchars($row5['id']); ?>">
        <button  name= 'confirmar_familiar' style="margin: 0 auto; display: block;" class="btn btn-primary btn-primary btn-center">
            <i class="zmdi zmdi-floppy"></i> Confirmar Asistencia Familiar
        </button>
        
    </form><br>
    
    <?php
}



$asis_estudiante= $row9 ['asis_estudiante'] ; 


if ($asis_estudiante > 0 ) {
    ?> <p style="text-align: center;"> <a href="#" class="btn btn-secondary btn-center disabled" style="pointer-events: none; opacity: 0.6;">  Estudiante Confirmado </a> </p> <?php
exit;}

?>


    <form class="login" action="qrpE.php" method="POST" id="form_estudiante">
    <input type="hidden" name="nombre" value="<?php echo htmlspecialchars($row2['nombres']); ?>">
        <input type="hidden" name="dni" value="<?php echo htmlspecialchars($row2['dni']); ?>">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row2['id']); ?>">
        <input type="hidden" name="idevento" value="<?php echo htmlspecialchars($row4['id']); ?>">
        <input type="hidden" name="horavento" value="<?php echo htmlspecialchars($row4['horac']); ?>">
        <input type="hidden" name="tipo" value="<?php echo htmlspecialchars($row4['tipo']); ?>">
        <input type="hidden" name="lista" value="<?php echo htmlspecialchars($row5['id']); ?>">
        <button name= 'confirmar_estudiante' style="margin: 0 auto; display: block;" class="btn btn-primary btn-primary btn-center">
            <i class="zmdi zmdi-floppy"></i> Confirmar Asistencia Estudiante
        </button> <br>
      
    </form>


                       
                            <div class="card-body">
                             
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
  
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="button.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js">
    </script>
    
</body>
 
</html>