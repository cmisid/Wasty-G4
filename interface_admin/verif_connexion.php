 <?php
    $login_valide = "admin";
    $pwd_valide = "admin";
	//print('test');
    if (isset($_POST['login']) && isset($_POST['mdp'])) {
    	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['mdp']) {
    		session_start ();
    		$_SESSION['login'] = $_POST['login'];
    		$_SESSION['mdp'] = $_POST['mdp'];
    		header ('location: index.php');
    	}
    	else {
    		print('<body onLoad="alert(\'Membre non reconnu...\')">');
    		print('<meta http-equiv="refresh" content="0;URL=login.php">');
    	}
    }
    else {
    	print('Les identifiants ne sont pas déclarées.');
    }
?>