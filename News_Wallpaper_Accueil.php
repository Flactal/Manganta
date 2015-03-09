<div class="row">
	<div class="col-lg-12">
		<h3>Wallpaper</h3>
		<p>Team's choices - <?php echo $Date_image_News ?></p>
	</div>
	
	<div id="Carousel" class="carousel slide col-lg-12" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#Carousel" data-slide-to="0" class='active'></li>
			<?php
				for($i = 1; $i < $Nombre_Image_News; $i++)
				{
				?>
					<li data-target="#Carousel" data-slide-to=<?php echo '"'.$i.'"'; ?>></li>
				<?php
				}
			?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner col-lg-12" role="listbox">
			<div class="item active col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<img class="Img-News-0" src=<?php echo $Dossier_Images.$Sous_Dossier_Images_News.$Titre_Img_News[0].".".$Extension_Img_News[0]; ?> alt=<?php echo "'Dernier wallpaper : ".$Header_Img_News[0]."'"; ?>>
				
				<div class="carousel-caption">
					<h4><?php echo $Header_Img_News[0]; ?></h4>
					<p><?php echo $Description_Img_News[0]; ?></p>
				</div>
				<a href=<?php echo $Lien_Img_News[0]; ?> >
					<div class="boite-survol">							
							<p>Infos</p>
					</div>
				</a>	
			</div>
			
			<?php
				for($i = 1; $i < $Nombre_Image_News; $i++)
				{
				?>
					<div class="item col-lg-12">
						<img class=<?php echo "Img-News-".$i; ?> src=<?php echo $Dossier_Images.$Sous_Dossier_Images_News.$Titre_Img_News[$i].".".$Extension_Img_News[$i]; ?> alt=<?php echo "'Dernier wallpaper : ".$Header_Img_News[$i]."'"; ?>>
						
						<div class="carousel-caption">
							<h4><?php echo $Header_Img_News[$i]; ?></h4>
							<p><?php echo $Description_Img_News[$i]; ?></p>
						</div>
						<a href=<?php echo $Lien_Img_News[$i]; ?> >
							<div class="boite-survol">							
									<p>Infos</p>
							</div>
						</a>	
					</div>
				<?php
				}
			?>
		</div>

	  <!-- Left and right controls -->
		<a class="left carousel-control" href="#Carousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#Carousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>