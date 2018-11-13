<?php include('Vue/header.php'); ?>

<section class="news">

<h2> Liste des billets publié par Jean Forteroche : </h2>

<?php

	foreach($billets as $billet)
	{
	?>

		<p>

			 <a href="index.php?action=billet&amp;page=<?php echo htmlspecialchars($billet['id']);?>"> Billet n° <?php echo htmlspecialchars($billet['id']);?> - <?php echo htmlspecialchars($billet['titre']);?> </a>

			<br />


		</p>

		
	<?php

	}

	?>
	
</section>

<?php include('Vue/footer.php'); ?>
