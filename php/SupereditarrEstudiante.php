<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agregar Estudiante</title>
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
                        <div class="page-header">
                            <h2 class="pageheader-title">Editar Estudiante</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Superhomess.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Editar Estudiante</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Editar Estudiante</h5>
                            <div class="card-body">



                            <?php
require 'conexion.php';

$id= $_REQUEST['id'];

$query = "SELECT * FROM estudiantes WHERE id= '$id'";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();


?>


                                <form action="Supereditarestudiantep.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Nombres</label>
                                        <input id="inputText3" placeholder="<?php echo $row ['nombres'];?>" name="nombre" type="text" class="form-control" maxlength= "40" minlength="5" required="" pattern= "[a-z A-Z]+">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Apellidos</label>
                                        <input id="inputText3"placeholder="<?php echo $row ['apellidos'];?>" name="apellidos" type="text" class="form-control" maxlength= "70" minlength="5"  pattern= "[a-z A-Z]+" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Cedula</label>
                                        <input id="inputText3" placeholder="<?php echo $row ['dni'];?>"name="dni"type="text" class="form-control"required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Numero de telefono</label>
                                        <input id="inputText3"placeholder="<?php echo $row ['telefono'];?>" name="telefono" type="text" class="form-control"required>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Discapacidad</label>
                                        <input id="inputText3" placeholder="<?php echo $row ['discapacidad'];?>"name="discapacidad" type="text" class="form-control" maxlength= "40" minlength="5" required="" pattern= "[a-z A-Z]+">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Direccion</label>
                                        <input id="inputText3" placeholder="<?php echo $row ['direccion'];?>"name="direccion" type="text" class="form-control" maxlength= "70" minlength="5"  pattern= "[a-z A-Z]+"required>
                                    </div>

                                   
                                   
                                            <div class="form-group">
                                                <label for="input-select">PNF</label>
                                                <select class="form-control" id="input-select" name="pnf" required>
                                                    <option>Informatica</option>
                                                    <option>Electronica</option>
                                                </select>
                                            </div>
                                 
                     
                                                                    
                                    <label for="archivo" class="col-form-label">Agregar foto del Estudiante</label>
                                    <div class="custom-file mb-3">
                                  
                                                <input type="file" class="custom-file-input" id="archivo" name="archivo" accept="image/*" >
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




                                            
                                   
                                    <button href="student.php" class="btn btn-primary btn-block"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                                    
                                   
                                </form>
                            </div>
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
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
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