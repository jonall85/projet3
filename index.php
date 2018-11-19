<?php


require('Controlleur/page.php');
require('Controlleur/fonctions.php');
require_once('Controlleur/connexion.php');


$fonction = new fonctions;
$connexions = new connexion;
$page = new pages;



if(isset($_GET['action']))
{

	/* appel des pages du site */

	if($_GET['action'] == 'list')
	{
		$page->billetList();
	}

	elseif($_GET['action'] == "billet")
	{
		$page->billet();
	}

	elseif($_GET['action'] == "backend")
	{
		$page->backend();
	}

	elseif($_GET['action'] == "backendU")
	{
		$page->backendUpdate();
	}


	/* Fonction de connexion */

	elseif($_GET['action'] == "connect")
	{
		$page->getConnexion();
	}

	elseif($_GET['action'] == "setCo")
	{
		$connexions->setConnexion();
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
	
	elseif($_GET['action'] == "désignalC")
	{
		$fonction->annulerSignalerCommentaire();
	}

	else
	{
		$page->accueil();
	}

}

else
{
	$page->accueil();
}


?>
