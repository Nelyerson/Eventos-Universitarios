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



                                <form action="editarpersonas.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Nombres</label>
                                        <input id="inputText3"value="<?php echo $row2 ['nombre'];?>" name="nombre" type="text" class="form-control" maxlength= "40" minlength="5"  pattern= "[a-z A-Z]+">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Apellidos</label>
                                        <input id="inputText3"value="<?php echo $row2 ['apellido'];?>" name="apellido" type="text" class="form-control" maxlength= "70" minlength="5"  pattern= "[a-z A-Z]+">
                                    </div>
                                    <input id="inputText3"  style=" display:none" value="<?php echo $row2 ['id'];?>" name="id" type="text" class="form-control" >
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Especialidad</label>
                                        <input id="inputText3"value="<?php echo $row2 ['pnf'];?>" name="pnf" type="text" class="form-control" maxlength= "70" minlength="5"  pattern= "[a-z A-Z]+">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Telefono</label>
                                        <input id="inputText3"value="<?php echo $row2 ['telefono'];?>" name="telefono"type="text" class="form-control">
                                    </div>
                                    <input id="inputText3" name="user" style=" display: none;"  type="text" class="form-control" maxlength= "4"  value="<?php echo $row ['username'] ; ?>">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">DNI</label>
                                        <input id="inputText3"value="<?php echo $row2 ['dni'];?>" name="dni"type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Direccion</label>
                                        <input id="inputText3"value="<?php echo $row2 ['direccion'];?>" name="direccion"type="text" class="form-control">
                                    </div>
                                

                                    <label for="archivo" class="col-form-label">Agregar foto</label>
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
                                    
                                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cancelar</button>

                                    </div>
     
    </div>
  </div>
</div>
                                    
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          
</body>
 
</html>