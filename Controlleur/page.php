<?php


require('Model/billet_M.php');
require('Model/commentaire_M.php');



function billetList()
{
	$getBillets = new Billet(); 
	$billets = $getBillets->get_Billet();

	foreach($billets as $cle => $billet) 
	{

		$billets[$cle]['id'] = ($billet['id']);

		$billets[$cle]['titre'] = ($billet['titre']);

	}

	require('Vue/list_billet.php');

}



function billet()
{
	$getBillet = new Billet(); 
	$billets = $getBillet->get_Billets($_GET['page']);
	

	foreach($billets as $cle => $billet) 
	{
	
		$billets[$cle]['id'] = ($billet['id']);

		$billets[$cle]['titre'] = ($billet['titre']);

		$billets[$cle]['contenu'] = ($billet['contenu']);

	}

	$getCommentaire = new Commentaire(); 
	$commentaires = $getCommentaire->get_Commentaire($_GET['page']);
	

	foreach($commentaires as $cle => $commentaire) 
	{

		$commentaires[$cle]['auteur'] = ($commentaire['auteur']);

		$commentaires[$cle]['contenu'] = ($commentaire['contenu']);

	}

	require('Vue/billet.php');
}


function contact()
{
	require('Vue/contact.php');
}



/* Backend  */

function backend()
{
		
	session_start();

	$pseudo = 'jeanF';
	$pass = '123456';

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



		$getBillet_backend = new Billet(); 
		$billets_backend = $getBillet_backend->get_Billet();
	

		foreach($billets_backend as $cle => $billet) {

			$billets_backend[$cle]['id'] = ($billet['id']);
		
			$billets_backend[$cle]['titre'] = ($billet['titre']);

		}


		$getCommentaire_backend = new Commentaire(); 
		$commentaires_all = $getCommentaire_backend->get_allCommentaire();
		$commentaires_signaler = $getCommentaire_backend->get_commentaireSignaler();
	

		foreach($commentaires_all as $cle => $commentaire) {

			$commentaires_all[$cle]['auteur'] = ($commentaire['auteur']);

			$commentaires_all[$cle]['contenu'] = ($commentaire['contenu']);

		}

		
		foreach($commentaires_signaler as $cle => $commentaire) {

			$commentaires_signaler[$cle]['auteur'] = ($commentaire['auteur']);

			$commentaires_all[$cle]['contenu'] = ($commentaire['contenu']);

		}

		require('Vue/backend.php');

}		
		


function backendUpdate()
{
	
	$getUpdateBillet = new Billet(); 
	$getUpdateBillets = $getUpdateBillet->get_Billets($_GET['idBillet']);
	

	foreach($getUpdateBillets as $cle => $billet) {

		$getUpdateBillets[$cle]['id'] = ($billet['id']);
		
		$getUpdateBillets[$cle]['titre'] = ($billet['titre']);
		
		$getUpdateBillets[$cle]['contenu'] = ($billet['contenu']);

		}

	require('Vue/billet_Update.php');
}


/* Accueil */

function accueil()
{
	$last_billet = new Billet();
	$lastB = $last_billet->get_LastBillet();
		
	foreach($last_billet as $cle => $billet) {

		$lastB[$cle]['titre'] = ($billet['titre']);
		
		$lastB[$cle]['contenu'] = ($billet['contenu']);
	
	}

	require('Vue/accueil.php');

}



/* Connexion à la page d'administration  */

function setConnexion()
{
	require('Vue/connexion.php');
}


?>
