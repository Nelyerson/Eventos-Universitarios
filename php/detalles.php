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
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">
</head>
<style>
        .circle {
            width: 40px;
            height: 40px;
            border-radius: 40%;
        }
        .red {
            background-color: red;
        }
        .green {
            background-color: green;
        }
        .yellow {
            background-color: yellow;
        }

        
.pageheader-title {
  color: #7c75dc; /* Cambia el color del texto a #7c75dc */
}
    </style>
<?php


require 'barra.php';
require 'conexion.php';
$id= $_REQUEST ['id'];
$query = "SELECT * FROM eventos WHERE id= '$id' ";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();

$idevento = $row['id'];

$query = "SELECT * FROM profes WHERE ide= '$id' ";
$resultado=$conexion->query($query);
$row2 = $resultado->fetch_assoc();
$ide = $row['id'];

$query33 = "SELECT COUNT(*) AS total_presentes FROM asistencia WHERE disp = 0 AND ide = $id";
$resultado33 = $conexion->query($query33);

if ($resultado33) {
    $row33 = $resultado33->fetch_assoc();
   
}

$query55 = "SELECT * FROM  asistencia WHERE disp = 0 AND ide = $id";
$resultado55 = $conexion->query($query55);




date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d H:i:s");

?>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">

            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                       <div style="text-align: left;">
    <img src="tape4.png" style=" width: 390px;">
    <h2 class="pageheader-title" style="display: inline-block; vertical-align: middle;">Información del Evento <i class="fa fa-info-circle"></i></h2>
</div>
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
                <?php if (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
        <div class="alert alert-danger" role="alert">
            No se ha podido encontrar a un estudiante ya que su cedula no esta registrada en su cuenta.
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'good'): ?>
        <div class="alert alert-primary" role="alert">
            Se ha registrado el/la estudiante con exito.
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'errordos'): ?>
        <div class="alert alert-danger" role="alert">
            Error en el archivo o las columnas del archivo, recuerde poner "Nombre,Apellido,DNI,Correo y Celular" como nombres de las columnas.
        </div>
    <?php endif; ?>
      
      
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
	                                                        <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i><?php echo $row ['espacio'] ?? 'Espacio no seleccionado'; ?></span>
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
	                                  <div class="user-social-media d-xl-inline-block"><span class="fa fas fa-user mr-2 text-primary"> Personal:</span><span><?php echo $row2['nombre'] ?? 'Asistentes no registrados'; ?></span></div>
	                                </div>
                                    <div class="border-top user-social-box">
	                                  <div class="user-social-media d-xl-inline-block"><span class="fa fas fa-user mr-2 text-primary"> Estudiantes discapacitados:</span><span>                            <?php 

// Consulta SQL para seleccionar los nombres de los estudiantes cuya discapacidad es diferente de "ninguna"
$sql = "SELECT nombre FROM asistencia WHERE disc != 'ninguna' AND ide = $ide AND disp = 0 ORDER BY id DESC";
$resultado = $conexion->query($sql);

// Verificar si se obtuvieron resultados
if ($resultado->num_rows > 0) {
// Recorrer los resultados y mostrar los nombres
while ($fila = $resultado->fetch_assoc()) {
echo  $fila["nombre"] . " ";
}
} else {
echo "No se encontraron estudiantes con discapacidad.";
}



?>
</span></div>
	                                </div>
	                              
	                            </div>
                                
                                <div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Cupos restantes</h5>
                    <?php 
                        $b = $row33['total_presentes'];
                        $a = $row['Cupos'];
                        $cupostom = $a - $b;
                    ?>
                    <h2 class="mb-0"><?php echo $cupostom; ?></h2>
                    <?php 
                        $query = "UPDATE eventos SET Dispon = $cupostom WHERE id = $id";
                        $resultado2 = $conexion->query($query);
                    ?>
                </div>
                <div class="float-right icon-circle-medium icon-box-lg mt-1">
                    <i class="fa-solid fa-ticket fa-fw fa-sm text-primary"></i>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Espacios para familiares restantes</h5>
                    <h2 class="mb-0"><?php echo $row['famdisp'];?></h2>
                    <?php 
                        $query = "UPDATE eventos SET Dispon = '$cupostom' WHERE id = '$id'";
                        $resultado2 = $conexion->query($query);
                    ?>
                </div>
                <div class="float-right icon-circle-medium icon-box-lg  mt-1">
                    <i class="fa-solid fa-users fa-fw fa-sm text-primary"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Asistencia Femenima</h5>

                    
                    <?php


