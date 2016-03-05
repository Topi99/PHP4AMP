<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>

	<?php 
		$nombre = $_GET['nombre'];
		$apellido = $_GET['apellido'];
		$dir = $_GET['dir'];
		echo "Mi nombre es: ".$nombre." ".$apellido." y vivo en: ".$dir;
	?>
	
</body>
</html>