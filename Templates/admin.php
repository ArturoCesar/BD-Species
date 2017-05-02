<?php
	SESSION_start();
	if (isset($_SESSION['id']) && isset($_SESSION["permiso"])){
		if ($_SESSION["permiso"]==0){
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
							<a href='' class='left'>¡Hola! ".$_SESSION['nombre']."</a>
							 <ul id='nav-mobile' class='right hide-on-med-and-down'>
								<li><a class='active' href='admin.php'>Registrar Especie</a></li>
								<li><a href='nuevo_usuario.php'>Registrar Usuario</a></li>
								<li><a href='modificar.php'>Modificar Datos</a></li>
							</ul>
						</div>
					</nav>
					<!--Cuerpo de la página-->
					<div class='container center-align'>
					<!--Introduccion-->
						<br/>
						<div class='row'>
							<div class='col l12'>
								<form method='POST' action='nueva_especie.php'>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='a' type='text' maxlength='5' name='id'/>
											<label for='a' data-error='Checa tus datos' data-success='¡Bien!'>Numero de identificación del animal</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='b' type='text' name='reino'/>
											<label for='b' data-error='Checa tus datos' data-success='¡Bien!'>Reino</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='c' type='text' name='filum'/>
											<label for='c' data-error='Checa tus datos' data-success='¡Bien!'>Filum</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>	
											<input id='d' type='text' name='clase'/>
											<label for='d' data-error='Checa tus datos' data-success='¡Bien!'>Clase</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='e' type='text' name='orden'/>
											<label for='e' data-error='Checa tus datos' data-success='¡Bien!'>Orden</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='f' type='text' name='familia'/>
											<label for='f' data-error='Checa tus datos' data-success='¡Bien!'>Familia</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='g' type='text' name='genero'/>
											<label for='g' data-error='Checa tus datos' data-success='¡Bien!'>Genero</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='h' type'text' name='especie'/>
											<label for='h' data-error='Checa tus datos' data-success='¡Bien!'>Especie</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='i' type='text' name='sub'/>
											<label for='i' data-error='Checa tus datos' data-success='¡Bien!'>*Subespecie</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='j' type='text' name='nomcien'/>
											<label for='j' data-error='Checa tus datos' data-success='¡Bien!'>Nombre científico</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>									
											<input id='k' type='text' name='autor'/>
											<label for='k' data-error='Checa tus datos' data-success='¡Bien!'>Autor</label>
										</div>
									</div>		
									<div class='row'>
										<div class='input-field col s12'>
											<input id='l' type='text' name='rango'/>
											<label for='l' data-error='Checa tus datos' data-success='¡Bien!'>Rango</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='m' type='text' name='party'/>
											<label for='m' data-error='Checa tus datos' data-success='¡Bien!'>Party</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='n' type='text' name='listed'/>
											<label for='n' data-error='Checa tus datos' data-success='¡Bien!'>Listed under</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>	
											<input id='o' type='text' name='fullnote'/>
											<label for='o' data-error='Checa tus datos' data-success='¡Bien!'>Full note</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='p' type='text' name='alldist'/>
											<label for='p' data-error='Checa tus datos' data-success='¡Bien!'>All distribution</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='q' type='text' name='native'/>
											<label for='q' data-error='Checa tus datos' data-success='¡Bien!'>*Native distribution</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='r' type='text' name='intro'/>
											<label for='r' data-error='Checa tus datos' data-success='¡Bien!'>*Introduced distribution</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='s' type='text' name='introu'/>
											<label for='s' data-error='Checa tus datos' data-success='¡Bien!'>*Introduced distribution uncertain</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='t' type='text' name='reintro'/>
											<label for='t' data-error='Checa tus datos' data-success='¡Bien!'>*Reintroduced distribution</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='u' type='text' name='extinct'/>
											<label for='u' data-error='Checa tus datos' data-success='¡Bien!'>*Extinct distribution</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='w' type='text' name='extinctu'/>
											<label for='w' data-error='Checa tus datos' data-success='¡Bien!'>*Extinct distribution uncertain</label>
										</div>
									</div>
									<div class='row'>
										<div class='input-field col s12'>
											<input id='x' type='text' name='distu'/>
											<label for='x' data-error='Checa tus datos' data-success='¡Bien!'>*Distribution uncertain</label>
										</div>
									</div>
									<input type='submit' class='waves-effect cyan waves-green btn-flat' value='Registrar'/>
								</form>
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
		else
			//header("Location: ../Templates/user.php");
			header("Location: https://www.youtube.com/watch?v=8ZcmTl_1ER8&t=18s");
	}
	else{
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
							<h5>Para tener acceso al sistema tienes que registrarte antes<br/>
							<a href='../Templates/main.html'>Volver<a/></h5>
							<img src='../Sources/MorirEse.png' width='600' height='500'/>
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
		SESSION_destroy();
	}
?>