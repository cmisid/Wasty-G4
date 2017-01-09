 <?php
	// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
    $id = "admin";
    $mdp = "admin";
	// on teste si nos variables sont définies
    if (isset($_POST['login']) && isset($_POST['mdp'])) {
		// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
    	if ($id == $_POST['login'] && $mdp == $_POST['mdp']) {
			// dans ce cas, tout est ok, on peut démarrer notre session
			// on la démarre
    		session_start ();
			// on enregistre les paramètres de notre utilisateur comme variables de session ($user et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
    		$_SESSION['login'] = $_POST['login'];
    		$_SESSION['mdp'] = $_POST['mdp'];
			// on redirige notre visiteur vers une page de notre section membre
    		header ('location: index.php');
    	}
    	else {
			// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
    		print('<body onLoad="alert(\'Membre non reconnu...\')">');
			// puis on le redirige vers la page d'accueil
    		print('<meta http-equiv="refresh" content="0;URL=id.php">');
    	}
    }
    else {
    	print('Les identifiants ne sont pas déclarées.');
    }
?>