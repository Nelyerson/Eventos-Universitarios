<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><H1>Iniciar Sesion</H1><span class="splash-description">Porfavor ingrese su numero de cedula.</span></div>
            <div class="card-body">  <br> <br>
                 <form class="login" action="login2.php" method="POST"> 
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username"  name="cedula" type="text" placeholder="Cedula" autocomplete="off" pattern= "[0-9]+" Required>
                    </div>
                  
                   
                    <button class="btn btn-primary btn-lg btn-block"name="login" value="Iniciar sesion " type="submit">
					<span class="button__text">Iniciar Sesion</span>
                </form>
            </div>
            <br> <br>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="registrar.php" class="footer-link">Crear una cuenta</a></div>
               
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>