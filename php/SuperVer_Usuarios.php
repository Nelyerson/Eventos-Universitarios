<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ver Usuarios</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>
<?php
include 'barra.php';
require 'conexion.php';
$ide = $row['id'];
?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
            <h2 class="pageheader-title">Lista de usuarios</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homesss.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Lista de usuarios</li>
                                    </ol>
                                </nav>
                            </div>
                            <br>
                <div class="row">
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                            <div class="card-header">
                            <a href="Ver_Usuarios.php" target="_blank" class="btn btn-primary">Exportar a PDF</a>
                            </div>
                          
                    
  <div class="table-responsive ">
  <table id="example" class="table table-striped table-bordered second" style="width:100%">
		<thead>
			<tr>
                
                <th>Nombre</th>
                <th>Correo</th>
                <th>Privilegio</th>
                <th>Estatus</th>
                <th>Opciones</th>
                <th></th>
			</tr>	

</thead>

<tbody>
</div>
<?php
require 'conexion.php';


$query = "SELECT * FROM usuarios WHERE disp = 0 AND id != $ide";
$resultado=$conexion->query($query);
while ($row = $resultado->fetch_assoc()) {

?>
<tr>


<td><?php echo $row ['username'];?></td>
<td><?php echo $row ['email'];?></td>
<td>
    <?php
    if ($row['privilegio'] == 0) {
        echo "Usuario";
    } else if ($row['privilegio'] == 1) {
        echo "Super Usuario";
    } else {
        echo "Privilegio no válido";
    }
    ?>
</td>

<td>
    <?php
    if ($row['activo'] == 0) {
        echo "Suspendido";
    } else if ($row['activo'] == 1) {
        echo "Activo";
    } else {
        echo "Privilegio no válido";
    }
    ?>
</td>




<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo $row['id'];?>">
<i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
</button>
</td>

<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eliminarr<?php echo $row['id'];?>">
<i class="fa-solid fa-trash" style="color: #ffffff;"></i></a>
</button>
</td>







</tr>

<?php
include 'supereditarusuarios.php';
include 'eliminarusuario.php';
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
    <script src="searchtwo.js"></script>
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