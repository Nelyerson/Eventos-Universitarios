<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="estilos.css">
</head>
<?php
include 'barra.php';
?>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">

            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                        <div style="text-align: center;">
                            <h2 class="pageheader-title">Agregar Usuario</h2>            <i class="fa fa-user fa-fw fa-3x text-primary"></i>
</div> <br>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Superhomess.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Agregar usuario</li>
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
                                <form action="Superanadirr.php" method="POST" enctype="multipart/form-data">

                                <label for="inputText3" class="col-form-label">Introduzca los datos para el nuevo usuario: </label>         <br>

                                <div class="contenedor">
                                <input name="Nombre" type="text" placeholder="Nombre de usuario" maxlength="20" minlength="5" required="" pattern="[a-zA-Z]+" autocomplete="off">
                            </div>

                                <div class="contenedordos">
                                    <input name="password" type="password" placeholder="Contraseña" maxlength="20" minlength="5" required="" autocomplete="off">
                                </div>

                                                                                 
    <div class="contenedordos">
    <input  name="Contacto" type="text" placeholder="Numero de telefono" maxlength= "10" minlength="5" required="">
    </div>

                                  

<div class="contenedor">
<input id="inputText3" placeholder="Email" name="email" type="text" class="form-control" maxlength= "70" minlength="5">
    </div>

                                                    <select id="select" name="Nivel" class="select">
                                                    <option value="0">Usuario</option>
                                                    <option value="1">Superusuario</option>
                                                    </select>
                                                   
   
   
                                 

                                
                                    <label for="archivo" class="col-form-label">Agregar foto del usuario</label>
                                    <div class="custom-file mb-3">
                                  
                                                <input type="file" class="custom-file-input" id="archivo" name="archivo" accept="image/*" required>
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

                                   
                                    
<div style="text-align: center;">
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