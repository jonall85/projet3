<?php include('Vue/header.php'); ?>

	<section class="backend">
	
		<p> Vous devez vous connectez pour accéder à cette page </p><br />
	
		<form method="post" action="index.php?action=setCo">
			<p> Pseudo : <input type="text" name="pseudo_connexion" id="pseudo_connexion" required></input></p>
			<p> Mot de passe : <input type="password" name="pass_connexion" id="pass_connexion" required></input></p>
			<p><input type="submit" value="Connexion" /></p>
		</form>
	</section>

	<?php include('Vue/footer.php'); ?>
