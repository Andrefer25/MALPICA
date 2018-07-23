<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inicio</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
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
		<?php 
			include("php/conexion.php");
			$notprincipal=mysqli_query($conexion,"SELECT * FROM noticias ORDER BY idnoticia DESC LIMIT 1");
			$notsecus=mysqli_query($conexion,"SELECT * FROM noticias ORDER BY idnoticia DESC LIMIT 1,2");
			$not01=mysqli_fetch_array($notprincipal);
 		?>
		<div class="container">
			<div id="carouselExampleIndicators" class="carousel slide d-none d-sm-none d-md-block" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				    	<?php echo '<a href="noticia.php?id='.$not01['idnoticia'].'">'; ?>
				    		<?php echo '<img class="d-block w-100" alt="First slide" src="web3.0/'.$not01["imgl"].'">'; ?>
				      		<div class="carousel-caption d-md-block">
					    		<h5><?php echo $not01['titulo']; ?></h5>
					  		</div>
				    	</a>
				    </div>
				    <?php while ($not02=mysqli_fetch_array($notsecus)) { ?>
				    	<div class="carousel-item">
				    		<?php echo '<a href="noticia.php?id='.$not02['idnoticia'].'">'; ?>
						    	<?php echo '<img class="d-block w-100" alt="First slide" src="web3.0/'.$not02["imgl"].'">'; ?>
						    	<div class="carousel-caption d-md-block">
						    		<h5><?php echo $not02['titulo']; ?></h5>
						    	</div>
						    </a>
				    	</div>
				    <?php } ?>
				  </div>
			</div>
		</div>
		<div id="carouselExampleControls" class="carousel slide d-block d-sm-block d-md-none" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	<?php echo '<a href="noticia.php?id='.$not01['idnoticia'].'">'; ?>
			    		<?php echo '<img class="d-block w-100" alt="First slide" src="web3.0/'.$not01["imgm"].'">'; ?>
			      		<div class="carousel-caption d-md-block">
				    		<h5><?php echo $not01['titulo']; ?></h5>
				  		</div>
			    	</a>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="img/home/mobile02.jpg" alt="Second slide">
			      <div class="carousel-caption d-md-block">
					    <h5>The Division 2 será presentado en la E3</h5>
				  </div>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="img/home/mobile03.jpg" alt="Third slide">
			      <div class="carousel-caption d-md-block">
					    <h5>Rainbow Six Siege podría tener pronto un nuevo sistema de loot boxes</h5>
				  </div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Últimas Noticias</h1>
					<?php 
					$resultado=mysqli_query($conexion,"SELECT * FROM noticias ORDER BY idnoticia DESC LIMIT 3,4");
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
					<div class="vermas">
						<a href="noticias.php" >Ver más noticias >></a>
					</div>
				</div>
				<div class="col-sm-4 d-none d-lg-block d-xl-block">
					<h1>Reseñas (Muy pronto)</h1>
					<a href="img/libros/01.jpg" id="imagen">
						<div class="novedades">
							<img src="img/libros/01.jpg" alt="">
						</div>
					</a>
					<a href="img/libros/05.jpg" id="imagen">
						<div class="novedades">
							<img src="img/libros/05.jpg" alt="">
						</div>
					</a>	
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
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/jquery.fancybox.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#imagen").fancybox({
		    	openEffect	: 'elastic',
		    	closeEffect	: 'elastic',

		    	helpers : {
		    		title : {
		    			type : 'inside'
		    		}
		    	}
		    });
		});
	</script>
</body>
</html>