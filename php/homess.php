<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Lista de Eventos</title>
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

date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d");


$ide = $row['id'];


?>

					
					
									   
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
            <div class="page-header">
     
                <div class="row">
           
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                       <div style="text-align: left;">
    <img src="tape4.png" style=" width: 390px;">
    <h2 class="pageheader-title" style="display: inline-block; vertical-align: middle;">Lista de eventos <i class="fa fa-fw fa-calendar-minus-o"></i></h2>
</div>
                            
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homesss.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Detalles De Eventos</li>
                                    </ol>
                                </nav>
                               
                            </div>
                        </div>
                    </div>
                </div>
             
             


                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"> 
                    <div class="card">
                    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div class="alert alert-primary" role="alert">
            Se han guardado los cambios con exito.
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'estudiante'): ?>
        <div class="alert alert-primary" role="alert">
            Se ha confimado la asistencia del estudiante con exito.
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

    <?php if (isset($_GET['status']) && $_GET['status'] == 'hora'): ?>
        <div class="alert alert-danger" role="alert">
            La hora de cierre no puede ser mayor que la inicial.
        </div>
        
    <?php endif; ?>

    <?php if (isset($_GET['status']) && $_GET['status'] == 'evento'): ?>
        <div class="alert alert-primary" role="alert">
            Evento creado exitosamente.
        </div>
        
    <?php endif; ?>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'fam'): ?>
        <div class="alert alert-danger" role="alert">
            No se puede disminuir la cantidad de familias maximas.
        </div>
    <?php endif; ?>

    
    <div class="card-header">
                                <h5 class="mb-0">Eventos</h5>
                                <p>Aqui abajo puede ver todo los eventos.</p>
                            </div>                 

                            <div class="card-body">     
                               
                        
                         
  <div class="table-responsive ">
  
  <table id="example" class="table table-striped table-bordered second" style="width:100%">
    
		<thead >
			
          
            <th>Foto</th>
            
            <?php if ($privilegio == 1): ?>
                    <th>Id</th> 
                    <?php endif; ?>
                <th>Nombre Del evento</th>
                <th>PNF</th>
                <th>Fecha Inicial</th>
				<th>Fecha de culminacion</th>
                <th>Hora Inicial</th>
				<th>Hora de culminacion</th>
				<th>Ubicacion</th>
                <th>Estado </th>
                <th>Cupos Disponibles</th>
                <th>Opciones</th>  
                <th></th>  
                <th></th> 

			</tr>	
</thead>
<tbody>
<a href="PruebaH.php" target="_blank" class="btn btn-primary">Exportar a PDF</a>
</div>
<?php
require 'conexion.php';

if ($privilegio == 0) {
    // Si el privilegio es 0, agregar el filtro por ide
    $query = "SELECT * FROM eventos WHERE disp = 0 AND ide = $ide ORDER BY id DESC";
} elseif ($privilegio == 1) {
    // Si el privilegio es 1, no filtrar por ide
    $query = "SELECT * FROM eventos WHERE disp = 0  ORDER BY id DESC";
}


$resultado=$conexion->query($query);
while ($row2 = $resultado->fetch_assoc()) {

?>
<tr>
    
<td><img class="rounded-circle user-avatar-xxl" height="150px" src="<?php echo $row2['foto']; ?>"/></td>
<?php if ($privilegio == 1): ?>
        <td><?php echo $row2['id']; ?></td> 
<?php endif; ?>
<td ><?php echo $row2 ['nombre'];?></td>
<td ><?php echo $row2 ['pnf'];?></td>
<td><?php echo date("d-m-Y", strtotime($row2['fechai'])); ?></td>
<td><?php echo date("d-m-Y", strtotime($row2['fechac'])); ?></td>
<td><?php echo $row2 ['horai'];?></td>
<td><?php echo $row2 ['horac'];?></td>
<td><?php echo $row2 ['espacio'];?></td>
<td>
    <?php if ($row2['estatus'] == 'Culminado'): ?>
        Culminado   <span class="badge-dot badge-warning mr-1" aria-label="Culminado"></div></span>

    <?php elseif ($row2['estatus'] == 'Vigente'): ?>
      Vigente   <span class="badge-dot badge-success mr-1" aria-label="Vigente"></span>


        <?php elseif ($row2['estatus'] == 'Cancelado'): ?>
            Cancelado <span class="badge-dot badge-danger mr-1" aria-label="Cancelado"></span>





    <?php else: ?>
        <span>Estado desconocido</span>
    <?php endif; ?>
</td>
<td><?php echo $row2['dispon'] . ' / ' . $row2['Cupos']; ?></td>
<td>
<button type="button" class="btn btn-primary">
    <a href="detalles.php?id=<?php echo $row2['id'];?>"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></a>
</button>
</td>

<td>
    <?php if ($row2['estatus'] !== 'Culminado' && $row2['estatus'] !== 'Cancelado') : ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo $row2['id']; ?>">
            <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
        </button>
    <?php else : ?>
        <button type="button" class="btn btn-secondary" disabled>
            <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
        </button>
    <?php endif; ?>
</td>

<td>
    <?php if ($row2['estatus'] !== 'Culminado' && $row2['estatus'] !== 'Cancelado') : ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eliminarr<?php echo $row2['id']; ?>">
            <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
        </button>
    <?php else : ?>
        <button type="button" class="btn btn-secondary" disabled>
            <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
        </button>
    <?php endif; ?>
</td>

</tr>

<?php
include 'Editarevento.php';
include 'eliminarevento.php';
?>
<?php
$query = "UPDATE eventos SET vencido = '1' WHERE fechac < '$fechaHoraActual'";
$resultado2=$conexion->query($query);
$query = "UPDATE eventos SET estatus = 'Culminado' WHERE fechac < '$fechaHoraActual'";
$resultado2=$conexion->query($query);
$query = "UPDATE espacios SET Disponibilidad = 'Disponible' WHERE tempo < '$fechaHoraActual'";
$resultado2=$conexion->query($query);



}

?>
	</tbody>		
</table>
</div>

<script>
//Oculta mensajes de Notificacion
  setTimeout(function () {
    $(".alert").slideUp(300);
  }, 3000); 


</script>







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