<?php

require('Model/billet_M.php');
require('Model/commentaire_M.php');
require_once('Controlleur/connexion.php');

class pages {


	private function testCo(){
		$test_Co = new connexion;
		return $test_Co;
	}

	public function billetList()
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



	public function billet()
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



	/* Backend  */

	public function backend()
	{
			$test_Co = $this->testCo();
			$test = $test_Co->testConnexion();


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

				$commentaires_signaler[$cle]['contenu'] = ($commentaire['contenu']);

			}

			require('Vue/backend.php');

	}


	public function backendUpdate()
	{
		
		$test_Co = $this->testCo();
		$test = $test_Co->testConnexion();

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

	public function accueil()
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

	public function getConnexion()
	{
		require('Vue/connexion.php');
	}
}



?>
