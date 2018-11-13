<?php


	$idB = $_GET['page'];

	include('Vue/header.php');
	?>
	
	<?php

	foreach($billets as $billet)
	{
	?>

	<section class="news">

		<h3>

			<?php echo $billet['titre']; ?>

		</h3>

    

		<p>

			<?php echo $billet['contenu']; ?>

			<br />

			Créer le : <?php echo $billet['date']; ?>
		</p>
		
		
		<?php

		foreach($commentaires as $commentaire)
		{
		?>
		
			<p class="afficherCommentaire">

				<?php echo $commentaire['auteur']; ?>

				<br />

				<?php echo $commentaire['contenu']; ?>
			
				<br />
			
				Créer le : <?php echo $commentaire['date']; ?> <br />
				<a href="Controlleur/commentaire_C.php?set=signalC&amp;idCom=<?php echo $commentaire['id'];?>&amp;page=<?php echo $idB;?>"> Signaler le commentaire </a>
			</p>
			
			
		<?php

		}

		?>
		
		<div class="addCommentaire">
			<form method="post" action="Controlleur/commentaire_C.php?set=addC">
				<input type="hidden" name="id_B" id="id_B" value=<?php echo $idB ?> ></input>
				<h3> Votre nom : </h3>
				<p><input type="text" name="auteur_commentaire" id="auteur_commentaire" size="20"></input></p>
				<h3> Votre commentaire : </h3>
				<textarea name="contenu_commentaire" id="contenu_commentaire"></textarea>
				<p><input type="submit" value="Envoyer" /></p>
			</form>
		</div>

	</section>

	<?php

	}

	?>

	<?php include('Vue/footer.php'); ?>
