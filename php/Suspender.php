<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agregar Espacio</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="estilos.css">
</head>
<?php
require 'conexion.php';

session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: inicio.php');
} else  


$username = $_SESSION['usuario'];
$privilegio = $_SESSION['privilegio'];

$query = "SELECT * FROM usuarios WHERE privilegio= '1'";
$resultado=$conexion->query($query);
$row10 = $resultado->fetch_assoc();


$query = "SELECT * FROM usuarios WHERE username= '$username'";
$resultado=$conexion->query($query);
$row7 = $resultado->fetch_assoc();

$ide = $row7['id'];
$privilegio = $row7['privilegio'];

if ($privilegio == 0) {

} elseif ($privilegio == 1) {


$query = "SELECT * FROM usuarios WHERE id= '$ide'";
$resultado=$conexion->query($query);
$row5 = $resultado->fetch_assoc();
}
?>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">

            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                        <div style="text-align: center;">
                            <h2 class="pageheader-title"> Suspendido Realizar Pagos</h2>            <i class="fa fa-building fa-fw fa-3x text-primary"></i>
</div>
                 
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header"></h5>
                            <div class="card-body">
                                <form action="ppago.php" method="POST" enctype="multipart/form-data">
                                

                                    <?php                                     
  
  if ($privilegio == 0) {
      // Si el privilegio es 0, mostrar la opción "Crear Evento"
      ?>
      <input id="inputText3" name="ide" style=" display: none;"  type="text" class="form-control" maxlength= "4"  value="<?php echo $ro7 ['id'] ; ?>">
      <?php
  } elseif ($privilegio == 1) {
      // Si el privilegio es 1, mostrar otra opción o no mostrar nada
      ?>
        <input id="inputText3" name="ide" style=" display: none;"  type="text" class="form-control" maxlength= "4"  value="<?php echo $row7 ['id'] ; ?>">
      <?php
  }
  ?>


<label for="inputText3" class="col-form-label">Numero de Referencia: </label>        
                                    <div class="contenedor">
                                    <input  name="referencia" type="text" placeholder=" Referencia" maxlength= "40" minlength="5" required="" pattern= "[0-9]+">
                                    </div>
                                                                              Datos de Pago <div class="contenedor">
                                    <input  name="Datos de Pago" type="text" placeholder=" <?php echo $row10['banco'];?>" maxlength= "100" minlength="5"  pattern= "[0-9]+">
                                    </div>
                                            Monto a Pagar  <div class="contenedor">
                                    <input  name="Monto a Pagar" type="text" placeholder=" <?php echo $row10['membresia'];?>" maxlength= "100" minlength="5"  pattern= "[0-9]+">
                                    </div>
                               
<br>
			<input style=" display: none;" type="text" class="form-control" name="escuela"  placeholder="Nombres" value="<?php echo $row7['username'];?>"/><br><br>
            <input style=" display: none;" type="text" class="form-control" name="id"  placeholder="Nombres" value="<?php echo $row7['id'];?>"/><br><br>

	
                                    <input id="inputText3" name="username" style=" display: none;"  type="text" class="form-control" maxlength= "4"  value="<?php echo $row ['username'] ; ?>">
                                    <label for="archivo" class="col-form-label"></label>
                                    <div class="custom-file mb-3">
                                  
                                                <input type="file" class="custom-file-input" id="archivo" name="archivo" accept="image/*" required>
                                                <label class="custom-file-label" for="archivo">Capture de Pago</label>
                                                
                                        <div id="image-preview-container">
                                            <h3 id="preview-label"></h3> <div id="image-preview"></div>
                                        </div>
                                     
<script>
const fileInput = document.getElementById('archivo');
const imagePreview = document.getElementById('image-preview');
const previewLabel = document.getElementById('preview-label'); // Access the label element

fileInput.addEventListener('change', (event) => {
   const file = event.target.files[0];

   if (!file || !file.type.startsWith('image/')) {
	   imagePreview.innerHTML = '';
	   previewLabel.textContent = ''; // Reset the label to its default text
	   alert('Porfavor seleccione una imagen.');
	   return;
   }

   const reader = new FileReader();

   reader.onload = (event) => {
	   imagePreview.innerHTML = `<img src="${event.target.result}" alt="Preview" style="max-width: 250px; max-height: 250px; display: block; margin: 0 auto;">`;
	   previewLabel.textContent = ''; // Update the label to indicate selection
   };

   reader.readAsDataURL(file);
});
</script>


<div style="text-align: center;">
                                    <button href="SuperAñadir_Personalstudent.php" class="btn btn-primary "><i class="zmdi zmdi-floppy"></i> Enviar</button>
                              
                                    
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