<?php

require('Controlleur/page.php');

if(isset($_GET['action']))
{

	if($_GET['action'] == 'list')
	{
		billetList();
	}

	elseif($_GET['action'] == "billet")
	{
		billet();
	}

	elseif($_GET['action'] == "connect")
	{
		setConnexion();
	}

	elseif($_GET['action'] == "backend")
	{
		backend();
	}

	elseif($_GET['action'] == "backendU")
	{
		backendUpdate();
	}

	elseif($_GET['action'] == "connect")
	{
		setConnexion();
	}
	
	elseif($_GET['action'] == "contact")
	{
		contact();
	}
}

else
{
	accueil();
}


?>
