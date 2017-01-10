<?php
	$category = $_POST['category'];
	
	

	$donnees = "{\"Districts\": [{
		\"category\": \"$category\",
		
	
}]}";
	
	echo $donnees;
	
	$handle = fopen("category.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./categories.php');
?>