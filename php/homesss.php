<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link href='../assets/vendor/full-calendar/css/fullcalendar.css' rel='stylesheet' />
    <link href='../assets/vendor/full-calendar/css/fullcalendar.print.css' rel='stylesheet' media='print' />
    <style>
.pageheader-title {
  color: #7c75dc; /* Cambia el color del texto a #7c75dc */
}
 /* Centrado y ajuste correcto */
  #calendar {
    width: 100%;
    max-width: 900px;
    margin: 0 auto;
  }

  /* Evitar scroll horizontal general */
  body {
    overflow-x: hidden;
  }

  /* FullCalendar necesita este ajuste en móviles */
  @media(max-width: 600px){
    .fc-view-container, 
    .fc-view {
      overflow-x: auto !important;
      overflow-y: hidden;
    }

    .fc-view table {
      width: 100%;
      table-layout: fixed;
    }
  }


</style>

</head>
<?php
include 'barra.php';

date_default_timezone_set('America/Caracas');
$fechaHoraActual = date("Y-m-d");
$ide = $row['id'];


$query = "SELECT COUNT(*) AS total FROM eventos WHERE disp = 0 AND ide = $ide";
$resultado = mysqli_query($conexion, $query); // Asegúrate de usar la conexión correcta
$fila = mysqli_fetch_assoc($resultado); // Obtén el resultado como un array asociativo
$total = $fila['total'];


$query = "SELECT COUNT(*) AS totaldos FROM estudiantes WHERE disp = 0 AND ide = $ide";
$resultado = mysqli_query($conexion, $query); // Asegúrate de usar la conexión correcta
$fila = mysqli_fetch_assoc($resultado); // Obtén el resultado como un array asociativo
$totaldos = $fila['totaldos'];


$query = "SELECT COUNT(*) AS totaltres FROM profesores WHERE disp = 0 AND ide = $ide";
$resultado = mysqli_query($conexion, $query); // Asegúrate de usar la conexión correcta
$fila = mysqli_fetch_assoc($resultado); // Obtén el resultado como un array asociativo
$totaltres = $fila['totaltres'];


$query = "SELECT COUNT(*) AS totalcuatro FROM espacios WHERE disp = 0 AND ide = $ide";
$resultado = mysqli_query($conexion, $query); // Asegúrate de usar la conexión correcta
$fila = mysqli_fetch_assoc($resultado); // Obtén el resultado como un array asociativo
$totalcuatro = $fila['totalcuatro'];


?>
 
    
    
        <div class="dashboard-wrapper">
      
        <div class="container-fluid dashboard-content">
            
        <div class="page-header">
   
        <div class="card-body border-top">
            
                                            <div style="text-align: center;">
                                          
                                            <a class="nav-link nav-user-img"><img src="<?php echo $row['foto']; ?>" alt="" class="user-avatar-md rounded-circle"></a>
                                            <h3  class="pageheader-title">Bienvenido de vuelta <?php echo $row ['username'] ; ?>.</h3>
                                            </div>
                                         
                                           
                                        </div>
                                        <h2 class="pageheader-title" style="display: inline-block; vertical-align: middle;">Resumen <i class="fa fa-book"></i></h2> 
                                      <!--   <br> <a href="#" class="breadcrumb-link">Ver Video instructivo </a> -->
                                <p class="pageheader-text">.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Inicio</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Aqui podras ver un resumen de los eventos y sus estados</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                         
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
    <?php if (isset($_GET['status']) && $_GET['status'] == 'fam'): ?>
        <div class="alert alert-danger" role="alert">
            No se puede disminuir la cantidad de familias maximas.
        </div>
    <?php endif; ?>



    
                <div class="row">
                <?php                                     
  
  if ($privilegio == 0) {
      // Si el privilegio es 0, mostrar la opción "Crear Evento"
      ?>
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Eventos creados</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $total; ?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                   
                                        </div>
                                    </div>
                                </div>
                            </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Estudiantes registrados</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $totaldos; ?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Personal registrados</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $totaltres ; ?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Espacios registrados</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $totalcuatro ; ?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
     
      <?php
  } elseif ($privilegio == 1) {
     
  }
  ?>
             
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                 <h2 class="pageheader-title" style="display: inline-block; vertical-align: middle;">Eventos Mas Recientes <i class="fa-solid fa-list"></i></h2>
                                <div class="card">
                                    
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                     
                                                        <th class="border-0">Imagen</th>
                                                        <th class="border-0">Nombre</th>
                                                        <th class="border-0">Lugar</th>
                                                        <th class="border-0">Fecha inicial</th>
                                                        <th class="border-0">Fecha de culminacion</th>
                                                        <th class="border-0">Hora</th>
                                                        <th class="border-0">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
require 'conexion.php';

if ($privilegio == 0) {
    // Si el privilegio es 0, agregar el filtro por ide
    $query = "SELECT * FROM eventos WHERE disp = 0 AND ide = $ide ORDER BY id DESC LIMIT 5";
} elseif ($privilegio == 1) {
    // Si el privilegio es 1, no filtrar por ide
    $query = "SELECT * FROM eventos WHERE disp = 0  ORDER BY id DESC LIMIT 5";
}


