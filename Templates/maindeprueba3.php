<?php
	/*PHP para verificar si el usuario existe, si su contraseña es valida y para mostrarle la página segun sea sus permisos
	
	Primero verifica si se envio algo para poder trabajar, en caso que no muestra un mensaje en pantalla 	
	*/
	if (isset($_POST["cuenta"]) && $_POST["contra"]){
		//Conexión a la base de datos
		$conexion = mysqli_connect("localhost", "root", "", "troyanos");
		if (mysqli_connect_errno($conexion)) {
			echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
		}
		// En caso que la conexion sea exitosa, se mete al programa
		else{
			echo "Funciona la base de datos<br/>";
			echo $_POST["cuenta"]."<br/>";
			echo $_POST["contra"]."<br/>";
			$cuenta=$_POST["cuenta"];
			$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario_id='".$cuenta."';");
			$consulta= mysqli_fetch_assoc($resultado);
			$usuario=$consulta["usuario_id"];
			//Comprobar si el usuario existe
			if ($usuario==""){
					echo "el usuario no existe";
				}
			//Si existe continua el programa
			else {
					echo $consulta["usuario_nombre"];
					$contraseña=$_POST["contra"];
					echo $consulta["usuario_contra"];
					if ($contraseña!=$consulta["usuario_contra"]){
						echo "<br/>Contraseña Incorrecta<br/>";
					}
					else {
						echo "<br/>Contraseña Correcta<br/>";
					}
			}
			//echo "Hubo un error: " . mysqli_error ( $mysqli );
		}
	}
	else {
		echo "No se pase de lanza chavo >:v<br/>";
	}
?>