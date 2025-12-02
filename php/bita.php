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
include 'barra.php';

date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d");


$ide = $row['id'];


?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"> 
                 <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Lista de pases</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homess.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Bitacora</li>
                                        
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                    
                    <div class="card">
                    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div class="alert alert-primary" role="alert">
            Se han guardado los cambios con exito.
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'fotoerror'): ?>
        <div class="alert alert-danger" role="alert">
            La imagen es demaciado grande, porfavor seleccione otra.
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'fecha'): ?>
        <div class="alert alert-danger" role="alert">
            La fecha de cierre no puede ser mayor que la inicial.
        </div>
    <?php endif; ?>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card-header">
                                <h5 class="mb-0">Bitacora</h5>
                                <p>Aqui abajo puede ver todos los movimientos en el sistema.</p>
                            </div>
                            <div class="card-body">                
                  
  <div class="table-responsive ">
  <table id="example" class="table table-striped table-bordered second" style="width:100%">
		<thead>
			
          
            <th>ID</th>
                <th>Accion</th>
                <th></th>  
                <th></th> 

			</tr>	
</thead>
<tbody>
</div>
<?php
require 'conexion.php';

if ($privilegio == 0) {
    // Si el privilegio es 0, agregar el filtro por ide
    $query = "SELECT * FROM eventos WHERE disp = 0 AND vencido = 0 AND ide = $ide ORDER BY id DESC";
} elseif ($privilegio == 1) {
    // Si el privilegio es 1, no filtrar por ide
    $query = "SELECT * FROM cronologia ORDER BY id DESC";
}


$resultado=$conexion->query($query);
while ($row2 = $resultado->fetch_assoc()) {

?>
<tr>
  

<td><?php echo $row2 ['id'];?></td>
<td><?php echo $row2 ['accion1'];?></td>


</tr>

<?php

  
$query = "UPDATE eventos SET vencido = '1' WHERE fechac < '$fechaHoraActual'";
$resultado2=$conexion->query($query);


$query = "UPDATE espacios SET Disponibilidad = 'Disponible' WHERE tempo < '$fechaHoraActual'";
$resultado2=$conexion->query($query);

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