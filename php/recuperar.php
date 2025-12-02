<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">

    <title>Recuperacion de cuenta</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('../assets/images/bg.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
          <a href="../index.html"> <img src="../assets/logo/lo3.png" alt="online degrees" style= "display: block; margin: 0 auto;" height="200"></a>
            <div class="mb-4">
              <h3>Recuperacion de cuenta</h3>
              <p class="mb-4">Por favor, su correo</p>
            </div>
            <?php if (isset($_GET['status']) && $_GET['status'] == 'usuarioerror'): ?>
        <div class="alert alert-danger" role="alert">
            Correo no encontrado.
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'corro'): ?>
        <div class="alert alert-danger" role="alert">
            Hubo un error en los servicios de correo. Porfavor intente mas tarde.
        </div>
    <?php endif; ?>
    <?php if (isset($_GET['status']) && $_GET['status'] == 'exp'): ?>
        <div class="alert alert-danger" role="alert">
           El codigo ha expirado.
        </div>
    <?php endif; ?>
            <label>Usuario</label>
            <form class="login" action="p12.php" method="POST"> 
              <div class="form-group">
      
              <input type="email" class="form-control" name="correo" id="correo" placeholder="Email" maxlength= "30" minlength="5"required>

              </div>
            
              
              
              <div class="d-flex mb-5 align-items-center">
                
          
               
              </div>

              <input type="submit" value="Enviar Email" name="login" class="btn btn-block btn-primary">

             
              
              <div class="social-login">
                
               
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>