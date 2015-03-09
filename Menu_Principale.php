<?php
	/** MENU **/
	$Nombre_Onglets = 4;
	$Nombre_Colonnes_Disponible_Onglets = 12;
	$Taille_Colonnes = 2; /* Valeur choisie par défaut */
	$Taille_Offset_Colonnes = $Nombre_Colonnes_Disponible_Onglets - ($Nombre_Onglets * $Taille_Colonnes);
?>

<div class="col-lg-12">
	<nav id="Menu_Principale" class="row">
		<!-- Titre Site -->
		<div class="col-lg-2 navbar-header">
			<a id="Brand_Name" class="navbar-brand" href="Accueil.php">Manganta</a>
		</div>
		
		<!-- Menu -->
		<ul class="col-lg-10 nav navbar-nav">
			<!-- offset si nécessaire -->
			<li <?php echo "class=col-lg-".$Taille_Offset_Colonnes; ?>></li>
			
			<!-- Affichage des éléments contenu dans Onglets -->
			<?php
				for($i = 0; $i < $Nombre_Onglets; $i++)
				{
					?>
					<li <?php echo "class=col-lg-".$Taille_Colonnes; ?>>
						<a <?php echo "href=".$Href_Onglets[$i]; ?>> <?php echo $Onglets[$i]; ?> </a>
					</li>
					<?php
				}
			?>
		</ul>
	</nav>
</div>