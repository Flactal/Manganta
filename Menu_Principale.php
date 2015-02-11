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