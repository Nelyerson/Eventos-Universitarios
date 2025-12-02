<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Configuracion</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

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
                        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div class="alert alert-primary" role="alert">
            Se han guardado los cambios con exito.
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'email'): ?>
        <div class="alert alert-danger" role="alert">
            El correo ya esta en uso, Porfavor introduzca otro correo.
        </div>
    <?php endif; ?>
    
                            <h2 class="pageheader-title">Configuracion</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="homess.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Editar Perfil</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
<!-- content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- profile -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                            <!-- ============================================================== -->
  
                            <!-- ============================================================== -->
                            <!-- card profile -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar text-center d-block">
                                        <img src="<?php echo $row['foto']; ?>" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                    </div>
                                    <div class="text-center">
                                        <h2 class="font-24 mb-0"><?php echo $row['institucion']; ?></h2>
                                        <p>Institucion</p>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16">Contacto</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><?php echo $row['email']; ?></li>
                                        <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i><?php echo $row['phone']; ?></li>
                                    </ul>
                                    </div>
                                </div>
                                
                            <!-- ============================================================== -->
                            <!-- end card profile -->
                            <!-- ============================================================== -->
                        </div>

                        

              
            </div>
            <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- campaign tab one -->
                            <!-- ============================================================== -->
                            <div class="influence-profile-content pills-regular">
                                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link " id="pills-campaign-tab" aria-selected="true">Mis datos</a>
                                    </li>
                                   
                                </ul>
            <div class="section-block">
                                         
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="media influencer-profile-data d-flex align-items-center p-2">
                                                            
                                                            <div class="media-body ">
                                                                <div class="influencer-profile-data">
                                                                <form action="Configuracion1.php" method="POST" enctype="multipart/form-data">
                                                               
                                    <div class="flex-grow-1 me-2">
                                        <label for="inputText3" class="col-form-label">Nombre de la institucion</label> 
                                        <input id="inputText3" name="nombre" type="text" class="form-control" maxlength= "40" minlength="5"  pattern= "[a-z A-Z]+" value="<?php echo $row ['institucion'];?>" >
                                    </div>
                                    <div class="flex-grow-1 me-2">
                                        <label for="inputText3" class="col-form-label">Correo Electronico</label>
                                        <input id="inputText3 " name="correo" type="email" class="form-control" value="<?php echo $row ['email'];?>" maxlength= "70" minlength="5"  >
                                    </div>
                                   


                                    <input id="inputText3"  style=" display:none" value="<?php echo  $row['id'];?>" name="id" type="text" class="form-control" >

                                    <div class="flex-grow-1 me-2">
                                        <label for="inputText3" class="col-form-label">Numero de telefono</label>
                                        <input id="inputText3" name="telefono" type="text" class="form-control" pattern= "[0-9]+" minlength="5" maxlength= "11"value="<?php echo $row ['phone'];?>" >
                                    </div>

                                         <div class="flex-grow-1 me-2">
                                        <label for="inputText3" class="col-form-label">Datos de Pago</label>
                                        <input id="inputText3" name="banco" type="text" class="form-control" value="<?php echo $row ['banco'];?>" >
                                    </div>

                                    <div class="flex-grow-1 me-2">
                                        <label for="inputText3" class="col-form-label">Monto de Membresia</label>
                                        <input id="inputText3" name="membresia" type="text" class="form-control" value="<?php echo $row ['membresia'];?>" >
                                    </div>

                                    <input id="inputText3" name="user" style=" display: none;"  type="text" class="form-control" maxlength= "4"  value="<?php echo $row ['username'] ; ?>">

</div>
<input id="inputText3 " name="viejo" style="display :none" type="email" class="form-control" value="<?php echo $row ['email'];?>" maxlength= "70" minlength="5"  >                                 
                     
                                                                    
                                    <label for="archivo" class="col-form-label">Cambiar foto de perfil</label>
                                     <div style="text-align: center;">
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