$resultado=$conexion->query($query);
while ($reciente = $resultado->fetch_assoc()) {

?>
                                                    <tr>
                                                      
                                                        <td>
                                                        <div class="m-r-10"><img src="<?php echo $reciente['foto']; ?>" alt="user" class="rounded" width="45"></div>
                                                        </td>
                                                        <td><?php echo $reciente ['nombre'];?></td>
                                                        <td><?php echo $reciente ['espacio'];?></td>
                                                        <td><?php echo date("d-m-Y", strtotime($reciente['fechai'])); ?></td>
                                                        <td><?php echo date("d-m-Y", strtotime($reciente['fechac'])); ?></td>
                                                        <td><?php echo $reciente ['horai'];?></td>
                                                        <td>
                                                            <?php if ($reciente['estatus'] == 'Culminado'): ?>
                                                                Culminado   <span class="badge-dot badge-warning mr-1" aria-label="Culminado"></span>

                                                            <?php elseif ($reciente['estatus'] == 'Vigente'): ?>
                                                                Vigente  <span class="badge-dot badge-success mr-1" aria-label="Vigente"></span>


                                                             <?php elseif ($reciente['estatus'] == 'Cancelado'): ?>
                                                                Cancelado <span class="badge-dot badge-danger mr-1" aria-label="Cancelado"></span>

                                                            <?php else: ?>
                                                                <span>Estado desconocido</span>
                                                            <?php endif; ?>
                                                        </td>

                                                    </tr>
                                                   <?php
                                                   }
                                                   ?>
                                                   
                                                    <tr>
                                                        <td colspan="9"><a href="homess.php" class="btn btn-outline-light float-right">Ver mas</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                                <!-- ============================================================== -->
                                <!-- top perfomimg  -->
                                <!-- ============================================================== -->
                                <div class="card">
                                    <h5 class="card-header">Eventos mas populares</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table no-wrap p-table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Evento</th>
                                                        <th class="border-0">Asistencia confirmadas</th>
    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
require 'conexion.php';

if ($privilegio == 0) {
    // Si el privilegio es 0, agregar el filtro por ide
    $query = "SELECT * FROM eventos WHERE disp = 0 AND ide = $ide ORDER BY asis DESC LIMIT 3" ;
} elseif ($privilegio == 1) {
    // Si el privilegio es 1, no filtrar por ide
    $query = "SELECT * FROM eventos WHERE disp = 0  ORDER BY asis DESC LIMIT 3";
}


$resultado=$conexion->query($query);
while ($popular = $resultado->fetch_assoc()) {

?>
                                                    
                                                    <tr>
                                                        <td><?php echo $popular ['nombre'];?></td>
                                                        <td><?php echo $popular ['asis'];?></td>
                                                        
                                                    </tr>
                                                    <?php
                                                   }
                                                   ?>
                                                   
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end top perfomimg  -->
                                <!-- ============================================================== -->
                            </div>

                            

<?php
                            if ($privilegio == 0) {
    // Si el privilegio es 0, agregar el filtro por ide
    $SqlEventos   = ("SELECT * FROM eventos WHERE disp= 0 AND ide = $ide");
} elseif ($privilegio == 1) {
    // Si el privilegio es 1, no filtrar por ide
    $SqlEventos   = ("SELECT * FROM eventos WHERE disp= 0");
}



$resulEventos = mysqli_query($conexion, $SqlEventos);
?>
       

       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
       <h2 class="pageheader-title" style="display: inline-block; vertical-align: middle;">Calendario <i class="fa fa-calendar"></i></h2>
       <div class="card">
    


    
                            <div class="card-header">
                               
                                <p>Aqui abajo puede ver todos los eventos.</p>
                            </div>
                                    <br>   <br>   <br>
                                    
                            <div id="calendar"></div>

                            
<script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/moment.min.js"></script>	
<script type="text/javascript" src="js/fullcalendar.min.js"></script>
<script src='locales/es.js'></script>

<script type="text/javascript">
$(document).ready(function() {
  $("#calendar").fullCalendar({
    header: {
      left: "prev,next today",
      center: "title",
      right: "month,agendaWeek,agendaDay"
    },

    locale: 'es',

    defaultView: "month",
    navLinks: true, 
    editable: true,
    eventLimit: true, 
    selectable: true,
    selectHelper: false,

//Nuevo Evento

    
events: [
 <?php
while($dataEvento = mysqli_fetch_array($resulEventos)){ ?>
 {
 _id: '<?php echo $dataEvento['id']; ?>',
 title: '<?php echo $dataEvento['nombre']; ?>',
 start: '<?php echo $dataEvento['fechai']; ?>',
end:  '<?php echo $dataEvento['fechac']; ?>',
color: '<?php echo $dataEvento['color']; ?>',
 editable: false // Aquí se deshabilita el arrastre del evento
 },
 <?php }
 
 ?>

 
],

});





//Oculta mensajes de Notificacion
  setTimeout(function () {
    $(".alert").slideUp(300);
  }, 3000); 


});


</script>
                            
<br>   <br>   <br>
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
   
</body>
 
</html>