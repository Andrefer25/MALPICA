<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Libros</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
	<link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg" style="background-color: black">
		<?php include("inc/nav.php"); ?>
	</nav>
	<section class="container">
		<div class="libros">
			<h2>Libros</h2>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<a href="img/libros/01.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/01.jpg" alt="">
					</div>
				</a>
				<a href="img/libros/05.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/05.jpg" alt="">
					</div>
				</a>	
				<a href="img/libros/09.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/09.jpg" alt="">
					</div>
				</a>	
				<a href="img/libros/13.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/13.jpg" alt="">	
					</div>
				</a>	
			</div>
			<div class="col-sm-2">
				<a href="img/libros/02.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/02.jpg" alt="">
					</div>	
				</a>
				<a href="img/libros/06.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/06.jpg" alt="">
					</div>
				</a>	
				<a href="img/libros/10.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/10.jpg" alt="">
					</div>
				</a>	
				<a href="img/libros/14.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/14.jpg" alt="">
					</div>
				</a>	
			</div>
			<div class="col-sm-2">
				<a href="img/libros/03.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/03.jpg" alt="">
					</div>
				</a>
				<a href="img/libros/07.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/07.jpg" alt="">
					</div>
				</a>
				<a href="img/libros/11.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/11.jpg" alt="">
					</div>
				</a>
				<a href="img/libros/15.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/15.jpg" alt="">
					</div>
				</a>
			</div>
			<div class="col-sm-2">
				<a href="img/libros/04.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/04.jpg" alt="">
					</div>	
				</a>	
				<a href="img/libros/08.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/08.jpg" alt="">
					</div>
				</a>
				<a href="img/libros/12.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/12.jpg" alt="">
					</div>
				</a>	
				<a href="img/libros/16.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/16.jpg" alt="">
					</div>
				</a>
			</div>
			<div class="col-sm-2">
				<a href="img/libros/17.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/17.jpg" alt="">
					</div>	
				</a>	
				<a href="img/libros/18.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/18.jpg" alt="">
					</div>
				</a>
				<a href="img/libros/19.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/19.jpg" alt="">
					</div>
				</a>	
				<a href="img/libros/20.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/20.jpg" alt="">
					</div>
				</a>
			</div>
			<div class="col-sm-2">
				<a href="img/libros/21.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/21.jpg" alt="">	
					</div>
				</a>	
				<a href="img/libros/22.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/22.jpg" alt="">
					</div>
				</a>
				<a href="img/libros/23.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/23.jpg" alt="">
					</div>
				</a>	
				<a href="img/libros/24.jpg" id="imagen">
					<div class="libro">
						<img src="img/libros/24.jpg" alt="">
					</div>
				</a>
			</div>
		</div>
	</section>
	<footer>
		<?php include("inc/footer.php"); ?>
	</footer>
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