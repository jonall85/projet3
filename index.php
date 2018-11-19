<?php

require('Controlleur/page.php');
require('Controlleur/fonctions.php');


$fonction = new fonctions;

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
	
	/* Fonction des billets */

	elseif($_GET['action'] == "delB")
	{
		$fonction->deleteBillet();
	}

	elseif($_GET['action'] == "addB")
	{
		$fonction->addBillet();
	}

	elseif($_GET['action'] == "updateB")
	{
		$fonction->updateBillet();
	}
	

	/* Fonction des commentaires */

	elseif($_GET['action'] == "addC")
	{
		$fonction->addCommentaire();
	}

	elseif($_GET['action'] == "delC")
	{
		$fonction->deleteCommentaire();
	}

	elseif($_GET['action'] == "signalC")
	{
		$fonction->signalerCommentaire();
	}
	
	else
	{
		accueil();
	}
}

else
{
	accueil();
}


?>
