<?php

require_once('../Model/billet_M.php');

/* Fonctions des billets  */


function addBillet()
{
	$titreB = $_POST['titre_billet'];
	$contenuB = $_POST['contenu_billet'];
	
	$billet = new Billet;
	$billet->add_Billets($titreB, $contenuB);
	
	header('location: ../index.php?action=backend');
}


function deleteBillet()
{
	$setSuppBillet = new Billet(); 
	$comSupprimer = $setSuppBillet->get_supBillet($_GET['idBillet']);

	header('location: ../index.php?action=backend');
}


function updateBillet()
{
	$idBilletU = $_POST['id_B'];
	$titreU = $_POST['titre_billet'];
	$contenuU = $_POST['contenu_billet'];
	
	$updateBillet = new Billet(); 
	$updateBillet->update_billet($titreU, $contenuU, $idBilletU);
	
	header('location: ../index.php?action=backend');
}




if($_GET['set'] == 'addB')
{
	addBillet();
}

elseif($_GET['set'] == 'delB')
{
	deleteBillet();
}

elseif($_GET['set'] == 'updateB')
{
	updateBillet();
}


else
{
	echo 'Cette action ne fonctionne pas';
}

?>
