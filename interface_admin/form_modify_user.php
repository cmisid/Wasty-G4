<?php
/* 
Groupe[4] 
Version : V2.1.2

Ce fichier permet de récuperer les valeurs saisies dans le formulaire utilisateur (modification) et de les formater dans un fichier json.

Changements : nommage des variables en anglais.

*/
	/* Configuration du type "date" */ 
	date_default_timezone_set('Europe/Paris');
	
	/* Recuperation des données saisies par l'administrateur dans la page modif_user.php */
	$user_permission = $_POST['permission'];
	
	/* Creation du fichier json à partir des données recuperées */ 
	$data = '[
	{
			
		"user_permission" : "'.$user_permission.'"
			
	}
]';

	/* Crée(ou ecrase) et écrit le contenu de la variable data dans le fichier form_modify_user.json */
	$handle = fopen('form_modify_user.json', 'w+');
	fputs($handle,$data);
	fclose($handle);
	header('location: ./user_modif.php');
?>