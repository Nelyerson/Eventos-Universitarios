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
      
<?php

$idd= $row2 ['ide'];
if ($privilegio == 0) {
    // Si el privilegio es 0, agregar el filtro por ide
    $sql = "SELECT lugar FROM espacios WHERE Disponibilidad = 'Disponible' AND ide = $ide ORDER BY id DESC";
    $result = $conexion->query($sql);
} elseif ($privilegio == 1) {
    // Si el privilegio es 1, no filtrar por ide
    $sql = "SELECT lugar FROM espacios WHERE Disponibilidad = 'Disponible' AND ide = $idd ORDER BY id DESC";
    $result = $conexion->query($sql);
}

                                        
                                    
                                    ?>

      <div class="modal-body">


                                <form action="editareventoo.php" method="POST" enctype="multipart/form-data">
                                    
                                <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Nombre</label>
                                        <input id="inputText3"   value="<?php echo $row2 ['nombre'];?>" name="nombre" type="text" class="form-control" maxlength= "40" minlength="5" required="" pattern= "[a-z A-Z]+" >
                                    </div>
                                    <div class="form-group">
                                                <label for="input-select">Espacio</label>
                                                <select class="form-control" id="input-select" name="ubicacion" >
                                                <option value=""><?php echo $row2 ['espacio'];?></option>
                                               
                                                   
                                                    <?php
                                             if ($result->num_rows > 0) {
                                                while ($row55 = $result->fetch_assoc()) {
                                                    $selected = ($row55['lugar'] == $lugar_seleccionado) ? 'selected' : '';
                                                    echo "<option value='" . $row55['lugar'] . "' $selected>" . $row55['lugar'] . "</option>";
                                                }
                                            } else {
                                             
                                            }
                                                    ?>
                                                </select>
                                            </div>
                                           
                                    <input id="inputText3"  style=" display:none" value="<?php echo $row2 ['espacio'];?>" name="anterior" type="text" class="form-control" >       
                                    <input id="inputText3"  style=" display:none" value="<?php echo $row2 ['id'];?>" name="id" type="text" class="form-control" >
                                    <input id="inputText3"  style=" display:none" value="<?php echo $row2 ['dispon'];?>" name="dispon" type="text" class="form-control" >
                                    <input id="inputText3"  style=" display:none" value="<?php echo $row2 ['famdisp'];?>" name="famdisp" type="text" class="form-control" >
                                    <input id="inputText3" name="user" style=" display:none ;"  type="text" class="form-control"   value="<?php echo $row ['username'] ; ?>">

                                    <div class="form-group">
                                                <label for="input-select">Tipo de evento</label>
                                                <select class="form-control" id="input-select" name="tipo" value="<?php echo $row2 ['tipo'];?>" required>
                                                <option value="Firma del libro" <?php if ($row2['tipo'] == 'Firma del libro') echo 'selected'; ?>>Firma del libro</option>
                                                <option value="Acta de grado" <?php if ($row2['tipo'] == 'Acta de grado') echo 'selected'; ?>>Acta de grado</option>
                                                <option value="Imposision de medalla" <?php if ($row2['tipo'] == 'Imposision de medalla') echo 'selected'; ?>>Imposision de medalla</option>
                                                <option value="Otro" <?php if ($row2['tipo'] == 'Otro') echo 'selected'; ?>>Otro</option>
                                                </select>
                                            </div>
                                    
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Fecha inicial</label>
                                        <input id="inputText3"  value="<?php echo $row2 ['fechai'];?>" name="fechai"type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Fecha de Conclusión</label>
                                        <input id="inputText3"  value="<?php echo $row2 ['fechac'];?>" name="fechac" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Numeros de cupos</label>
                                        <input id="inputText3" value="<?php echo $row2 ['Cupos'];?>" name="cupos" min="<?php echo $row2 ['Cupos'];?>" type="number" class="form-control" maxlength= "4"   pattern= "[a-z A-Z]+">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">limite de familiares total</label>
                                        <input id="inputText3" value="<?php echo $row2 ['familia'];?>" min="<?php echo $row2 ['familia'];?>" name="familia" min="0" type="number" class="form-control" maxlength= "4"   pattern= "[a-z A-Z]+">
                                    </div>
                                    <label for="inputText3" class="col-form-label">*Una vez que se hayan aumentado los cupos o el número de familiares, no se podrá reducir el valor establecido.*</label> <br>
                                   
                                   
                                    <label for="archivo" class="col-form-label">Agregar foto del evento</label>
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