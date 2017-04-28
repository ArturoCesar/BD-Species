<?php
	$conexion = mysqli_connect("localhost", "root", "", "troyanos");
	if (mysqli_connect_errno($conexion)) {
		echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
	}
	else{
		echo "Funciona la base de datos<br/>";
		echo $_POST["cuenta"]."<br/>";
		echo $_POST["contra"]."<br/>";
		$cuenta=$_POST["cuenta"];
		$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario_id='".$cuenta."';");
		$store= mysqli_store_result($conexion);
		$campos= mysqli_field_count($conexion);
		if ($campos==0){
			echo "El usuario no existe";
		}
		else{
		//$resultado = mysqli_query($conexion, "SELECT usuario_nombre FROM usuarios;");
		$fila = mysqli_fetch_assoc($resultado);
		echo $fila["usuario_nombre"];
		//echo "Hubo un error: " . mysqli_error ( $mysqli );
		}
	}
?>