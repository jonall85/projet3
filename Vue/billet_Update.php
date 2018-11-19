<?php

include('Vue/header-backend.php');

	foreach($getUpdateBillets as $billet)
	{
	?>
	
	<section class="backend">
	
		<form method="post" action="index.php?action=updateB">
			<input type="hidden" name="id_B" id="id_B" value=<?php echo $billet['id']; ?> ></input>
			<h2> Titre du billet : </h2>
			<p><input type="text" name="titre_billet" id="titre_billet" value=<?php echo $billet['titre']; ?> size="80"></input></p>
			<h2> Contenu du billet : </h2>
			<textarea name="contenu_billet" id="contenu_billet" value=<?php echo $billet['contenu']; ?> ></textarea>
			<p><input type="submit" value="Mettre à jour" /></p>
		</form>
	</section>
	
	<?php

		}

include('Vue/footer.php');
	?>
