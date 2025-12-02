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
                    <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Lista de evetos pasados</h5>
                                <p>Aqui abajo puede ver todas los eventos pasados.</p>
                            </div>
                            <div class="card-body">                
                  
  <div class="table-responsive ">
  <table id="example" class="table table-striped table-bordered second" style="width:100%">
		<thead>
			
          
            <th>Foto</th>
            <?php if ($privilegio == 1): ?>
                    <th>Id</th> 
                    <?php endif; ?>
                <th>Nombre</th>
                <th>Evento</th>
                <th>Fecha Inicial</th>
				<th>Fecha de culminacion</th>
				<th>lugar</th>
                <th>Cupos Disponibles</th>
                <th>Opciones</th>          
			</tr>	
</thead>
<tbody>
</div>
<?php
require 'conexion.php';

if ($privilegio == 0) {
    // Si el privilegio es 0, agregar el filtro por ide
    $query = "SELECT * FROM eventos WHERE disp = 0 AND vencido = 1 AND ide = $ide ORDER BY id DESC";
} elseif ($privilegio == 1) {
    // Si el privilegio es 1, no filtrar por ide
    $query = "SELECT * FROM eventos WHERE disp = 0 AND vencido = 1 ORDER BY id DESC";
}


$resultado=$conexion->query($query);
while ($row = $resultado->fetch_assoc()) {

?>
<tr>
    
<td><img height="150px" src="<?php echo $row['foto']; ?>"/></td>
<?php if ($privilegio == 1): ?>
        <td><?php echo $row['id']; ?></td> 
<?php endif; ?>
<td><?php echo $row ['nombre'];?></td>
<td><?php echo $row ['tipo'];?></td>
<td><?php echo $row ['fechai'];?></td>
<td><?php echo $row ['fechac'];?></td>
<td><?php echo $row ['espacio'];?></td>
<td><?php echo $row ['Cupos'];?></td>


<td>
<button type="button" class="btn btn-primary">
    <a href="detalles.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></a>
</button>
</td>








</tr>
<?php
include 'Editarevento.php';

include 'eliminarevento.php';


?>


<?php

  
$query = "UPDATE eventos SET vencido = '1' WHERE fechac < '$fechaHoraActual'";
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