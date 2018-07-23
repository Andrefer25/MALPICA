<?php 
	include('conexion.php');
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$clave = $_POST['clave'];
	$resultado = mysqli_query($conexion, "INSERT INTO usuarios VALUES(NULL, 0,'$nombre','$apellido','$email','$usuario','$clave')");
	header("location:../login.php");
?>