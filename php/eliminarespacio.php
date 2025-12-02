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

<div class="modal fade" id="eliminar<?php echo $row2 ['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">¿Estas seguro de eliminar el espacio <?php echo $row2['lugar'];?>?"</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="EliminEspacio.php" method="POST">

      <input id="inputText3" style=" display:none"name="lugar" type="text" value="<?php echo $row2 ['lugar'];?>" class="form-control" maxlength= "40" minlength="5" pattern= "[a-z A-Z]+">
      <input id="inputText3"  style=" display:none" value="<?php echo $row2 ['id'];?>" name="id" type="text" class="form-control" >
      <input id="inputText3"  style=" display:none" value="<?php echo $row ['username'];?>" name="user" type="text" class="form-control" >

       
      </div>
     
      <div class="modal-footer">
      <button href="SuperAñadir_Personalstudent.php" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> Eliminar</button>
      <button data-dismiss="modal" class="btn btn-secondary"><i class="zmdi zmdi-floppy"></i> Cancelar</button>
      
      </div>

      </form>                    
                                   

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