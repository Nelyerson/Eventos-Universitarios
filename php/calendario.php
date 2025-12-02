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
   
  
</head>
<?php
include 'barra.php';
$ide = $row['id'];



if ($privilegio == 0) {
    // Si el privilegio es 0, agregar el filtro por ide
    $SqlEventos   = ("SELECT * FROM eventos WHERE disp= 0 AND ide = $ide");
} elseif ($privilegio == 1) {
    // Si el privilegio es 1, no filtrar por ide
    $SqlEventos   = ("SELECT * FROM eventos WHERE disp= 0");
}



$resulEventos = mysqli_query($conexion, $SqlEventos);
?>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
              

                    <div class="  col-12">
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
                                <h5 class="mb-0">Calendario</h5>
                                <p>Aqui abajo puede ver todos los eventos.</p>
                            </div>
                                    <br>   <br>   <br>
                            <div id="calendar"></div>

                            
<script src ="js/jquery-3.0.0.min.js"> </script>
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
 <?php } ?>
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