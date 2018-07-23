<?php 
	include('conexion.php');

	$idnot=$_POST['idnoti'];
	$usuario=$_POST['usuario'];
	$comentario=$_POST['comentario'];
	$fecha=date("Y-m-d");

	$resultado = mysqli_query($conexion, "INSERT INTO comentarios VALUES (NULL,'$idnot,'$usuario','$fecha','$comentario')");

	header('Location: '.$_SERVER['HTTP_REFERER']);
?>