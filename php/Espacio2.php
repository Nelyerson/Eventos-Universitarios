<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agregar Espacios</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>
<?php
include 'barra.php';
$ide = $row['id'];
?>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">

            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Agregar Espacio</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homess.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Agregar Espacio</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Eliga que institucion para la añadir el Espacio</h5>
                            <div class="card-body">
                         
  <table id="example" class="table table-striped table-bordered second" style="width:100%">
		<thead>
			<tr>
                
                <th>Nombre</th>
                <th>Correo</th>
                <th>Privilegio</th>
                <th>Opciones</th>
                <th></th>
			</tr>	

</thead>

<tbody>
</div>
<?php
require 'conexion.php';


$query = "SELECT * FROM usuarios WHERE privilegio < 1";
$resultado=$conexion->query($query);
while ($row = $resultado->fetch_assoc()) {

?>
<tr>


<td><?php echo $row ['username'];?></td>
<td><?php echo $row ['email'];?></td>
<td><?php echo $row ['privilegio'];?></td>



<th><a href="Espacio1.php?id=<?php echo $row['id'];?>" >elegir</th>







</tr>

<?php

}
?>
	</tbody>		
</table>
</div>
                                   

<br><br>         

                                   
                                    
                                    
                                   
                                </form>
                            </div>
                        </div>
                    </div>
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
</body>
 
</html>