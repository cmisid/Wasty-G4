<?php
	$city = $_POST['city'];
	

	$donnees = "{\"Cities\": [{
		\"city\": \"$city\",
		
}]}";
	
	echo $donnees;
	
	$handle = fopen("city.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./ville.php');
?>