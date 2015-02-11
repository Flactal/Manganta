<?php
	/*=== Maintenance ===*/
	$i;
	
	/** GENERAL **/
	$titre_Site = "Test";
	$texte_Banière = "Testons la bannière";
	
	/** MENU **/
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
	/** FIN MENU **/
	
?>