<?php
	$Nombre_Anime_News_Ligne = 3; /** Diviseurs de 12 **/
	$Nombre_Ligne_Anime = 2;
	
	$Taille_Cellule_Anime = 12/$Nombre_Anime_News_Ligne;
	$Nombre_Animes_News = 4;
	$Compteur = 0;
	
?>

<div id="News-Animes" class="row">
	<div class="col-lg-12">
		<h3>Anime</h3>
		<p>Dernière upload - <?php echo $Date_image_News ?></p>
	</div>
	
	<div class="col-lg-12">
		<?php
			for($i = 0; $i < $Nombre_Ligne_Anime; $i++)
			{
			?>
				<div class="row">

				<?php
				for($j = 0; $j < $Nombre_Anime_News_Ligne && $Compteur < $Nombre_Animes_News; $j++, $Compteur++)
				{
				?>
					<div class=<?php echo "'col-lg-".$Taille_Cellule_Anime." Animes-Box'"; ?>>
						<div class="News-Animes">
							<img class=<?php echo "img-responsive"; ?> src=<?php echo $Dossier_Images.$Sous_Dossier_Images_News.$Titre_Img_News[$i*$Nombre_Anime_News_Ligne+$j].".".$Extension_Img_News[$j]; ?> alt=<?php echo "'Dernier wallpaper : ".$Header_Img_News[$i*$Nombre_Anime_News_Ligne+$j]."'"; ?>>
							
							<div class="Text-Image">
								<h4><?php echo $Header_Img_News[$i*$Nombre_Anime_News_Ligne+$j]; ?></h4>
								<p><?php echo $Description_Img_News[$i*$Nombre_Anime_News_Ligne+$j]; ?></p>
							</div>
							<a href=<?php echo $Lien_Img_News[$i*$Nombre_Anime_News_Ligne+$j]; ?> >
								<div class="boite-survol">							
										<p>Regarder</p>
								</div>
							</a>	
						</div>
					</div>
				<?php
				}
				?>
				
				</div>
			<?php
			}
		?>
	</div>
</div>