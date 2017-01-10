<?php
	$category = $_POST['category'];
	$donnees = '[{
		"category": "'.$category.'",
	}]';
	$handle = fopen("category.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./categories.php');
?>