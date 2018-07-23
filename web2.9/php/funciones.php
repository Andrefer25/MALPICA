<?php
	function nombre_usuario($idusuario) {
		global $conexion;
		$rs=mysqli_query($conexion, "SELECT usuario FROM usuarios WHERE idusuario='$idusuario'");

		$fila=mysqli_fetch_array($rs);
		return $fila['usuario'];
	}
	function revisa_login() {
		if (isset($_SESSION['idusuario']) == false){
			header("location:../index.php");
		}
	}
?>