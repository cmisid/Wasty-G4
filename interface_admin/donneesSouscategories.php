<?php
	$sub_category = $_POST['sub_category'];
	$category = $_POST['category'];		
	$donnees = '[{
		"sub_category": "'.$sub_categor.'",
		"category": "'.$category.'",
	}]';
	$handle = fopen("subCategory.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./sous_categ.php');
?>