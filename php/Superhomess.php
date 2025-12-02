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
    <script src="https://kit.fontawesome.com/2245d8262f.js" crossorigin="anonymous"></script>
</head>
<?php
include 'Superbarra.php';

date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d");


?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    
  <div class="table-responsive ">
<table class="table table-bordered table_id ">
		<thead>
			<tr>
		
			</tr>
			<tr>
				<th>Foto</th>
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


$query = "SELECT * FROM eventos WHERE disp = 0 AND vencido = 0  ORDER BY id DESC";
$resultado=$conexion->query($query);
while ($row = $resultado->fetch_assoc()) {

?>
<tr>
<td><img height="150px" src="<?php echo $row['foto']; ?>"/></td>

<td><?php echo $row ['nombre'];?></td>
<td><?php echo $row ['tipo'];?></td>
<td><?php echo $row ['fechai'];?></td>
<td><?php echo $row ['fechac'];?></td>
<td><?php echo $row ['espacio'];?></td>
<td><?php echo $row ['Cupos'];?></td>




<th><a href="Superasistencia.php?id=<?php echo $row['id'];?>" ><i class="fa-solid fa-list"></i></a></th>
<th><a href="SuperEditarevento.php?id=<?php echo $row ['id'];?>" ><i class="fa-solid fa-pen-to-square"></i></th>
<th><a href="SuperEliminaEvento.php?id=<?php echo $row ['id'];?>"><i class="fa-solid fa-trash"></i></th>


</tr>

<?php

$query = "UPDATE eventos SET vencido = '1' WHERE fechac < '$fechaHoraActual'";
$resultado2=$conexion->query($query);
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
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2024 Upta. Todos los derechos Revervados.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">Nosotros</a>
                               
                                <a href="javascript: void(0);">Contactanos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
 
</html>