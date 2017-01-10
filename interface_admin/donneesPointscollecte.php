<?php
	$adress = $_POST['adress'];
	$recovery_type = $_POST['recovery_type'];

	

	$donnees = "{\"Pickup_points\": [{
		\"adress\": \"$adress\",
		\"recovery_type\": \"$recovery_type\",
		
	
}]}";
	
	echo $donnees;
	
	$handle = fopen("pickup_points.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./pt_collecte.php');
?>