<?php

class Commentaire
{

	private function connectDB()
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=projet3;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
		
		return $bdd;
	} 
	
	public function add_Commentaire($auteurCommentaire, $contenuCommentaire, $idBillet)
	{
		$bdd = $this->connectDB();
		$addCommentaire = $bdd->prepare('INSERT INTO commentaire(auteur, contenu, id_billet, date) VALUES(?, ?, ?, NOW())');
		$affectedLines = $addCommentaire->execute(array($auteurCommentaire, $contenuCommentaire, $idBillet));

        return $affectedLines;
	}
	
	public function get_Commentaire($idCom)
	{
		$db = $this->connectDB();
        $req = $db->prepare('SELECT id, auteur, contenu, date FROM commentaire WHERE id_billet = ? ORDER BY id DESC');
		$req->execute(array($idCom));

		$commentaires = $req->fetchAll();

		return $commentaires;

	}
	
	public function get_allCommentaire()
	{
		$db = $this->connectDB();
        $req = $db->prepare('SELECT id, auteur, contenu, date FROM commentaire WHERE signaler = 0 ORDER BY date DESC');
		$req->execute();

		$allCommentaires = $req->fetchAll();

		return $allCommentaires;

	}
	
	public function get_commentaireSignaler()
	{
		$db = $this->connectDB();
        $req = $db->prepare('SELECT id, auteur, contenu, date FROM commentaire WHERE signaler = 1 ORDER BY id DESC');
		$req->execute();

		$commentairesSignaler = $req->fetchAll();

		return $commentairesSignaler;

	}
	
	public function signalement_commentaire($idSignaler)
	{
		$db = $this->connectDB();
		$req = $db->prepare('UPDATE commentaire SET signaler = 1 WHERE id = ?');
		$req->execute(array($idSignaler));
	}
	
	
	
	public function get_supCommentaire($get_idSupp)
	{
		$db = $this->connectDB();
        $req = $db->prepare('DELETE FROM commentaire WHERE id = ?');
		$req->execute(array($get_idSupp));

	}
}	
	
?>
