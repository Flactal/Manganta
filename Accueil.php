<?php
	include_once 'Variables.php';
?>

<!doctype html>
<html>
	<head>
		<title>Accueil</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="General_Stylesheet.css">
		<link rel="stylesheet" type="text/css" href="Accueil_Stylesheet.css">
		<link rel="stylesheet" type="text/css" href="Menu_Principale_Stylesheet.css">
		<link rel="stylesheet" type="text/css" href="Header_Stylesheet.css">
		<link rel="stylesheet" type="text/css" href="Menu_Accueil_Stylesheet.css">
		<link rel="stylesheet" type="text/css" href="News_Stylesheet.css">
		
		<script src="Jquery/jquery-1.11.2.js" ></script>
		<script src="dist/js/bootstrap.min.js" ></script>
		<script src="dist/js/bootstrap.js" ></script>
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
		
		<!-- Corps de l'accueil -->
		<?php
			include_once 'News_Accueil.php';
		?>
		
	</body>
</html>