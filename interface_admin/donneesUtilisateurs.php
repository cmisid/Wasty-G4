<?php
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$password = $_POST['mdp'];
	$dateNaiss = $_POST['dateN'];
	$tel = $_POST['telephone'];
	$sexe = $_POST['gender'];
	$nivPerm = $_POST['niv_permission'];
	$superviseur = $_POST['Supervisor'];
	$membreStaff = $_POST['m_staff'];
	$csp = $_POST['csp'];
	$donnees = '[{
		"first_name": "'.$nom.'",
		"last_name": "'.$prenom.'",
		"email": "'.$email.'",
		"password": "'.$password.'",
		"date_joined": "'.$dateNaiss.'",
		"phone_number": "'.$tel.'",
		"gender": "'.$sexe.'",
		"is_superuser": "'.$superviseur.'",
		"is_staff": "'.$membreStaff.'",
		"social_professional_category": "'.$csp.'",
		"user_permission": "'.$nivPerm.'"
	}]';
	$handle = fopen("test.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./ajout_user.php');
?>