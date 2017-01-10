<?php
	date_default_timezone_set('Europe/Paris');
	$user_permission = $_POST['permission'];
	$donnees = '[
		{
			
			"user_permission" : "'.$user_permission.'"
			
		}
]';
	$handle = fopen("form_modify_user.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./modif_user.php');
?>