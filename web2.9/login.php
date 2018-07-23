<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg" style="background-color: black">
		<?php include("inc/nav.php"); ?>
	</nav>
	<section class="cuerpo">
		<div class="container">
			<div class="row formulario">
				<div class="col-sm-6">
					<h1>Registrate</h1>
					<form action="php/registro.php" method="POST" accept-charset="utf-8" id="sesion">
						<div class="form-group">
							<div class="row">
							    <div class="col">
							    	<label for="nombre">Nombre</label>
							    	<input type="text" class="form-control" name="nombre" placeholder="Nombre" id="nombre" required>
							    </div>
							    <div class="col">
							    	<label for="apellido">Apellido</label>
							    	<input type="text" class="form-control" name="apellido" placeholder="Apellido" id="apellido" required>
							    </div>
							</div>
						</div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Correo electrónico</label>
					    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Dirección de email" required>
					    <small id="emailHelp" class="form-text text-muted">No compartiremos este mail con nadie.</small>
					  </div>
					  <div class="form-group">
					    <label for="usuario">Nombre de Usuario</label>
					    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Contraseña</label>
					    <input type="password" class="form-control" name="clave" id="exampleInputPassword1" placeholder="Contraseña" required>
					  </div>
					  <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remote" required>
					    <label class="form-check-label" for="exampleCheck1">Acepto las <a href="#">bases y condiciones</a></label>
					  </div>
					  <button type="submit" class="btn" style="background-color: black; color: white;">Submit</button>
					</form>
				</div>
				<div class="col-sm-6">
					<h1>¿Ya estás registrado?</h1>
					<form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input"id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                        </div>
                        <button type="submit" class="btn" style="background-color: black; color: white;">Ingresar</button>
                    </form>
				</div>
			</div>
		</div>
		
	</section>
	<footer style="position: fixed; bottom: 0;">
		<?php include("inc/footer.php") ?>
	</footer>
	<script src="js/validacion/messages_es_AR.js" type="text/javascript"></script>
	<script src="js/contacto.js" type="text/javascript"></script>
</body>
</html>

