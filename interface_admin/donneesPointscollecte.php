<?php
	$adress = $_POST['adress'];
	$recovery_type = $_POST['recovery_type'];
	$donnees = '[{
		"adress": "'.$adress.'",
		"recovery_type": "'.$recovery_type.'",
	}]';
	$handle = fopen("pickup_points.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./pt_collecte.php');
?>