<?php


require('../Model/commentaire_M.php');

function addCommentaire()
{

	$auteurC = $_POST['auteur_commentaire'];
	$contenuC = $_POST['contenu_commentaire'];
	$idDuBillet = $_POST['id_B'];
	
	$Commentaire = new commentaire;
	$Commentaire->add_Commentaire($auteurC, $contenuC, $idDuBillet);
	
	header('location: ../index.php?action=billet&page=' . $idDuBillet . ' ');
}


function deleteCommentaire()
{
	$setSuppCom = new commentaire(); 
	$comSupprimer = $setSuppCom->get_supCommentaire($_GET['idCom']);

	header('location: ../index.php?action=backend');
}


function signalerCommentaire()
{
	$setSignaler = new commentaire(); 
	$comSignaler = $setSignaler->signalement_commentaire($_GET['idCom']);

	header('location: ../index.php?action=billet&page=' . $_GET['page'] . ' ');
}



if($_GET['set'] == 'addC')
{
	
	addCommentaire();
}

elseif($_GET['set'] == 'signalC')
{
	
	signalerCommentaire();
}

elseif($_GET['set'] == 'deleteC')
{
	
	deleteCommentaire();
}

else
{
	echo 'aucune information donner';
}



?>
