<?php
	echo "PHP EN PROCESO"."<br/><br/>";
	echo $_POST['id']."<br/>";
	echo $_POST['reino']."<br/>";
	echo $_POST['filum']."<br/>";
	echo $_POST['clase']."<br/>";
	echo $_POST['orden']."<br/>";
	echo $_POST['familia']."<br/>";
	echo $_POST['genero']."<br/>";
	echo $_POST['specie']."<br/>";
	echo $_POST['sub']."<br/>";
	echo $_POST['nomcien']."<br/>";
	echo $_POST['autor']."<br/>";
	echo $_POST['rango']."<br/>";
	echo $_POST['party']."<br/>";
	echo $_POST['listed']."<br/>";
	echo $_POST['fullnote']."<br/>";
	echo $_POST['alldist']."<br/>";
	echo $_POST['native']."<br/>";
	echo $_POST['intro']."<br/>";
	echo $_POST['introu']."<br/>";
	echo $_POST['reintro']."<br/>";
	echo $_POST['extinct']."<br/>";
	echo $_POST['extinctu']."<br/>";
	echo $_POST['distu']."<br/>";
	
	$conexion = mysqli_connect("localhost", "root","","troyanos");
		if (mysqli_connect_errno($conexion)) {
			echo "Fallo al conectar a MYSQL: " . mysqli_connect_error();
		}
		// En caso que la conexion sea exitosa, se mete al programa
		else{	
	$id_animal= mysqli_real_escape_string ($conexion,$_POST['id']);
	$reino= mysqli_real_escape_string ($conexion,$_POST['reino']);
	$filium= mysqli_real_escape_string ($conexion,$_POST['filum']);
	$clase= mysqli_real_escape_string ($conexion,$_POST['clase']);
	$orden= mysqli_real_escape_string ($conexion,$_POST['orden']);
	$familia= mysqli_real_escape_string ($conexion,$_POST['familia']);
	$genero= mysqli_real_escape_string ($conexion,$_POST['genero']);
	$especie= mysqli_real_escape_string ($conexion,$_POST['specie']);
	$sub= mysqli_real_escape_string ($conexion,$_POST['sub']);
	$nomcien= mysqli_real_escape_string ($conexion,$_POST['nomcien']);
	$autor= mysqli_real_escape_string ($conexion,$_POST['autor']);
	$rango= mysqli_real_escape_string ($conexion,$_POST['rango']);
	$listing= mysqli_real_escape_string ($conexion,'RANGO(EDITARCAMPO)');//no agregada en admin.php
	$party= mysqli_real_escape_string ($conexion,$_POST['party']);
	$listed= mysqli_real_escape_string ($conexion,$_POST['listed']);
	$fullnote= mysqli_real_escape_string ($conexion,$_POST['fullnote']);
	$fullnote1= mysqli_real_escape_string ($conexion,'#_FullNote'); //no agregada en admin.php
	$alldist= mysqli_real_escape_string ($conexion,$_POST['alldist']);
	$alldist2= mysqli_real_escape_string ($conexion,'All_distributionISOCodes(EDITARCAMPO)');//no agregada en admin.php
	$native= mysqli_real_escape_string ($conexion,$_POST['native']);
	$intro= mysqli_real_escape_string ($conexion,$_POST['intro']);
	$introu= mysqli_real_escape_string ($conexion,$_POST['introu']);
	$reintro= mysqli_real_escape_string ($conexion,$_POST['reintro']);
	$extinct= mysqli_real_escape_string ($conexion,$_POST['extinct']);
	$extinctu= mysqli_real_escape_string ($conexion,$_POST['extinctu']);
	$distu= mysqli_real_escape_string ($conexion,$_POST['distu']);
	
	echo $listing;
	echo $fullnote1;
	echo $alldist2;
	
	$registro = mysqli_query($conexion, "INSERT INTO todo VALUES('".$id_animal."','".$reino."','".$filium."','".$clase."','".$orden."','".$familia."','".$genero."','".$especie."','".$sub."','".$nomcien."','".$autor."','".$rango."','".$listing."','".$party."','".$listed."','".$fullnote."','".$fullnote1."','".$alldist."','".$alldist2."','".$native."','".$intro."','".$introu."','".$reintro."','".$extinct."','".$extinctu."','".$distu."');");
		}
	
	echo "<h2>¡ESPECIE REGISTRADA!<h2>";
	
	
?>