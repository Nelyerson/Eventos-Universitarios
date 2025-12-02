<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	

	<!-- Content page-->
	
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				
				<li>
						<a href="logout.php" class="">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"> Suspendido <small>Cuenta suspendida</small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
		<img src="assets/img/warning.png" alt="Descripción de la imagen" width="150" height="150">
		<h1 class="text-titles"> Cuenta suspendida </h1>

		<small class="text-titles">Hemos Desabilitado su cuenta por no recibir el pago a tiempo, si gusta puede enviar el reporte de un pago y verifique mas tarde si fue exitoso la restauracion de su cuenta</small>
	</div>
	<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
							
								

	
			<form action="foto2.php" method="POST" enctype="multipart/form-data">

			<div class="form-group label-floating">
			<label class="control-label"># de la Referencia</label>
			<input name="referencia" class="form-control" type="text" value="" required />
			</div>

			<div class="form-group">
				
				<input type="text" readonly="" name="" class="form-control" placeholder="Agregar Captura del pago">
				<input type="file" name="foto" required/><br><br>
				
				</div>
				<p class="text-center">
				<input type="submit" class="btn btn-info btn-raised btn-sm"  value="Aceptar">
				 </p>
				</div>



			

			<br><br>
		
		</form>
	
		</div>
	</div>
</div>


	</section>



	
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>