// Verificar conexión
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

// Consulta para contar estudiantes femeninos
$sql_femenino = "SELECT COUNT(*) AS total_femenino FROM asistencia WHERE genero = 'Femenino' AND ide = $idevento";
$result_femenino = $conexion->query($sql_femenino);
$row_femenino = $result_femenino->fetch_assoc();

// Consulta para contar estudiantes masculinos
$sql_masculino = "SELECT COUNT(*) AS total_masculino FROM asistencia WHERE genero = 'Masculino' AND ide = $idevento";
$result_masculino = $conexion->query($sql_masculino);
$row_masculino = $result_masculino->fetch_assoc();

// Consulta para contar estudiantes otro genero
$sql_masculino = "SELECT COUNT(*) AS total_Otros FROM asistencia WHERE genero = 'Otros' AND ide = $idevento";
$result_Otros = $conexion->query($sql_masculino);
$row_Otros = $result_Otros->fetch_assoc();

// Consulta para contar estudiantes con alguna discapacidad
$sql_discapacidad = "SELECT COUNT(*) AS total_discapacidad FROM asistencia WHERE disc != 'Ninguna' AND ide = $idevento";
$result_discapacidad = $conexion->query($sql_discapacidad);
$row_discapacidad = $result_discapacidad->fetch_assoc();

?>

<h2 class="mb-0"><?php echo $row_femenino['total_femenino']; ?></h2>



                </div>
                <div class="float-right icon-circle-medium icon-box-lg mt-1">
                    <i class="fa-solid fa-person-dress fa-fw fa-sm text-primary"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Asistencia Masculina</h5>
                    <h2 class="mb-0"><h2 class="mb-0"><?php echo $row_masculino['total_masculino']; ?></h2>
                </div>
                <div class="float-right icon-circle-medium icon-box-lg mt-1">
                    <i class="fa-solid fa-person fa-fw fa-sm text-primary"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="card">
        <div class="card-body">
            <div class="d-inline-block">
                <h5 class="text-muted">Asistencia Otro Genero</h5>
                <h2 class="mb-0"><?php echo $row_Otros['total_Otros']; ?></h2>
            </div>
            <div class="float-right icon-circle-medium icon-box-lg mt-1">
                <i class="fa-solid fa-person-half-dress fa-fw fa-sm text-primary"></i>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="card">
        <div class="card-body">
            <div class="d-inline-block">
                <h5 class="text-muted">Estudiantes con Discapacidad</h5>
                <h2 class="mb-0"><?php echo $row_discapacidad['total_discapacidad']; ?></h2>
            </div>
            <div class="float-right icon-circle-medium icon-box-lg mt-1">
                <i class="fa-solid fa-wheelchair fa-fw fa-sm text-primary"></i>
            </div>
        </div>
    </div>
</div>
</div>

<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="card">
        <div class="card-body">
            <div class="d-inline-block">
                <h5 class="text-muted">Añadir Estudiante Individual</h5>
<form id="formularioEstudiante" action="anadir.php" method="POST">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
    <input class="form-control form-control-lg" style=" display: none;"id="username"  name="nombrevento" type="text" value="<?php echo $row ['nombre'] ;?>"autocomplete="off" >
    <input name="cedula" type="text" placeholder="Numero de Cédula" maxlength="9" minlength="5" pattern="[0-9]+" required="" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
    <button type="submit" class="btn btn-primary" >Añarir</button>
  
</form>                                          </div>
            <div class="float-right icon-circle-medium icon-box-lg mt-1">
                <i class="fa-solid fa-address-book fa-fw fa-sm text-primary"></i>
            </div>
             
        </div>
    </div>
</div>




