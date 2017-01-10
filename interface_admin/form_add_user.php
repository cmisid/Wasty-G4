<?php
	date_default_timezone_set('Europe/Paris');
	$last_name = $_POST['last_name'];
	$first_name = $_POST['first_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$date_birth = $_POST['birthday'];
	$phone_number = $_POST['phone_number'];
	$gender = $_POST['gender'];
	$user_permission = $_POST['permission'];
	$supervisor = $_POST['supervisor'];
	$is_staff = $_POST['m_staff'];
	$csp = $_POST['csp'];
	$car_size = $_POST['car_size'];
	$date_joined = date("Y-m-d H:i:s");
	
	$donnees = '[
		{
			"password" : "'.$password.'",
			"date_joined" : "'.$date_joined.'",
			"email" : "'.$email.'",
			"last_name" : "'.$last_name.'",
			"first_name" : "'.$first_name.'",
			"user_permission" : "'.$user_permission.'",
			"is_superuser" : "'.$supervisor.'",
			"is_staff" : "'.$is_staff.'",
			"gender" : "'.$gender.'",
			"date_birth" : "'.$date_birth.'",
			"social_professional_category" : "'.$csp.'",
			"phone_number" : "'.$phone_number.'",
			"car_size" : "'.$car_size.'"
		}
]';
	$handle = fopen("form_add_user.json", "w+");
	fputs($handle,$donnees);
	fclose($handle);
	header('location: ./ajout_user.php');
?>