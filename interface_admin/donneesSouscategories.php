<?php
	$sub_category = $_POST['sub_category'];
	$category = $_POST['category'];
	
	

	$donnees = "{\"SubCategories\": [{
		\"sub_category\": \"$sub_category\",
		\"category\": \"$category\",
		
	
}]}";
	
	echo $donnees;
	
	$handle = fopen("subCategory.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./sous_categ.php');
?>