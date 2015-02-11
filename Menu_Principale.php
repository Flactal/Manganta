<?php
	/*=== Maintenance ===*/
	$i;
	
	$nombre_Onglets = 4;
	$nombre_Colonnes_Disponible_Onglets = 12;
	$taille_Colonnes = 2; /* Valeur choisie par défaut */
	$taille_Offset_Colonnes = $nombre_Colonnes_Disponible_Onglets - ($nombre_Onglets * $taille_Colonnes);
	
	/** Noms des onglets **/
	$vecteur_Onglets = array();
	
	$vecteur_Onglets[0] = "Animes";
	$vecteur_Onglets[1] = "Mangas";
	$vecteur_Onglets[2] = "Base de données";
	$vecteur_Onglets[3] = "Connexion";
	
	
	$vecteur_Href_Onglets = array();
	
	$vecteur_Href_Onglets[0] = "Animes.php";
	$vecteur_Href_Onglets[1] = "Mangas.php";
	$vecteur_Href_Onglets[2] = "BDD.php";
	$vecteur_Href_Onglets[3] = "Connexion.php";
?>

<nav id="Menu_Principale" class="row">
	<!-- Titre Site -->
	<div class="col-lg-2 navbar-header">
		<a id="Brand_Name" class="navbar-brand" href="Accueil.php">Manganta</a>
	</div>
	
	<!-- Menu -->
	<ul class="col-lg-10 nav navbar-nav">
		<!-- offset si nécessaire -->
		<li <?php echo "class=col-lg-".$taille_Offset_Colonnes; ?>></li>
		
		<!-- Affichage des éléments contenu dans vecteur_Onglets -->
		<?php
			for($i = 0; $i < $nombre_Onglets; $i++)
			{
				?>
				<li <?php echo "class=col-lg-".$taille_Colonnes; ?>>
					<a <?php echo "href=".$vecteur_Href_Onglets[$i]; ?>> <?php echo $vecteur_Onglets[$i]; ?> </a>
				</li>
				<?php
			}
		?>
	</ul>
</nav>