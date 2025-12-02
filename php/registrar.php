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
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
 
    <form class="splash-container" action="registro5.php" method="POST" enctype="multipart/form-data"> 
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Crea una cuenta nueva</h3>
                <p>Porfavor ingrese toda su informacion.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Nombre de usuario" autocomplete="off" maxlength= "15" minlength="3"  pattern= "[a-z A-Z]+">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off" maxlength= "30" minlength="10"  >
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" name="password" required="" placeholder="Contraseña" maxlength= "30" minlength="8">
                </div>

                <div class="form-group">
                    <input class="form-control form-control-lg" id="phone" type="text" name="phone" required="" placeholder="Telefono" maxlength= "15" minlength="7" pattern= "[0-9]+">
                </div>
               

                <button class="btn btn-block btn-primary" name="registro" value="Iniciar sesion " type="submit">
					<span class="button__text">Crear cuenta</span>
					
					
				</button>		
              
                <div class="form-group row pt-0">
                   
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>ya tiene una cuenta? <a href="iniciar.php" class="text-secondary">Ingresa aqui.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>