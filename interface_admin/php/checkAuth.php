<?php
	session_start ();
	if (empty($_SESSION['login']) || empty($_SESSION['mdp'])) 
	{
		header ('location: ./login.php');
	}
?>