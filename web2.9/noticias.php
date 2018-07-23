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
			<div class="row lista">
				<div class="col-sm-8">
					<?php 
					include('php/conexion.php');
					$resultado=mysqli_query($conexion,"SELECT * FROM noticias ORDER BY idnoticia DESC LIMIT 8");
					while($fila=mysqli_fetch_array($resultado)){
						echo '<a href="noticia.php?id='.$fila['idnoticia'].'" class="noticia">';
						echo '<img src = "web3.0/'.$fila["imgm"].'">'; ?>
						<div class="info">
							<h2><?php echo $fila['titulo']; ?></h2>
							<p class="d-none d-sm-none d-md-block">
								<?php echo $fila['subtitulo']; ?>
							</p>
						</div>		
					<?php echo "</a>" ?>
					<?php } ?>
				</div>
				<div class="col-sm-4">
					<table class="tablaanuncios">
						<?php
						$columna=mysqli_query($conexion,"SELECT * FROM noticias ORDER BY idnoticia DESC LIMIT 8,7");
						while ($anuncio=mysqli_fetch_array($columna)) { ?>
						<tr>
							<td>
								<?php echo '<a href="noticia.php?id='.$anuncio['idnoticia'].'">';
									echo '<img src = "web3.0/'.$anuncio["imgm"].'">'; ?>
									<h5><?php echo $anuncio['titulo']; ?></h5>
								</a>
							</td>
						</tr>
						<?php } ?>	
					</table>
				</div>
			</div>
			
		</div>
	</section>
	<footer>
		<?php include("inc/footer.php") ?>
	</footer>
	<script src="js/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>