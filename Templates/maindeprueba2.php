<?php
	/*PHP para verificar si el usuario existe, si su contraseña es valida y para mostrarle la página segun sea sus permisos
	
	Primero verifica si se envio algo para poder trabajar, en caso que no muestra un mensaje en pantalla 	
	*/
	
		//Conexión a la base de datos
		$conexion = mysqli_connect("localhost", "root", "", "troyanos");
		if (mysqli_connect_errno($conexion)) {
			echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
		}
		// En caso que la conexion sea exitosa, se mete al programa
		else{
			echo "Funciona la base de datos<br/>";			
			$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario_nombre='ibzi';");
			$consulta= mysqli_fetch_assoc($resultado);
			while ($consulta){
				echo $consulta["usuario_id"];
			//	echo $consulta["usuario_nombre"];
			//	echo $consulta["usuario_permiso"];
				$consulta= mysqli_fetch_assoc($resultado);
				echo "<br/>";
			}
		}

?>