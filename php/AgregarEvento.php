<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agregar Evento</title>
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
                            <h2 class="pageheader-title">Agregar Evento</h2>            <i class="fa fa-flag fa-fw fa-3x text-primary"></i>
</div>

                            <?php if (isset($_GET['status']) && $_GET['status'] == 'fecha'): ?>
        <div class="alert alert-danger" role="alert">
            La fecha de cierre no puede ser mayor que la inicial.
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'hora'): ?>
        <div class="alert alert-danger" role="alert">
            La hora de cierre no puede ser mayor que la hora inicial.
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'fotoerror'): ?>
        <div class="alert alert-danger" role="alert">
            La imagen es demaciado grande, porfavor seleccione otra.
        </div>
    <?php endif; ?>
                            
   
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homess.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Agregar Evento</li>
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
                                <form action="agregareventoppp.php?user=super" method="POST" enctype="multipart/form-data">
                                   

                                    <?php                                     
  
  if ($privilegio == 0) {
      // Si el privilegio es 0, mostrar la opción "Crear Evento"
      ?>
         <?php
                                        $sql = "SELECT lugar FROM espacios WHERE Disponibilidad = 'Disponible' AND ide = $ide ORDER BY id DESC";
                                        $result = $conexion->query($sql);
                                    
                                    ?>
<label class="col-form-label">Nombre, Descripción y Espacio del evento:</label>
<div class="row-two-fields">

    <div class="form-group">

<div class="contenedor">
                                    <input  name="nombre" type="text" placeholder=" Nombre del evento" maxlength= "40" minlength="5" required="" pattern= "[a-z A-Z]+">
                                      </div>
                                    </div>
<div class="form-group">
                                    <div class="contenedordos">
                                    <input  name="descrip" type="text" placeholder="Descripcion" maxlength= "40" minlength="5" required="">
                                    </div>
                                      </div>
                         
</div>


                                <div class="form-group">
                                     <select class="select" id="input-select" name="campo" required>
                                                <option value="">Seleccione un espacio</option>
                                                    <?php
                                                    if ($result->num_rows > 0) {
                                                        // Iterar sobre los resultados y crear las opciones del select
                                                        while ($row55 = $result->fetch_assoc()) {
                                                            echo "<option value='" . $row55['lugar'] . "'>" . $row55['lugar'] . "</option>";
                                                        }
                                                    } else {
                                                        echo "<option value=''>No hay espacios disponibles</option>";
                                                    }
                                                    ?>
                                                </select>
                                                   </div>

                                          
  <label class="col-form-label">Tipo de evento y su PNF:</label>                                                 
<div class="row-two-fields">
                                      <div class="form-group">            
                                                <select class="select" id="input-select" name="tipo" required>
                                                    <option>Firma del libro</option>
                                                    <option>Acta de grado</option>
                                                    <option>Imposision de medalla</option>
                                                    <option>Otro</option>
                                                </select>
                                           </div>

 <div class="form-group"> 
                                                    <select id="pnf" name="pnf" required class="select">
                                                    <option value="administracion">Administración</option>
                                                    <option value="agroalimentaria">Agroalimentaria</option>
                                                    <option value="construccion civil">Construcción Civil</option>
                                                    <option value="electricidad">Electricidad</option>
                                                    <option value="electronica">Electrónica</option>
                                                    <option value="enfermeria">Enfermería</option>
                                                    <option value="informatica">Informática</option>
                                                    <option value="economia">Economía</option>
                                                    <option value="mecanica">Mecánica</option>
                                                    <option value="turismo">Turismo</option>
                                                    </select>
                                                    <br>
                                                    <br>
    </div>
      </div>




  <label class="col-form-label">Rango de fecha y hora del evento:</label>


<div class="row-two-fields">

    <div class="form-group">
     
        <input name="fechai" required type="date" min="<?= date("Y-m-d");?>">
    </div>
Hasta
    <div class="form-group">
 
        <input name="fechac" required  type="date" min="<?= date("Y-m-d");?>">
    </div>

</div>





<div class="row-two-fields">
<div class="form-group">  
<input id="inputText3" required name="horai"type="time" class="form-control" >
</div>  
Hasta
<div class="form-group">  
<input id="inputText3" required name="horac" type="time" class="form-control">

</div>  
</div>


  <label class="col-form-label">Limites para el evento:</label>
  <div class="row-two-fields">


<div class="form-group">  
<div class="rueda">
<input id="inputText3" required placeholder="Numero Cupos Disponibles" name="cupos" type="number" class="contenedor" min="1" maxlength="4" pattern="[a-z A-Z]+">
</div>   
</div>   

<div class="form-group">  
<div class="ruedados">
<input id="inputText3" required name="familia" placeholder="Numero de Limite de familiar por estudiante" type="number" class="form-control" min="1" maxlength="4" pattern="[a-z A-Z]+">
</div>  
</div>    
</div>   
     
      <?php
  } elseif ($privilegio == 1) {
      // Si el privilegio es 1, mostrar otra opción o no mostrar nada
      ?>

<?php
                                        $sql = "SELECT lugar FROM espacios WHERE Disponibilidad = 'Disponible' AND ide = $id ORDER BY id DESC";
                                        $result = $conexion->query($sql);
                                    
                                    ?>
                                    

                                    <label class="col-form-label">Nombre, Descripción y Espacio del evento:</label>
                                <div class="row-two-fields">

                                    <div class="form-group">

                                    <div class="contenedor">

                                    <input  name="nombre" type="text" placeholder=" Nombre del evento" maxlength= "40" minlength="5" required="" pattern= "[a-z A-Z]+">
                                    </div>
                                         </div>
             <div class="form-group">
                                    <div class="contenedordos">
                            
                                    <input  name="descrip" type="text" placeholder="Descripcion" maxlength= "40" minlength="5" required="">
                                    </div>
                                         </div>
                                                </div>
                                                
                         



                                 <div class="form-group">
                                     <select class="select" id="input-select" name="campo" required>
                                                <option value="">Seleccione un espacio</option>
                                                    <?php
                                                    if ($result->num_rows > 0) {
                                                        // Iterar sobre los resultados y crear las opciones del select
                                                        while ($row55 = $result->fetch_assoc()) {
                                                            echo "<option value='" . $row55['lugar'] . "'>" . $row55['lugar'] . "</option>";
                                                        }
                                                    } else {
                                                        echo "<option value=''>No hay espacios disponibles</option>";
                                                    }
                                                    ?>
                                                </select>
                                                  </div>
           

<label class="col-form-label">Tipo de evento y su PNF:</label>                                                 
<div class="row-two-fields">                      
     <div class="form-group">                               
                                                <select class="select" id="input-select" name="tipo" required>
                                                    <option>Firma del libro</option>
                                                    <option>Acta de grado</option>
                                                    <option>Imposision de medalla</option>
                                                    <option>Otro</option>
                                                </select>
                                                 </div>
                                        

<div class="form-group"> 
                                                    <select id="pnf"required name="pnf" class="select">
                                                    <option value="administracion">Administración</option>
                                                    <option value="agroalimentaria">Agroalimentaria</option>
                                                    <option value="construccion_civil">Construcción Civil</option>
                                                    <option value="electricidad">Electricidad</option>
                                                    <option value="electronica">Electrónica</option>
                                                    <option value="enfermeria">Enfermería</option>
                                                    <option value="informatica">Informática</option>
                                                    <option value="economia">Economía</option>
                                                    <option value="mecanica">Mecánica</option>
                                                    <option value="turismo">Turismo</option>
                                                    </select>
                                                    <br>
                                                    <br>
                                                    </div>
                                                    </div>



  <label class="col-form-label">Rango de fecha y hora del evento:</label>

<div class="row-two-fields">

     <div class="form-group">

<input required name="fechai"type="date" min="<?= date("Y-m-d");?>"> 
</div>
Hasta
 <div  class="form-group">
<input required name="fechac" type="date"  min="<?= date("Y-m-d");?>">
</div>

</div>

<div class="row-two-fields">
<div class="form-group">  
<input required id="inputText3" name="horai"type="time" class="form-control" >
</div>   
Hasta 
<div class="form-group">  
<input required id="inputText3" name="horac" type="time" class="form-control">
</div>   
</div>   

<br>
<br>

<label class="col-form-label">Limites para el evento:</label>
<div class="row-two-fields">


<div class="form-group">  
<div class="rueda">
<input required id="inputText3" placeholder="Numero Cupos Disponibles" name="cupos" type="number" class="contenedor" min="1" maxlength="4" pattern="[a-z A-Z]+">
</div> 
</div>    

<div class="form-group">  
<div class="ruedados">
<input required id="inputText3" placeholder="Numero de Limite de familiar por estudiante" name="familia" type="number" class="form-control" min="1" maxlength="4" pattern="[a-z A-Z]+">
</div>   
</div>   
</div>   
  <!--        ---------           -->
                                   

                                        
                                        
      
      <?php
  }
  ?>
                                 

                                  

                                
                                    <div class="form-group">


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
                                     
                                        <input id="inputText3" name="user" style=" display: none;"  type="text" class="form-control" maxlength= "4"  value="<?php echo $row ['username'] ; ?>">
                                    </div>

                                    <?php




                                   

                                    if ($privilegio == 0) {
                                        // Si el privilegio es 0, agregar el filtro por ide
                                        $sql = "SELECT id, nombre, apellido, pnf FROM profesores WHERE ide = $ide AND disp = 0 ";
                                    $result = $conexion->query($sql);

                                    } elseif ($privilegio == 1) {

                                       $sql = "SELECT id, nombre, apellido, pnf FROM profesores WHERE ide = $id AND disp = 0 ";
                                    $result = $conexion->query($sql);
                                    }                                                
                                    ?>
                                    <label for="inputText3" class="col-form-label">Personal</label> <br>

                                       <?php
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {                           
                                            echo "<label><input type='checkbox' name='prof[]' value='" . $row['nombre'] . " " . $row['apellido'] . " (" . $row['pnf'] . ")" .  " '> " . $row['nombre'] . " " . $row['apellido'] . " (" . $row['pnf'] . ")" .  "</label><br>";                                        
                                        }  
                                    } else {
                                        echo "No se encontraron nombres en la base de datos.";
                                    }

                                    ?>
                                    <br>


                    
          <br>
          <br>
               <label class="col-form-label">Subir foto del evento:</label>
          <div style="text-align: center;">
       
                                    <label for="archivo" class="col-form-label"></label>
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

                                   
                                  

                                    <button href="SuperAñadir_Personalstudent.php" class="btn btn-primary "><i class="zmdi zmdi-floppy"></i> Guardar</button>
                                    
                                   
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