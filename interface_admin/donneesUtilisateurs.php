<?php
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$password = $_POST['mdp'];
	$dateNaiss = $_POST['dateN'];
	$tel = $_POST['telephone'];
	$sexe = $_POST['gender'];
	//$nivPerm = $_POST['niv_permission'];
	$superviseur = $_POST['Supervisor'];
	$membreStaff = $_POST['m_staff'];
	$csp = $_POST['csp'];
	foreach($_POST['niv_permission'] as $check)
	{
	if( !isset($checkoptions) ){ $checkoptions = $check; }
	else{ $checkoptions .= ",".$check; }
	}


	/*$donnees = "{\"Users\": {<br>
		&nbsp\"first_name\": \"$nom\",<br>
		&nbsp\"last_name\": \"$prenom\",<br>
		&nbsp\"email\": \"$email\",<br>
		&nbsp\"password\": \"$password\",<br>
		&nbsp\"date_joined\": \"$dateNaiss\",<br>
		&nbsp\"phone_number\": \"$tel\",<br>
		&nbsp\"gender\": \"$sexe\",<br>
		&nbsp\"is_superuser\": \"$superviseur\",<br>
		&nbsp\"is_staff\": \"$membreStaff\",<br>
		&nbsp\"social_professional_category\": \"$csp\",<br>
		&nbsp\"user_permission\": \"$checkoptions\",<br>
	}}";*/

	$donnees = "{\"Users\": [{
		\"first_name\": \"$nom\",
		\"last_name\": \"$prenom\",
		\"email\": \"$email\",
		\"password\": \"$password\",
		\"date_joined\": \"$dateNaiss\",
		\"phone_number\": \"$tel\",
		\"gender\": \"$sexe\",
		\"is_superuser\": \"$superviseur\",
		\"is_staff\": \"$membreStaff\",
		\"social_professional_category\": \"$csp\",
		\"user_permission\": \"$checkoptions\"
}]}";
	
	echo $donnees;
	
	$handle = fopen("test.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./ajout_user.php');
?>