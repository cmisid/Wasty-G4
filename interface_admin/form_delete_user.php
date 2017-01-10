<?php
	date_default_timezone_set('Europe/Paris');
	$date_unsubscribe = date("Y-m-d H:i:s");
	$is_active = 'False';
	$donnees = '[
		{
			"is_active" : "'.$is_active.'",
			"date_unsubscribe" : "'.$date_unsubscribe.'"
			
		}
]';
	$handle = fopen("form_delete_user.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./supp_user.php');
?>