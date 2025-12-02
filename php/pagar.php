<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Realizar Pagos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="estilos.css">

    <style>
        /* Centrar card */
        .card {
            max-width: 980px;
            margin: 0 auto;
        }

        /* Layout del formulario */
        form .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Máximo 2 columnas */
        .form-group {
            flex: 1 1 calc(50% - 20px);
               border-radius: 8px;
        }

        /* Campos largos */
        .full-width {
            flex-basis: 100% !important;
        }

        /* Inputs a 100% */
        .form-group input,
        .form-group select {
            width: 100%;
            height: 45px;
            border-radius: 8px;
            background-color: #e7e4ff;
                border: none;
        }

        /* Ajuste de tus divs originales */
        .contenedor,
        .contenedordos,
        .rueda,
        .ruedados {
            width: 100% !important;
        }

        /* Imagen */
        .custom-file {
            max-width: 350px;
        }

        #image-preview-container {
            text-align: center;
            margin-top: 15px;
        }

        /* Responsive */
        @media(max-width: 768px) {
            .form-group {
                flex-basis: 100% !important;
            }
        }

        .row-two-fields {
    display: flex;
    gap: 20px;
    width: 100%;
}


.row-two-fields .form-group {
    flex: 1; /* ambos ocupan 50% */
}

.row-two-fields input {
    width: 100%;
    height: 45px;
}

/* Evitar scroll hacia la derecha en móviles */
body, html {
    overflow-x: hidden;
}

/* Los contenedores personalizados no deben desbordar */
.contenedor,
.contenedordos,
.rueda,
.ruedados {
    width: 100% !important;
    max-width: 100% !important;
}

/* Asegurar que los inputs también se adapten */
.contenedor input,
.contenedordos input,
.rueda input,
.ruedados input,
input[type="date"],
input[type="time"],
input[type="number"] {
    width: 100%;
    box-sizing: border-box;
}
    </style>
</head>
<?php
include 'barra.php';
$query = "SELECT * FROM usuarios WHERE username= 'super'";
$resultado=$conexion->query($query);
$row7 = $resultado->fetch_assoc();

$ide = $row['id'];

if ($privilegio == 0) {

} elseif ($privilegio == 1) {

$id= $_REQUEST ['id'];
$query = "SELECT * FROM usuarios WHERE id= '$id'";
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
                            <h2 class="pageheader-title">Realizar Pagos</h2>            <i class="fa fa-coins fa-fw fa-3x text-primary"></i>
</div>
                 
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Superhomess.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Realizar Pagos</li>
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
                                <form action="ppagoU.php" method="POST" enctype="multipart/form-data">
                                

                                    <?php                                     
  
  if ($privilegio == 0) {
      // Si el privilegio es 0, mostrar la opción "Crear Evento"
      ?>
      <input id="inputText3" name="ide" style=" display: none;"  type="text" class="form-control" maxlength= "4"  value="<?php echo $row ['id'] ; ?>">
      <?php
  } elseif ($privilegio == 1) {
      // Si el privilegio es 1, mostrar otra opción o no mostrar nada
      ?>
        <input id="inputText3" name="ide" style=" display: none;"  type="text" class="form-control" maxlength= "4"  value="<?php echo $row5 ['id'] ; ?>">
      <?php
  }
  ?>

<label for="inputText3" class="col-form-label">Datos del pago movil: <?php echo $row7['banco'];?> </label>    <br>
<label for="inputText3" class="col-form-label">Monto a pagar: <?php echo $row7['membresia'];?> </label>    <br>
<label for="inputText3" class="col-form-label">Numero de Referencia: </label>                                            <div class="contenedor">
                                    <input  name="referencia" type="text" placeholder=" Referencia" maxlength= "40" minlength="5" required="" pattern= "[0-9]+">
                                    </div>
                                                                           Datos de Pago    <div class="contenedor">
                                    <input  name="Datos de Pago" type="text" maxlength= "100" minlength="5"  pattern= "[0-9]+">
                                    </div>   
                                                                             Monto Transferido  <div class="contenedor">
                                    <input  name="Monto a Pagar" type="text"  maxlength= "100" minlength="2"  pattern= "[0-9]+">
                                    </div>
                                    </div>

			<input style=" display: none;" type="text" class="form-control" name="escuela"  placeholder="Nombres" value="<?php echo $row['username'];?>"/><br><br>
			<input style=" display: none;" type="text" class="form-control" name="id"  placeholder="Nombres" value="<?php echo $row['id'];?>"/><br><br>


                                    <input id="inputText3" name="username" style=" display: none;"  type="text" class="form-control" maxlength= "4"  value="<?php echo $row ['username'] ; ?>">
                                    
                                    <label for="archivo" class="col-form-label"></label>
                                  
                                    <div style="text-align: center;">
                                    <div class="custom-file mb-3">
                                  
                                                <input type="file" class="custom-file-input" id="archivo" name="archivo" accept="image/*" required>
                                                <label class="custom-file-label" for="archivo">Capture de Pago</label>
                                                
                                        <div id="image-preview-container">
                                            <h3 id="preview-label"></h3> <div id="image-preview"></div>
                                        </div>
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

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>               

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