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
		//$resultado = mysqli_query($conexion, "SELECT usuario_nombre FROM usuarios;");
		$consulta= mysqli_fetch_assoc($resultado);
		$usuario=$consulta["usuario_id"];
		if ($usuario==""){
				echo "el usuario no existe";
			}
		else {
				echo $consulta["usuario_nombre"];
		}
		//echo "Hubo un error: " . mysqli_error ( $mysqli );
	}
?>