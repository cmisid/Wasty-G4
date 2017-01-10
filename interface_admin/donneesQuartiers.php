<?php
	$district_name = $_POST['district_name'];
	$city_name = $_POST['city_name'];
	$density=$_POST['density'];
	$polygon=$_POST['polygon'];
	

	$donnees = "{\"Districts\": [{
		\"district_name\": \"$district_name\",
		\"city_name\": \"$city_name\",
		\"density\": \"$density\",
		\"polygon\": \"$polygon\",
	
}]}";
	
	echo $donnees;
	
	$handle = fopen("district.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./quartier.php');
?>