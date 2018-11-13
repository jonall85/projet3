<?php
	
	session_start();

	$pseudo = 'jeanF';
	$pass = '123456';

	if($_POST && !empty($_POST['pseudo_connexion']) && !empty($_POST['pass_connexion']))
	{
		if(($pseudo == $_POST['pseudo_connexion']) && ($pass == $_POST['pass_connexion']))
		{
			$_SESSION['_login'] = $pseudo;
       		$_SESSION['_pass'] = $pass;

       		header('location: ../index.php?action=backend');
		}

		else
		{
			header('location: ../index.php?action=connect');
		}
	}

	else
		{
			header('location: ..index.php?action=connect');
		}

?>
