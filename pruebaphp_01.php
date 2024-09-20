<!DOCTYPE html>
<?php $saludo='hola';?>
<html lang=es>
	<head>
		<meta charset=utf-8 />
		<meta name=viewport content='width=device-width, initial-scale=1' />
		<meta name=author content='Paloma Hernandez' />
		<!-- <link rel=icon type=image/x-icon href=/img/favicon.png /> -->
		<title>Dashboard PHP</title>
		
		<link rel=stylesheet href=css/reset.css />
		<link rel=stylesheet href=css/dashboard.css />
		<!-- Resto de hojas de estilo CSS -->
	</head>
	<body>
		<?php echo '<h1>Página HTML</h1>';?>
		<?php echo "<h1> $saludo </h1>";?>
		<?php echo '<h2>'. $saludo .'</h2>';?>
		<?php echo PHP_VERSION;?>
	</body>
</html>