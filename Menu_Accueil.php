<?php
	/** MENU **/
	$Nombre_Onglets = 4;
	$Nombre_Colonnes_Disponible_Onglets = 12;
	$Taille_Colonnes = $Nombre_Colonnes_Disponible_Onglets/$Nombre_Onglets; /* Valeur choisie par défaut */
?>

<div class="row">
	<div class="col-lg-12">
		<nav id="Sous_menu_Accueil" class="row navbar-default">
			<!-- Sous-menu -->
			<ul class="col-lg-12 nav navbar-nav">
				<!-- Affichage des éléments contenu dans Onglets -->
				<?php
					for($i = 0; $i < $Nombre_Onglets; $i++)
					{
						?>
						<li <?php echo "class=col-lg-".$Taille_Colonnes; ?>>
							<a <?php echo "href=".$Href_Sous_Onglets[$i]; ?>> <?php echo $Sous_Onglets[$i]; ?> </a>
						</li>
						<?php
					}
				?>
			</ul>
		</nav>
	</div>
</div>