<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Cupos restantes',     <?php echo $cupostom; ?>],
          ['Cupos familiares',      <?php echo $row['famdisp'];?>],
          ['Asistencia Femenina',  <?php echo $row_femenino['total_femenino']; ?>],
          ['Asistencia Masculina', <?php echo $row_masculino['total_masculino']; ?>],
          ['Asistencia Otro Genero',    <?php echo $row_Otros['total_Otros']; ?>],
          ['Estudiantes con Discapacidad',    <?php echo $row_discapacidad['total_discapacidad']; ?>],

        ]);

        var options = {
          title: 'Grafica' 
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 200; height: 300px;"></div>
  </body>
</html>
<br>


<html>
  <head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var totalCupos = <?php echo $row['Cupos'];?>; // Asumiendo que es 20
    var cuposRestantes = <?php echo $cupostom;?>;
    var cuposOcupados = totalCupos - cuposRestantes; // 20 - 10 = 10

    var data = google.visualization.arrayToDataTable([
      ['Categoría', 'Cantidad'],
      ['Cupos Ocupados',  cuposOcupados], // Esto sería 10
      ['Cupos Restantes', cuposRestantes] // Esto sería 10
    ]);

    var options = {
      title: 'Gráfico de Cupos',
      is3D: true,
      colors: ['#FF9900', '#3366CC'] // Opcional: Define colores para las secciones
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
  }
</script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 300; height: 400;"></div>
  </body>
</html>
<br>
<?php if ($row['estatus'] !== 'Culminado' && $row['estatus'] !== 'Cancelado') : ?>



<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="card">
        <div class="card-body">
            <div class="d-inline-block">
                <h5 class="text-muted">Añadir lista de asistencia por excel </h5>
                <form action="recibe_excel_validando.php" method="POST" enctype="multipart/form-data">
                <input class="form-control form-control-lg" style=" display: none;"id="username"  name="evento" type="text" value="<?php echo $row ['id'] ;?>"autocomplete="off" >
                <input class="form-control form-control-lg" style=" display: none;"id="username"  name="nombrevento" type="text" value="<?php echo $row ['nombre'] ;?>"autocomplete="off" >

                <div class="custom-file mb-3">
                <input type="file" name="dataCliente" class="custom-file-input" id="customFile" required>
                <label class="custom-file-label" for="customFile">Buscar Excel</label>
                    </div>
                    <div class="text-center mt-5">
                        <input type="submit" name="subir"  class="btn btn-primary" value="Subir Excel"/>
                        
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
<?php endif; ?>

    
    
    <!-- Añadir más columnas según sea necesario -->


                            
                            

                            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2 class="pageheader-title">Lista de asistencia del evento <?php echo $row ['nombre'];?> <i class="fa fa-list-alt "></i></h2>
                    
  <div class="table-responsive ">
  <table id="example" class="table table-striped table-bordered second" style="width:100%">
		<thead>
			<tr>
		
			</tr>
			<tr>
            <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>dni</th>
                <th>Tipo de asistencia</th>
                <th>Fecha de llegada</th>
				<th>Asistencia</th>
      
                <th>QR manual</th>

		
                



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

<td><?php echo $row ['idestudiante'];?></td>
<td><?php echo $row ['nombre'];?></td>
<td><?php echo $row ['apellido'];?></td>
<td><?php echo $row ['dni'];?></td>
<td><?php echo $row ['tipo'];?></td>
<td><?php echo $row ['fecha'];?></td>




<td>
    <?php if ($row['asistencial'] === 'Sin presentarse'): ?>
        Sin presentarse  <span class="badge-dot badge-danger mr-1" aria-label="Sin presentarse">
          
        </span>
    <?php elseif ($row['asistencial'] === 'Presente'): ?>
        Presente <span class="badge-dot badge-success mr-1" aria-label="Presente">
         
        </span>
    <?php elseif ($row['asistencial'] === 'Rezagado'): ?>
        Rezagado <span class="badge-dot badge-warning mr-1" aria-label="Rezagado">
           
        </span>
    <?php else: ?>
        <span>Estado desconocido</span>
    <?php endif; ?>
</td>






<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#asistir<?php echo $row['id'];?>">
<i class="fa-solid fa-qrcode " style="color: #ffffff;"></i></a>
</button>
</td>







</tr>

<?php
include 'asistirest.php';
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
  
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    <script src="js/jquery.min.js"></script>
<script src="'js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });      
});


</body>
 
</html>