<?php
	/* Chemin d'acces au images */
	$dossier_Images = "Images/";
	$sous_Dossier_Images = "Site/";
	
	$vecteur_Titre_Images = array();
	
	$vecteur_Titre_Images[0] = "Nuages.jpg";
	$vecteur_Titre_Images[1] = "nisekoi.png";
	$vecteur_Titre_Images[2] = "spice_and_wolf.jpg";
	$vecteur_Titre_Images[3] = "no_game_no_life.jpg";
	
	$vecteur_Description_Images = array();
	
	$vecteur_Description_Images[0] = "Arrière-plan bannière";
	$vecteur_Description_Images[1] = "Liens Animes";
	$vecteur_Description_Images[2] = "Liens Mangas";
	$vecteur_Description_Images[3] = "Liens Base de données";
?>

<header>
	<!-- Background-Image -->
	<!-- Changer valeur compteur pour remplacer [num] -->
	<?php $i = 0; ?>
	<img <?php echo "alt=".$vecteur_Description_Images[$i]; ?> <?php echo "src=".$dossier_Images.$sous_Dossier_Images.$vecteur_Titre_Images[$i]; ?> />
	
	<!-- Lien vers les parties principales -->
	<div class="row">
		<!-- Bannière -->
		<div class="col-lg-6">
			<div class="jumbotron">
				<h1> <?php echo $titre_Site; ?> </h1>
				<p> <?php echo $texte_Banniere; ?> </p>
			</div>
		</div>
		
		<?php $i++; ?>
		
		<div class="col-lg-2">
			<a <?php echo "href=".$vecteur_Onglets[$i]; ?> >
				<img class="img-responsive img-circle" <?php echo "alt=".$vecteur_Description_Images[$i]; ?> <?php echo "src=".$dossier_Images.$sous_Dossier_Images.$vecteur_Titre_Images[$i]; ?> />
				<p>SAMPLE TEXT</p>
			</a>
		</div>
		
		<?php $i++; ?>
		
		<div class="col-lg-offset-2 col-lg-2">
			<a <?php echo "href=".$vecteur_Onglets[$i]; ?> >
				<img class="img-responsive img-circle" <?php echo "alt=".$vecteur_Description_Images[$i]; ?> <?php echo "src=".$dossier_Images.$sous_Dossier_Images.$vecteur_Titre_Images[$i]; ?> />
				<p>SAMPLE TEXT</p>
			</a>
		</div>
	</div>
	
	<div class="row">
		<?php $i++; ?>
		
		<div class="col-lg-offset-8 col-lg-4">
			<a <?php echo "href=".$vecteur_Onglets[$i]; ?> >
				<img class="img-responsive img-circle" <?php echo "alt=".$vecteur_Description_Images[$i]; ?> <?php echo "src=".$dossier_Images.$sous_Dossier_Images.$vecteur_Titre_Images[$i]; ?> />
				<p>SAMPLE TEXT</p>
			</a>
		</div>
	</div>
</header>