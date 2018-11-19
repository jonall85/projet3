<?php

require_once('Model/billet_M.php');
require_once('Model/commentaire_M.php');


class fonctions {
	
	/* Fonction des billets */

	public function addBillet()
	{

		$titreB = $_POST['titre_billet'];
		$contenuB = $_POST['contenu_billet'];
	
		$billet = new Billet;
		$billet->add_Billets($titreB, $contenuB);
	
		header('location: index.php?action=backend');
	}


	public function deleteBillet()
	{
		

		$setSuppBillet = new Billet(); 
		$comSupprimer = $setSuppBillet->get_supBillet($_GET['idBillet']);

		header('location: index.php?action=backend');
	}


	public function updateBillet()
	{

		$idBilletU = $_POST['id_B'];
		$titreU = $_POST['titre_billet'];
		$contenuU = $_POST['contenu_billet'];
	
		$updateBillet = new Billet(); 
		$updateBillet->update_billet($titreU, $contenuU, $idBilletU);
	
		header('location: index.php?action=backend');
	}


	/* Fonction des commentaires */

	public function addCommentaire()
	{

		$auteurC = $_POST['auteur_commentaire'];
		$contenuC = $_POST['contenu_commentaire'];
		$idDuBillet = $_POST['id_B'];
	
		$Commentaire = new commentaire;
		$Commentaire->add_Commentaire($auteurC, $contenuC, $idDuBillet);
	
		header('location: index.php?action=billet&page=' . $idDuBillet . ' ');
	}


	public function deleteCommentaire()
	{

		$setSuppCom = new commentaire(); 
		$comSupprimer = $setSuppCom->get_supCommentaire($_GET['idCom']);

		header('location: index.php?action=backend');
	}


	public function signalerCommentaire()
	{
		$setSignaler = new commentaire(); 
		$comSignaler = $setSignaler->signalement_commentaire($_GET['idCom']);

		header('location: index.php?action=billet&page=' . $_GET['page'] . ' ');
	}
}



?>
