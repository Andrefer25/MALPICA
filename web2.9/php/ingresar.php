<?php 
	include('conexion.php');

	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];

	$query= "SELECT idusuario FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";
	$resultado=mysqli_query($conexion, $query);

	if(mysqli_num_rows($resultado)>0){
		session_start();
		$fila=mysqli_fetch_array($resultado);

		$_SESSION['idusuario'] = $fila['idusuario'];

		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

	else {
		echo "Datos incorrectos. Probar nuevamente <a href=\"javascript:history.back()\">aqui</a>";
	}
?>