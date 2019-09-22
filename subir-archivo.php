<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Subir Archivos al Servidor con PHP</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="welcome">
<?php
	foreach($_FILES["archivo_fls"] as $clave => $valor){
		echo "Propiedad: $clave --- Valor: $valor<br/>";
	}
	
	$archivo = $_FILES["archivo_fls"]["tmp_name"];
	$destino = "image/".$_FILES["archivo_fls"]["name"];
	
	if($_FILES["archivo_fls"]["type"]=="image/jpeg"){
		move_uploaded_file($archivo,$destino);
		echo "Archivo subido :)";
	}else{
		echo "Solo se admiten archivos de texto plano<br />";
	}
?>
</div>
<div class="welcome">
   
   <center>
   <a href="vistamenu.php">regresar menu</a>
   <P> <a href="cerrar.php">Cerrar sesion</a>
	   </center>
  </div>
</body>
</html>