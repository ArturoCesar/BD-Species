<?php
	/*PHP para verificar si el usuario existe, si su contraseña es valida y para mostrarle la página segun sea sus permisos
	
	Primero verifica si se envio algo para poder trabajar, en caso que no muestra un mensaje en pantalla 	
	*/
	if (isset($_POST["cuentanueva"]) && isset($_POST["nombrenueva"]) && isset($_POST["contranueva"])){
		//Conexión a la base de datos
		$conexion = mysqli_connect("localhost", "root", "", "troyanos");
		if (mysqli_connect_errno($conexion)) {
			echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
		}
		// En caso que la conexion sea exitosa, se mete al programa
		else{
			$cuenta = mysqli_real_escape_string ($conexion, $_POST["cuentanueva"]);
			$nombre = mysqli_real_escape_string ($conexion, $_POST["nombrenueva"]);
			$contra = mysqli_real_escape_string ($conexion, $_POST["contranueva"]);
			$resultado = mysqli_query($conexion, "INSERT INTO usuarios VALUES('".$cuenta."','".$nombre."',1,'".$contra."');");
			echo "
			<!DOCTYPE html>
			<html>
				<head>
					<!--Etiquetas del tipo de alfabeto-->
					<meta charset='utf-8'/>
					<meta http-equiv='X-UA-Compatible' content='IE=edge'/>
					<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
					<!--Links de materialize y el css/less-->
					<link href='http://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'/>
					<link href='../Documents/css/materialize.css' type='text/css' rel='stylesheet' media='screen,projection'/>
					<link href='../Documents/css/main.css' type='text/css' rel='stylesheet' media='screen,projection'/>
					<!--Etiquetas referetes al encabezado de la página-->
					<title>Los Troyanos</title>
					<link rel='shortcut icon' href='../Sources/Troyanos casco.png' type='image/png'/>
				</head>
				<body class='white'>
					<!--Barra de Navegación-->
					<nav class='blue' role='navigation'>
						<div class='nav-wrapper container'>
							<a href='https://www.speciesplus.net/' class='brand-logo center'>Animales</a>
						</div>
					</nav>
					<!--Cuerpo de la página-->
					<div class='container center-align'>
						<!--Introduccion-->
						<br/>
						<div class='row'>
							<div class='col l12'>
								<h5>Registrado con exito<br/>
								<a href='../Templates/main.html'>Volver<a/></h5>
								<img src='../Sources/Poeminimos.jpg' width='700' height='500'/>
							</div>
						</div>
					</div>
					<br/>
					<!--Pie de página-->
					<footer class='blue page-footer'>
						<div class='container'>
							<div class='row'>
								<div class='col s12 l6'>
									<h5 class='white-text'>¿Te interesa saber más?</h5>
									<ul>
										<li><a class='grey-text text-lighten-3' href='#!'>Link 1</a></li>
										<li><a class='grey-text text-lighten-3' href='#!'>Link 2</a></li>
										<li><a class='grey-text text-lighten-3' href='!'>Link 3</a></li>
										<li><a class='grey-text text-lighten-3' href='!'>Link 4</a></li>
									</ul>
									<!--Boton de créditos-->;
									<a class='waves-effect waves-light btn' onclick=$('.tap-target') .tapTarget('open')>Créditos</a>
								</div>
								<!--Créditos-->
								<div class='col s12 l6'>
									<p>
										<h5 class='white-text'>Material usado en esta página</h5>
										<ul>
											<li><a class='white-text' href='http://materializecss.com'>Materialize</a></li>
											<li><a class='white-text' href='https://jquery.com/'>JQuery</a></li>
											<li><a class='white-text' href='https://www.mysql.com/'>MYSQL</a></li>
											<li><a class='white-text' href='https://www.apachefriends.org/es/index.html'>Xampp</a></li>
											<li><a class='white-text' href='https://github.com/'>Github</a></li>
										</ul>
									</p>
									<div class='fixed-action-btn' style='bottom: 45px; right: 24px;'>
										<a id='menu' class='btn btn-floating btn-large cyan'><i class='material-icons'>menu</i></a>
									</div>
									<div class='tap-target-wrapper open' style='right: -248px; bottom: -227px; position: fixed;'>
										<div class='tap-target cyan' data-activates='menu'>
											<div class='tap-target-content white-text' style='width: 356px; height: 300px; top: 0px; right: 0px; bottom: 0px; left: 0px; padding: 56px; vertical-align: bottom;'>
												<h5>Hecho por estudiantes de Prepa 6 de la ETEC</h5>
												<p class='white-text'>
												<ul>
													<li>Martínez Martos Arturo Cesar</li>
													<li>Beltrán Villanueva Ibzán</li>
													<li>Marquez Valdez Luis</li>
												</ul>
												</p>
											</div>
										</div>
										<div class='tap-target-wave' style='top: 244px; left: 244px; width: 112px; height: 112px;'>
											<a class='btn btn-floating btn-large cyan tap-target-origin'><i class='material-icons'>menu</i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class='footer-copyright'>
							<div class='container'>
								© 2017 Copyright Text
								<a class='grey-text text-lighten-4 right' href='https://www.speciesplus.net/'>Visita Species+</a>
							</div>
						</div>
					</footer>
					<!--Fin del maquetado-->
					<!--Scrips que se necesitaran-->
					<script type='text/javascript' src='../Documents/js/jquery-2.2.3.js'></script>
					<script type='text/javascript' src='../Documents/js/materialize.js'></script>
					<script type='text/javascript' src='../Documents/js/main.js'></script>
				</body>
			</html>";
		}
		mysqli_close($conexion);
	}
	else{
		echo "No estoy entrando :´v";
	}
?>