<?php

class Billet
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
	

	public function add_Billets($titreBillet, $contenuBillet)
	{
		$bdd = $this->connectDB();
		$addBillet = $bdd->prepare('INSERT INTO billet(titre, contenu, date) VALUES(?, ?, NOW())');
		$affectedLines = $addBillet->execute(array($titreBillet, $contenuBillet));

        return $affectedLines;
	}
	
	
	public function get_Billets($idPost)
	{
		$db = $this->connectDB();
        $req = $db->prepare('SELECT id, titre, contenu, date FROM billet WHERE id = ?');
		$req->execute(array($idPost));

		$billets = $req->fetchAll();

		return $billets;

	}
	
		public function get_Billet()
	{
		$db = $this->connectDB();
        $req = $db->prepare('SELECT id, titre FROM billet ORDER BY id');
		$req->execute();

		$billets = $req->fetchAll();

		return $billets;
		
	}
	
	public function get_LastBillet()
	{
		$db = $this->connectDB();
        $req = $db->prepare('SELECT titre, contenu, date FROM billet ORDER BY id DESC LIMIT 0,1');
        $req->execute();

		$lastBillet = $req->fetchAll();
		return $lastBillet;

	}
	
	public function update_billet($titreBilletUpdate, $contenuBilletUpdate, $idBilletUpdate)
	{
		$db = $this->connectDB();
        $req = $db->prepare('UPDATE billet SET titre = ?, contenu = ? WHERE id = ?');
        $req->execute(array($titreBilletUpdate, $contenuBilletUpdate, $idBilletUpdate));

	}
	

	public function get_supBillet($get_idSupp)
	{
		$db = $this->connectDB();
        $req = $db->prepare('DELETE FROM billet WHERE id = ?');
		$req->execute(array($get_idSupp));

	}
	
}	
?>
