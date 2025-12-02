<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Anadir Personal</title>
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
                            <h2 class="pageheader-title">Agregar personal</h2>            <i class="fa fa-user fa-fw fa-3x text-primary"></i>
</div> <br>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homess.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Añadir Personal</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Añadir Personal</h5>
                            <div class="card-body">
                            <form action="agregarpersonal.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group d-flex">
                            <div class="flex-grow-1 me-2">

                            <label for="inputText3" class="col-form-label">Introduzca el nombre, apellido y cedula: </label>         <br>
                            <div class="contenedor">
                            <input id="inputText3" name="nombre" type="text"  placeholder="Nombre" class="form-control" maxlength= "40" minlength="5" required="" pattern= "[a-z A-Z]+">
                            </div>

                                <div class="contenedordos">
                                <input id="inputText3" name="apellido" type="text" class="form-control" maxlength= "70" minlength="5"  required placeholder="Apellido" pattern= "[a-z A-Z]+">
                                </div>

                                <div class="contenedordos">
                                <input id="inputText3" name="DNI" type="text" placeholder="Cedula" class="form-control" maxlength= "8" minlength="7" required pattern= "[0-9]+">
                                </div> <br>
                                <label for="inputText3" class="col-form-label">Introduzca Su especialidad, numero de telefono y su dirección: </label>         <br>
                                <div class="contenedordos">
                                <input id="inputText3" name="Especialidad" type="text" placeholder="Especialidad" class="form-control" maxlength= "70" minlength="5"  required pattern= "[a-z A-Z]+">
                                </div>
                                <div class="contenedordos">
                              <input id="inputText3" name="Telefono"type="text" placeholder="04XX-XXXX" class="form-control" minlength="7" maxlength= "10" required pattern= "[0-9]+">
                                </div>
                                <div class="contenedordos">
                                <input id="inputText3" name="Direccion"type="text"  placeholder="Dirección" class="form-control" maxlength= "70" minlength="5"required >
                                </div>
                                
                                
                                    
                                    <div class="form-group">
                                       
                                    </div>
                                    <div class="form-group d-flex">
                                    

                               
                                    <input id="inputText3" name="user" style=" display: none;"  type="text" class="form-control" maxlength= "4"  value="<?php echo $row ['username'] ; ?>">
                                    
                                    </div>
                                    <div class="form-group d-flex">
                                   
                                 
                                    </div>

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
                                

                                    <label for="archivo" class="col-form-label">Agregar foto</label>
                                    <div style="text-align: center;">
                                    <div class="custom-file mb-3">
                                  
                                                <input required type="file" class="custom-file-input" id="archivo" name="archivo" accept="image/*" required>
                                                <label class="custom-file-label" for="archivo">Subir Foto</label>
                                                
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

                                   
                                  

                                    <button href="SuperAñadir_Personalstudent.php" class="btn btn-primary "><i class="zmdi zmdi-floppy"></i> Guardar</button>
                                    
                                   
                                </form>
                            </div>
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
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>