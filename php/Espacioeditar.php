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



<div class="modal fade" id="editar<?php echo $row2 ['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">






             
                                <form action="espacioeditar1.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Nombre del espacio</label>
                                        <input id="inputText3" name="lugar" type="text" value="<?php echo $row2 ['lugar'];?>" class="form-control" maxlength= "40" minlength="5" pattern= "[a-z A-Z]+">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Capacidad</label>
                                        <input id="inputText3" name="capacidad" type="text" value="<?php echo $row2 ['Capacidad'];?>"class="form-control" maxlength= "40" minlength="5"  >
                                    </div>

                                    <input id="inputText3"  style=" display:none" value="<?php echo $row2 ['id'];?>" name="id" type="text" class="form-control" >
                                    <input id="inputText3"  style=" display:none" value="<?php echo $row ['username'];?>" name="user" type="text" class="form-control" >


                                    
                    
                                    <label for="archivo" class="col-form-label">Agregar foto del espacio</label>
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

                                   
<button href="SuperAñadir_Personalstudent.php" class="btn btn-primary btn-block"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                                    
                                   
                                    
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
</body>
 
</html>