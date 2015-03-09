<?php
	/*=== Maintenance ===*/
	
	
	/*************/
	/** GENERAL **/
	/*************/
	$i;
	$j;
	$Titre_Site = "Manganta";
	$Texte_Banniere = "L'animation Japonnaise et tout ce qu'il faut en savoir.";
	
	/**********************/
	/** Noms des onglets **/
	/**********************/
	$Onglets = array();
	$Onglets[0] = "Animes";
	$Onglets[1] = "Mangas";
	$Onglets[2] = "Base de données";
	$Onglets[3] = "Connexion";
	
	$Href_Onglets = array();
	$Href_Onglets[0] = "Animes.php";
	$Href_Onglets[1] = "Mangas.php";
	$Href_Onglets[2] = "BDD.php";
	$Href_Onglets[3] = "Connexion.php";
	/** FIN MENU **/
	
	/**************************/
	/** Sous-Onglets ACCUEIL **/
	/**************************/
	$Sous_Onglets = array();
	$Sous_Onglets[0] = "News";
	$Sous_Onglets[1] = "Titre 2";
	$Sous_Onglets[2] = "Titre 3";
	$Sous_Onglets[3] = "Titre 4";
	
	$Href_Sous_Onglets = array();
	$Href_Sous_Onglets[0] = "News.php";
	$Href_Sous_Onglets[1] = "Mangas.php";
	$Href_Sous_Onglets[2] = "BDD.php";
	$Href_Sous_Onglets[3] = "Connexion.php";
	/** FIN SOUS-ONGLETS ACCUEIL **/
	
	/*****************************/
	/* Chemin d'acces aux images */
	/*****************************/
	$Dossier_Images = "Images/";
	$Sous_Dossier_Images_Header = "Site/";
	$Sous_Dossier_Images_News = "News/";
	
	/************/
	/** HEADER **/
	/************/
	
	/** Utile pour mettre une couleur spécifique à chaque image **/
	$Id_Lien_Images = array();
	
	$Id_Lien_Images[0] = "Animes";
	$Id_Lien_Images[1] = "Mangas";
	$Id_Lien_Images[2] = "BDD";
	
	$Titre_Images = array();
	
	$Titre_Images[0] = "nisekoi.png";
	$Titre_Images[1] = "spice_and_wolf.jpg";
	$Titre_Images[2] = "no_game_no_life.jpg";
	
	$Description_Images = array();
	
	$Description_Images[0] = "Liens_Animes";
	$Description_Images[1] = "Liens_Mangas";
	$Description_Images[2] = "Liens_Base_de_données";
	/** FIN IMAGES **/
	
	/**********/
	/** NEWS **/
	/**********/
	$Nombre_Image_News = 4;
	$Date_image_News = "07/03/2015";
	
	$Titre_Img_News = array();
	$Extension_Img_News = array();
	$Header_Img_News = array();
	$Description_Img_News = array();
	$Lien_Img_News = array();
	
	$Titre_Img_News[0] = "Spice_And_Wolf";
	$Titre_Img_News[1] = "Wallpaper_1";
	$Titre_Img_News[2] = "Wallpaper_2";
	$Titre_Img_News[3] = "Pokemon";
	
	$Extension_Img_News[0] = "jpg";
	$Extension_Img_News[1] = "jpg";
	$Extension_Img_News[2] = "jpg";
	$Extension_Img_News[3] = "jpg";
	
	$Header_Img_News[0] = "Spice and wolf";
	$Header_Img_News[1] = "Wallpaper 1";
	$Header_Img_News[2] = "Wallpaper 2";
	$Header_Img_News[3] = "Pokémon";
	
	$Description_Img_News[0] = "Auteur : Anonyme";
	$Description_Img_News[1] = "Auteur : Anonyme";
	$Description_Img_News[2] = "Auteur : Anonyme";
	$Description_Img_News[3] = "Auteur : Anonyme";
	
	$Lien_Img_News[0] = "#";
	$Lien_Img_News[1] = "#";
	$Lien_Img_News[2] = "#";
	$Lien_Img_News[3] = "#";
	
?>