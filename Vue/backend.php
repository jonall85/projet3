<?php include('Vue/header-backend.php'); ?>


	<section class="backend">
	
				<form method="post" action="index.php?action=addB">
					<h2> Titre du billet : </h2>
					<p><input type="text" name="titre_billet" id="titre_billet" size="20"></input></p>
					<h2> Contenu du billet : </h2>
					<textarea name="contenu_billet" id="contenu_billet"></textarea>
					<p><input type="submit" value="Envoyer" /></p>
				</form>
			</section>



	<!--  Listing des billets   -->

	<section class="backend">
		<h2> Liste des billets : </h2>
	
		<?php

		foreach($billets_backend as $billet)
		{
		
		?>
		
			<p>

				<a href="index.php?action=billet&amp;page=<?php echo $billet['id'];?>"> Billet n°<?php echo htmlspecialchars($billet['id']); ?> - <?php echo htmlspecialchars($billet['titre']); ?> </a>
				<a href="index.php?action=delB&amp;idBillet=<?php echo htmlspecialchars($billet['id']);?>"> <img src="screen/delete_icon.png" alt="supprimer" title="Supprimer le billet" /> </a>
				<a href="index.php?action=backendU&amp;idBillet=<?php echo htmlspecialchars($billet['id']);?>"> <img src="screen/update_icon.png" alt="modifier" title="Modifier le billet" /> </a>
			
			</p>
	
		<?php
	
		} ?>
	
	</section>



	<!--  Listing des commentaires signalées   -->

	<section class="backend">
		<h2> Liste des commentaires signalés : </h2>
	
		<?php

			foreach($commentaires_signaler as $commentaire)
			{
			?>
		
				<p>

					<span class="Signaler"><?php echo htmlspecialchars($commentaire['auteur']); ?> </span> : <?php echo htmlspecialchars($commentaire['contenu']); ?> - envoyé le <?php echo htmlspecialchars($commentaire['date']); ?>
					<a href="index.php?action=delC&amp;idCom=<?php echo $commentaire['id'];?>"> <img src="screen/delete_icon.png" alt="supprimer" title="Supprimer le commentaire" /> </a>
				</p>
			
			<?php

			}

			?>

	
	</section>


	<!--  Listing des autres commentaires   -->

	<section class="backend">
		<h2> Autre commentaires : </h2>
	
		<?php

			foreach($commentaires_all as $commentaire)
			{
			?>
		
				<p>

					<span class="nonSignaler"><?php echo htmlspecialchars($commentaire['auteur']); ?> </span> : <?php echo htmlspecialchars($commentaire['contenu']); ?> - envoyé le <?php echo htmlspecialchars($commentaire['date']); ?>
					<a href="index.php?action=delC&amp;idCom=<?php echo htmlspecialchars($commentaire['id']);?>"> <img src="screen/delete_icon.png" alt="supprimer" title="Supprimer le commentaire" /> </a>
				</p>
			
			<?php

			}

			?>
	
	</section>

	<?php include('Vue/footer.php');

?>
