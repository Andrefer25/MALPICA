<?php 
	require("conexion.php");
	$titulo = $_POST['titulo'];
	$subtitulo = $_POST['subtitulo'];
	$id = $_POST['idnot'];
	$autor = $_POST['autor'];
	$fecha = date('Y-m-d');
	$imgl = $_FILES['imgl']['name'];
	$imgm = $_FILES['imgm']['name'];
	$ruta1 = $_FILES['imgl']['tmp_name'];
	$ruta2 = $_FILES['imgm']['tmp_name'];
	$nombre_archivo = $id.".jpg";
	$destino1 = "../img/carrusel/".$nombre_archivo;
	$destino2 = "../img/mobile/".$nombre_archivo;
	copy($ruta1,$destino1);
	copy($ruta2,$destino2);
	$texto = $_POST['comentario'];
	$res = mysqli_query($conexion,"INSERT INTO noticias VALUES (NULL,'$titulo','$subtitulo','$autor','$fecha','$destino1','$destino2','$texto')");
	header("location: ../admin/subirnoticia.php");
 ?>