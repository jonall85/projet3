<?php
	
	
class connexion{


	public function setConnexion()
	{

		session_start();

		$pseudo = 'jeanF';
		$pass = '$2y$10$HMfhP9iHH0G3F91rm9h6beyjA.YDL5SBYuC8QvsIUE0uJVC1qo0lW';

		if($_POST && !empty($_POST['pseudo_connexion']) && !empty($_POST['pass_connexion']))
		{
			if(($pseudo == $_POST['pseudo_connexion']) && (password_verify($_POST['pass_connexion'], $pass)))
			{
				$_SESSION['_login'] = $pseudo;
       			$_SESSION['_pass'] = $pass;

       			header('location: index.php?action=backend');
			}

			else
			{
				header('location: index.php?action=connect');
			}
		}

		else
		{
			header('location: index.php?action=connect');
		}
	}


	public function testConnexion()
	{

		session_start();

		$pseudo = 'jeanF';
		$pass = '$2y$10$HMfhP9iHH0G3F91rm9h6beyjA.YDL5SBYuC8QvsIUE0uJVC1qo0lW';

		if(!isset($_SESSION['_login']) || !isset($_SESSION['_pass']))
		{
			header('location: index.php?action=connect');
		}

		else
		{
			if(($pseudo != $_SESSION['_login']) || ($pass != $_SESSION['_pass']))
			{
				header('location: index.php?action=connect');
			}
		}
	}
}


?>
