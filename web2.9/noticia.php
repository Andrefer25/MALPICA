<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Noticias</title>
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
		<?php include("inc/nav.php") ?>
	</nav>
	<section class="cuerpo">
		<div class="container">
			<div class="news">
				<?php
					$id=$_GET['id'];
					$resultado=mysqli_query($conexion,"SELECT * FROM noticias WHERE idnoticia=$id");
					$fila=mysqli_fetch_array($resultado);
					$fecha = date("d/m/Y", strtotime($fila['fecha'])); ?>
				<h1><?php echo $fila['titulo']; ?></h1>
				<ul>
					<li><h2><?php echo $fila['subtitulo']; ?></h2></li>
				</ul>
				<?php echo '<img src ="web3.0/'.$fila["imgl"].'">'; ?>
				<h3><?php echo 'POR <a href="#">'.$fila['autor'].'</a> - PUBLICADO EL '.$fecha; ?></h3>
				<p><?php echo $fila['texto']; ?></p>
			</div>
			<div class="comentarios">
				<h4>Comentarios</h4>
				<div class="cajacomentarios">
					<?php if (isset($_SESSION['idusuario']) == true){ ?>
					<div class="nuevocomentario">
						<form action="php/subircomentario.php" method="POST" accept-charset="utf-8" id="sesion">
							<div class="form-group">
								<label for="exampleFormControlTextarea1"><?php
								echo nombre_usuario($_SESSION['idusuario']); ?>, escribe un comentario:</label>
								<textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3" required></textarea>
							</div>
							<div class="form-group d-none">
				                <?php echo '<input type="text" readonly class="form-control-plaintext" value="'.$id.'" name="idnoti">'?>
				            </div>
				            <div class="form-group d-none">
				                <?php echo '<input type="text" readonly class="form-control-plaintext" value="'.nombre_usuario($_SESSION['idusuario']).'" name="usuario">'?>
				            </div>
							<button type="submit" class="btn" style="background-color: black; color: white; margin-bottom: 0.8em;">Enviar</button>
						</form>
					</div>
					<?php } 
					$coment=mysqli_query($conexion, "SELECT * FROM comentarios WHERE idnoticia='$id' ORDER BY idcomentario DESC");
					$com=mysqli_query($conexion, "SELECT * FROM comentarios WHERE idnoticia='$id' ORDER BY idcomentario DESC LIMIT 1");
					$comenta=mysqli_fetch_array($com);
					if (isset($comenta['idnoticia'])==false) { ?>
						<div class="comentario">
							<span>Nadie ha hecho un comentario. Sé el primero en comentar</span>
						</div>
					<?php }
						while ($comentarios=mysqli_fetch_array($coment)) { ?>
							<div class="comentario">
								<span><?php echo $comentarios['usuario'].": "; ?></span> <?php echo $comentarios['comentario']; ?>
							</div>
						<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<?php include("inc/footer.php") ?>
	</footer>
	<script src="js/validacion/messages_es_AR.js" type="text/javascript"></script>
	<script src="js/contacto.js" type="text/javascript"></script>
</body>
</html>