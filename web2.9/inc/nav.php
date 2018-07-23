<?php 
	include('php/conexion.php');
	include('php/funciones.php');
	session_start();
?>
<div class="container">
	<a class="navbar-brand" href="index.php"><img src="img/inicio/logo.png" alt=""></a>
	<button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	        <li class="nav-item active">
		        <a class="nav-link" href="noticias.php">NOTICIAS</a>
		    </li>
	        <li class="nav-item">
		        <a class="nav-link" href="juegos.php">JUEGOS</a>
	        </li>
			<li class="nav-item">
			    <a class="nav-link" href="libros.php">LIBROS</a>
		    </li>
		</ul>
		<?php if (isset($_SESSION['idusuario']) == false){ ?>
			<div class="nav-item dropdown form-inline">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          INICIA SESIÓN
		        </a>
		        <div class="dropdown-menu">
				  <form class="px-4 py-3" action="php/ingresar.php" method="POST">
				    <div class="form-group">
				      <label for="exampleDropdownFormEmail1">Usuario</label>
				      <input type="text" name="usuario" class="form-control" id="exampleDropdownFormEmail1" placeholder="Nombre de Usuario">
				    </div>
				    <div class="form-group">
				      <label for="exampleDropdownFormPassword1">Contraseña</label>
				      <input type="password" name="clave" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña">
				    </div>
				    <p></p>
				    <button type="submit" class="btn" style="background-color: black; color: white;">Inicia Sesión</button>
				  </form>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="login.php" style="font-size: 1.2em;">¿Eres nuevo? Registrate</a>
				</div>
		    </div>
			<?php } else { ?>
	        <div class="nav-item dropdown form-inline">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <?php echo strtoupper(nombre_usuario($_SESSION['idusuario'])); ?>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
				    <button class="dropdown-item" type="button">Mi Perfil</button>
				    <?php 
				    	$id = $_SESSION['idusuario'];
						$query = "SELECT * FROM usuarios WHERE idusuario='$id'";
						$resultado=mysqli_query($conexion, $query);
						$usuario=mysqli_fetch_array($resultado);
				    	if(($usuario['admin'])=== '1'){
				    ?><button class="dropdown-item" type="button" onclick="window.location.href='admin/index.php'">Panel de Admin</button>
				    <?php
				    } ?>
				    <button class="dropdown-item" type="button" onclick="window.location.href='php/salir.php'">Cerrar Sesión</button>
				</div>
		    </div>
		<?php } ?>
	</div>
	
</div>