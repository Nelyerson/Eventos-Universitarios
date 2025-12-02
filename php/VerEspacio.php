<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lista de espacios</title>
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
include 'barra.php';
$ide = $row['id'];

?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
           <div style="text-align: left;">
    <img src="tape4.png" style=" width: 390px;">
    <h2 class="pageheader-title" style="display: inline-block; vertical-align: middle;">Lista de Espacios <i class="fa fa-address-card"></i></h2>
</div>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homesss.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Espacios</li>
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
                                <h5 class="mb-0">Lista de espacios</h5>
                                <p>Aqui abajo puede ver todos los espacios disponibles.</p>
                            </div>
                            <div class="card-body">                
                  
  <div class="table-responsive ">
  <table id="example" class="table table-striped table-bordered second" style="width:100%">
                    
		<thead>
			<tr>
		
			</tr>
			<tr>
           
				<th>Foto</th>
                <?php if ($privilegio == 1): ?>
                    <th>Id</th> 
                    <?php endif; ?>
                <th>Lugar</th>
                <th>Capacidad</th>
                <th>Disponibilidad</th>
			</tr>	

</thead>

<tbody>
</div>
<?php
require 'conexion.php';

if ($privilegio == 0) {
    // Si el privilegio es 0, agregar el filtro por ide
    $query = "SELECT * FROM espacios WHERE disp = 0 AND ide = $ide ORDER BY id DESC";
} elseif ($privilegio == 1) {
    // Si el privilegio es 1, no filtrar por ide
    $query = "SELECT * FROM espacios WHERE disp = 0 ORDER BY id DESC";
}


$resultado=$conexion->query($query);
while ($row2 = $resultado->fetch_assoc()) {

?>
<tr>
<td><img height="150px"  width="200"src="<?php echo $row2['foto']; ?>"/></td>
<?php if ($privilegio == 1): ?>
        <td><?php echo $row2['id']; ?></td> 
<?php endif; ?>
<td><?php echo $row2 ['lugar'];?></td>
<td><?php echo $row2 ['Capacidad'];?></td>
<td><?php echo $row2 ['Disponibilidad'];?></td>



<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo $row2['id'];?>">
<i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
</button>
</td>

<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eliminar<?php echo $row2['id'];?>">
<i class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
</button>
</td>







</tr>

<?php
include 'Espacioeditar.php';
include 'eliminarespacio.php';

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