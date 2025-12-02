<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ver Pagos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
.pageheader-title {
  color: #7c75dc; /* Cambia el color del texto a #7c75dc */
}
</style>
</head>
<?php
include 'barra2.php';
$ide = $row['id'];

?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
            <div style="text-align: right;">
    <img src="tape4.png" style=" width: 600px;  display: inline-block; ">
    <h2 class="pageheader-title" style="display: inline-block; vertical-align: middle;">Lista de Pago <i class="fa fa-address-card"></i></h2>
</div>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homesss.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Lista de Pagos</li>
                                    </ol>
                                </nav>
                            </div>
                            <br>
                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
                            <div class="card-header">
                                <h5 class="mb-0">Lista de Pagos</h5>
                                <p>Aqui abajo puede ver todos la Lista de Pagos.</p>
                            </div>
                            <div class="card-body">                
                  
  <div class="table-responsive ">
  <table id="example" class="table table-striped table-bordered second" style="width:100%">
                    
		<thead>
			<tr>
		
			</tr>
			<tr>
           
				<th>Capture</th>
                <th>Referencia</th>
                 <th>Fecha de Pago</th>
                  <th>Fecha de Revision</th>
                <th>Nombre</th>
                <th>Status</th>


			</tr>	

</thead>

<tbody>
</div>
<?php
require 'conexion.php';

 $query = "SELECT * FROM pagos WHERE idee= $ide ORDER BY fechar DESC";
$resultado=$conexion->query($query);
$row8 = $resultado->fetch_assoc();


$resultado=$conexion->query($query);
while ($row8 = $resultado->fetch_assoc()) {

?>
<tr>
<td>
    <a href="<?php echo $row8['foto']; ?>" target="_blank">
        <img height="150px" width="200px" src="<?php echo $row8['foto']; ?>" />
    </a>
</td>
<td><?php echo $row8 ['referencia'];?></td>
<td>
<?php 
    if ($row8['fecha'] == "0000-00-00" || empty($row8['fecha'])) {
        echo "—";  // o lo que quieras mostrar
    } else {
        echo date("d-m-Y", strtotime($row8['fecha']));
    }
?>
</td>
<td>
<?php 
    if ($row8['fechar'] == "0000-00-00" || empty($row8['fechar'])) {
        echo "—";  // o lo que quieras mostrar
    } else {
        echo date("d-m-Y", strtotime($row8['fechar']));
    }
?>
</td>
<td><?php echo $row8 ['nombre'];?></td>




<th><a> <?php echo $row8 ['status1'];?></</a></th>









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
    <script src="search.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="button.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="copy.js"></script>
    <script src="print.js"></script>
    <script src="columnas.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></body>
 
</html>