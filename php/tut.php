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
</head>
<?php
include 'tutbarra.php';
$ide = $row['id'];
                   

?>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
            <div class="container">
            <img src="..\assets\logo\lo3.png" width="100" height="100"alt="Texto alternativo"> 
            </div>

            <div class="container">
            
    <h2 class="pageheader-title">Bienvenido a eventos</h2><br>
  </div>

            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Porfavor introduzca los datos de su institucion</h5>
                            <div class="card-body">
                                <form action="tutp.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Nombre de la institucion</label>
                                        <input id="inputText3" name="nombre" type="text" class="form-control" maxlength= "60" minlength="5" required="" >
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Direccion</label>
                                        <input id="inputText3" name="direccion"type="text" class="form-control" maxlength= "200" minlength="5"required >
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Fecha de fundacion</label>
                                        <input id="inputText3" name="funda"type="date" class="form-control" max="<?= date("Y-m-d");?>">
                                    </div>
                                    
                                    <input id="inputText3" name="ide" style=" display: none;"  type="text" class="form-control" maxlength= "4"  value="<?php echo $row ['id'] ; ?>">

                                    <div class="form-group">
                                    <label for="archivo" class="col-form-label">Agregar foto de perfil para la institucion</label>
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

                                   
                                    <button href="student.php" class="btn btn-primary btn-block"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                                    
                                   
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
    <style>
    .container {
      text-align: center;
    }

    @media (min-width: 768px) {
      .container {
        display: flex;
        justify-content: center;
      }
    }
  </style>
</body>
 
</html>