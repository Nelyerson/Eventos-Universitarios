<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lista</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>
<?php


require 'Superbarra.php';
require 'conexion.php';
$id= $_REQUEST ['id'];
$query = "SELECT * FROM eventos WHERE id= '$id' ";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();

$query = "SELECT * FROM profes WHERE ide= '$id' ";
$resultado=$conexion->query($query);
$row2 = $resultado->fetch_assoc();




date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d H:i:s");

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

                    <div class="card influencer-profile-data">
	                            <div class="card-body">
	                                <div class="row">
	                                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
	                                        <div class="text-center">
	                                            <img src="<?php echo $row['foto']; ?>" alt="User Avatar" class="rounded-circle user-avatar-xxl">
	                                            </div>
	                                        </div>
	                                        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
	                                            <div class="user-avatar-info">
	                                                <div class="m-b-20">
	                                                    <div class="user-avatar-name">
	                                                        <h2 class="mb-1"><?php echo $row ['nombre'] ; ?></h2>
	                                                    </div>
	                                                  
	                                                </div>
	                                                <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
	                                                <div class="user-avatar-address">
	                                                    <p class="border-bottom pb-3">
	                                                        <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i><?php echo $row ['espacio'] ; ?></span>
	                                                        <span class="mb-2 ml-xl-4 d-xl-inline-block d-block"><i class="fa fas fa-calendar-plus mr-2 text-primary "></i>Fecha de inico: <?php echo $row ['fechai'] ; ?></span>
                                                            <span class="mb-2 ml-xl-4 d-xl-inline-block d-block"><i class="fa fas fa-calendar-times mr-2 text-primary"></i>Fecha de culminacion: <?php echo $row ['fechac'] ; ?></span>
	                                                       
	                                                    </p>
	                                                    <div class="mt-3">
	                                                        <a href="#" class="badge badge-light mr-1"><?php echo $row ['tipo'] ; ?></a>
	                                                    </div>
                                                        
	                                                </div>
	                                            </div>
                                                
	                                        </div>
	                                    </div>
	                                </div>
                                    <div class="border-top user-social-box">
                                   
	                                    <div class="user-social-media d-xl-inline-block"><span class="fa fas fa-user mr-2 text-primary"></span><span><?php echo $row2 ['nombre'] ; ?></span></div>
	                                   
	                                </div>
	                              
	                            </div>
                                

                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card">
	                                <div class="card-body">
	                                    <div class="d-inline-block">
	                                        <h5 class="text-muted">Cupos</h5>
	                                        <h2 class="mb-0"> <?php echo $row ['dispon'] ; ?>/<?php echo $row ['Cupos'] ; ?></h2>
	                                    </div>
	                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
	                                        <i class="fa fa-user fa-fw fa-sm text-primary"></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

                            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2 class="pageheader-title">Lista de asistencia del evento <?php echo $row ['nombre'];?></h2>
  <div class="table-responsive ">
  <table id="example" class="table table-striped table-bordered second" style="width:100%">
		<thead>
			<tr>
		
			</tr>
			<tr>
			
                <th>Nombre</th>
                <th>Apellido</th>
                <th>dni</th>
                <th>Tipo de asistencia</th>
                <th>Fecha de llegada</th>
				<th>Asistencia</th>
		
                



			</tr>	

</thead>

<tbody>
</div>
<?php
require 'conexion.php';


$query = "SELECT * FROM asistencia WHERE disp = 0 AND ide = $id ORDER BY id DESC";
$resultado=$conexion->query($query);
while ($row = $resultado->fetch_assoc()) {

?>
<tr>


<td><?php echo $row ['nombre'];?></td>
<td><?php echo $row ['apellido'];?></td>
<td><?php echo $row ['dni'];?></td>
<td><?php echo $row ['tipo'];?></td>
<td><?php echo $row ['fecha'];?></td>
<td><?php echo $row ['asistencia'];?></td>








</tr>

<?php

}
?>
	</tbody>		
</table>
</div>









                    </div>
                            
                      



                       
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
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
</body>
 
</html>