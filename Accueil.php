<?php
	include_once 'Variables.php';
?>

<!doctype html>
<html>
	<head>
		<title>Accueil</title>
		
		<meta charset="utf-8" />
		
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="General_Stylesheet.css">
		<link rel="stylesheet" type="text/css" href="Accueil_Stylesheet.css">
		<link rel="stylesheet" type="text/css" href="Menu_Principale_Stylesheet.css">
		<link rel="stylesheet" type="text/css" href="Header_Stylesheet.css">
		<link rel="stylesheet" type="text/css" href="Menu_Accueil_Stylesheet.css">
	</head>
	
	<body class="container-fluid">
		
		<div id="Header_Background" class="row">
			<!-- Menu Principale -->
			<?php
				include_once 'Menu_Principale.php';
			?>
			
			<!-- Header -->
			<?php
				include_once 'Header.php';
			?>
		</div>
		
		
		<!-- Sous-Menu -->
		<?php
			include_once 'Menu_Accueil.php';
		?>
		
	</body>
</html>