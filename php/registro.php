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

    <title>Login #6</title>
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
              <h3>Crear cuenta</h3>
              <p class="mb-4">Por favor, ingrese los datos para su nueva cuenta.</p>
            </div>
            <?php if (isset($_GET['status']) && $_GET['status'] == 'usuarioerror'): ?>
             <div class="alert alert-danger" role="alert">
            Porfavor eliga otro nombre de usuario.
               </div>
             <?php endif; ?>
             <?php if (isset($_GET['status']) && $_GET['status'] == 'usuarioerror2'): ?>
             <div class="alert alert-danger" role="alert">
            Correo electronico ya en uso.
               </div>
             <?php endif; ?>
             <?php if (isset($_GET['status']) && $_GET['status'] == 'usuarioerror3'): ?>
             <div class="alert alert-danger" role="alert">
            Numero de cedula ya en uso.
               </div>
             <?php endif; ?>
            <label>Usuario</label>
            <form class="login" action="registro5.php" method="POST"> 
              <div class="form-group">
              <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Nombre de usuario" autocomplete="off" maxlength= "15" minlength="3"  pattern= "[a-z A-Z]+">
              </div>
              <label>Correo</label>
              <div class="form-group last mb-3">
              <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off" maxlength= "30" minlength="10"  >
              </div>
            
              <label>Contraseña</label>
              <div class="form-group last mb-3">
              <input class="form-control form-control-lg" id="pass1" type="password" name="password" required="" placeholder="Contraseña" maxlength= "30" minlength="8">    
              </div>
              <label>Numero de telefono</label>
              <div class="form-group last mb-3">
              <input class="form-control form-control-lg" id="phone" type="text" name="phone" required="" placeholder="Telefono" maxlength= "15" minlength="7" pattern= "[0-9]+">    
              </div>
             
              

              <button class="btn btn-block btn-primary" name="registro" value="Iniciar sesion " type="submit">
					<span class="button__text">Crear cuenta</span>
					
					
				</button>		

            
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