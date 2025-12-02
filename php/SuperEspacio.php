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
include 'Superbarra.php';
?>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">

            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Agregar Espacio</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="Superhomess.php" class="breadcrumb-link">Inicio</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Agregar Espacio</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Crear Nuevo Espacio</h5>
                            <div class="card-body">
                                <form action="Superespacioo.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Capacidad</label>
                                        <input id="inputText3" name="Capacidad" type="text" class="form-control" maxlength= "40" minlength="5" required="" placeholder="¿Cuántas personas pueden caber cómodamente en el espacio?" pattern= "[a-z A-Z]+">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Dimensiones</label>
                                        <input id="inputText3" name="Dimensiones" type="text" class="form-control" maxlength= "20" minlength="5" required="" placeholder=" ¿Cuáles son las medidas exactas del salón o aula?" pattern= "[a-z A-Z]+">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Equipo audiovisual</label>
                                        <input id="inputText3" name="audiovisual" type="text" class="form-control" maxlength= "70" minlength="5" placeholder="¿Qué tipo de equipo audiovisual está disponible (proyector, pantalla, sonido, etc.)? ¿Cuál es su estado de funcionamiento?">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Conexión a internet</label>
                                        <input id="inputText3" name="internet" type="text" class="form-control" maxlength= "70" minlength="5" placeholder="¿Hay conexión a internet disponible? ¿Cuál es la velocidad?">
                                    </div>


                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Iluminación</label>
                                        <input id="inputText3" name="Iluminación" type="text" class="form-control" maxlength= "70" minlength="5"placeholder="¿Se puede controlar la iluminación? ¿Hay luz natural?">
                                    </div>


                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Ventilación</label>
                                        <input id="inputText3" name="Ventilación" type="text" class="form-control" maxlength= "70" minlength="5" placeholder="¿Cómo funciona la ventilación? ¿Hay aire acondicionado?">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Accesibilidad</label>
                                        <input id="inputText3" name="Accesibilidad" type="text" class="form-control" maxlength= "70" minlength="5" placeholder="¿El espacio es accesible para personas con discapacidad? ¿Hay rampas, elevadores o baños adaptados?">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Disponibilidad</label>
                                        <input id="inputText3" name="Disponibilidad" type="text" class="form-control" maxlength= "70" minlength="5" placeholder="¿Cuáles son los horarios de disponibilidad del espacio? ¿Existen restricciones de uso?">
                                    </div>


                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Punto referencia</label>
                                        <input id="inputText3" name="referencia" type="text" class="form-control" maxlength= "70" minlength="5" placeholder="Ejmplo: Frente al Cafetin">
                                    </div>

                                




                                    <div class="form-group">
                                                <label for="input-select">Numero de edificio o lugar</label>
                                                <select class="form-control" id="input-select" name="lugar" required placeholder="">
                                                    <option>Edificio A</option>
                                                    <option>Edificio B</option>
                                                    <option>Edificio C</option>
                                                    <option>Comerdor</option>
                                                    <option>Cancha</option>
                                                    <option>estamiento</option>
                                                    <option>Cafetin</option>

                                                </select>
                                            </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Numeros de Contacto</label>
                                        <input id="inputText3" name="Contacto" type="number" class="form-control" maxlength= "10">
                                    </div>
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

                                   
                                    <button href="SuperAñadir_Personalstudent.php" class="btn btn-primary btn-block"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                                    
                                   
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