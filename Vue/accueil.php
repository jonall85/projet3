<?php 

include('Vue/header.php'); ?>

<section class="indexBody">

	<aside class="biography">
		
		<div class="titreBio">
			<h3> Jean Forteroche </h3>
			<p> <img src="screen/jean_forteroche.jpg" alt="photo de Jean" /> </p>
			
		</div>
	
		<div>	
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis accumsan nisi eget bibendum porta. 
			Cras nulla ligula, placerat eget orci ac, vulputate venenatis nulla. Nunc sem dui, aliquet maximus 
			elementum at, lacinia id massa. Etiam at varius magna. Nunc varius, erat eu porttitor cursus, libero 
			orci gravida sapien, vitae dictum justo lectus ac eros. 
			</p>
		</div>
		
	</aside>
	
	<article class="last_chapter">
	
	<h2> Dernier billet mis en ligne : </h2>
	
	<div>
	
	<?php foreach($lastB as $billet)

		{
	?>
	 
		<h3>

			<?php echo htmlspecialchars($billet['titre']); ?>

		</h3>

    

		<p>

			<?php echo $billet['contenu']; ?>

			<br />

			Créer le : <?php echo htmlspecialchars($billet['date']); ?>
		</p>
	
	
	<?php } ?>
	
	</div>
	</article>

</section>

<?php include('Vue/footer.php'); ?>
