<header class="col-lg-12">
	<!-- Lien vers les parties principales -->
	<div class="row">
		<div class="col-lg-5 col-sm-5 col-xs-12">
			<!-- Bannière -->
			<div class="jumbotron">
				<h1> <?php echo $titre_Site; ?> </h1>
				<p> <?php echo $texte_Banniere; ?> </p>
			</div>
		</div>
		
		<!-- 3 Images -->
		<div class="col-lg-7 col-sm-7 col-xs-12">
			<div class="row">
				<?php
					for($i = 0; $i < 3; $i++)
					{
						?>
						<div class="col-img col-lg-4 col-sm-4 col-xs-4">
							<a <?php echo "id=".$vecteur_Id_Lien_Images[$i]."_img"; ?> <?php echo "href=".$vecteur_Href_Onglets[$i]; ?> >
								<img class="img-responsive img-circle" <?php echo "alt=".$vecteur_Description_Images[$i]; ?> <?php echo "src=".$dossier_Images.$sous_Dossier_Images.$vecteur_Titre_Images[$i]; ?> />
								<p><?php echo $vecteur_Onglets[$i]; ?></p>
							</a>
						</div>
						<?php
					}
				?>
			</div>
		</div>
	</div>
</header>