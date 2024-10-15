<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SisCitas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> 
    <script type="script/text" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   <div class="cointainer mt-4 col-lg-4 mx-auto">
   		<div class="card col-sm-10 ">
   			<div class="card-body ">
   				<form method="POST">
   					<div class="form-group <text-cente></text-cente>r p-3">
   						<h2 >Login</h2>
   						<img src="img/Login.jpg" alt="70" width="170">
   						<label>Bienvenido al sistema</label>
   					</div>
            		<?php
            			include "controlador/controladorLogin.php"
            		 ?>
   					<div class="form-group">
   						<label>Usuario:</label>
   						<input type="text" name="txtUser" class="form-control">
   					</div>
   					<div class="form-group">
   						<label>Password:</label>
   						<input type="password" name="txtPassword" class="form-control">
   					</div>
					<div class="mx-auto d-flex" >
						<div class="col-4">
							<input type="submit" name="btnLogin" value="Ingresar" class=" mt-2 btn btn-primary btn-lg btn-block">
						</div>
						<div>
							<a href="">¿Perdiste tu contraseña?</a>
							<br>
							<a href="">¿No tienes cuenta? Registrate</a>
						</div>
					</div>
   				</form>
   			</div>
   		</div>
   </div>
</body>
</html>