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
include 'Superbarra.php';


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
                <th>Apellido</th>
                <th>Telefono</th>
				<th>DNi</th>
                <th>Especialidad</th>
                <th>Direccion</th>
                <th>Opciones</th>


                



			</tr>	

</thead>

<tbody>
</div>
<?php
require 'conexion.php';


$query = "SELECT * FROM profesores WHERE activo = 0";
$resultado=$conexion->query($query);
while ($row = $resultado->fetch_assoc()) {

?>
<tr>
<td><img height="150px"  width="300"src="<?php echo $row['foto']; ?>"/></td>

<td><?php echo $row ['nombre'];?></td>
<td><?php echo $row ['apellido'];?></td>
<td><?php echo $row ['telefono'];?></td>
<td><?php echo $row ['dni'];?></td>
<td><?php echo $row ['pnf'];?></td>
<td><?php echo $row ['direccion'];?></td>




<th><a href="SupereditarPersonall.php?id=<?php echo $row ['id'];?>" ><i class="fa-solid fa-pen-to-square"></i></th>
<th><a href="SuperEliminPersonal.php?id=<?php echo $row ['id'];?>"><i class="fa-solid fa-trash"></i></th>






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
</body>
 
</html>