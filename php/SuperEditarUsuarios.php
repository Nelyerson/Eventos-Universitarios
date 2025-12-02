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

<div class="modal fade" id="editar<?php echo $row ['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                                <form action="SupereditarUsuario.php" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Nombre</label>
                                        <input id="inputText3" value="<?php echo $row ['username'];?>"name="Nombre" type="text" class="form-control" maxlength= "20" minlength="5" required="" pattern= "[a-z A-Z]+">
                                    </div>
                                    <input id="inputText3"  style=" display:none" value="<?php echo $row ['id'];?>" name="id" type="text" class="form-control" >

                                    
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Correo Electronico</label>
                                        <input id="inputText3" value="<?php echo $row ['email'];?>" name="email" type="text" class="form-control" maxlength= "70" minlength="5">
                                    </div>

                                    <div class="form-group">
                                                <label for="input-select">Nivel de usuario</label>
                                                <select class="form-control" id="input-select" name="Nivel" required>
                                                    <option>Usuario</option>
                                                    <option>Super Usuario</option>
                                                </select>
                                            </div>
                                    
                                     <div class="form-group">
                                                <label for="input-select">Selecione para Suspender o activar</label>
                                                <select class="form-control" id="input-select" name="activo" required>
                                                    <option>Activar</option>
                                                    <option>Suspender</option>
                                                </select>
                                            </div>

                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Numero de Contacto</label>
                                        <input id="inputText3" value="<?php echo $row ['phone'];?> "name="Contacto" type="text" class="form-control" maxlength= "10">
                                    </div>
                                  

        

                                   
                                    <button href="SuperAñadir_Personalstudent.php" class="btn btn-primary btn-block"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                                    
                                   
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