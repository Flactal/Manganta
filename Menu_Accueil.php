<?php
	/** MENU **/
	$nombre_Onglets = 4;
	$nombre_Colonnes_Disponible_Onglets = 12;
	$taille_Colonnes = $nombre_Colonnes_Disponible_Onglets/$nombre_Onglets; /* Valeur choisie par défaut */
?>

<div class="row">
	<div class="col-lg-12">
		<nav id="Sous_menu_Accueil" class="row navbar-default">
			<!-- Sous-menu -->
			<ul class="col-lg-12 nav navbar-nav">
				<!-- Affichage des éléments contenu dans vecteur_Onglets -->
				<?php
					for($i = 0; $i < $nombre_Onglets; $i++)
					{
						?>
						<li <?php echo "class=col-lg-".$taille_Colonnes; ?>>
							<a <?php echo "href=".$vecteur_Sous_Href_Onglets[$i]; ?>> <?php echo $vecteur_Sous_Onglets[$i]; ?> </a>
						</li>
						<?php
					}
				?>
			</ul>
		</nav>
	</div>
</div>