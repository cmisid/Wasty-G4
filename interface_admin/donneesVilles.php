<?php
	$city = $_POST['city'];	
	$donnees = '[{"city": "'.$city.'"}]}';	
	$handle = fopen("city.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./ville.php');
?>