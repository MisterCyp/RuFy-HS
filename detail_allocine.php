
            
          <!-- le titre de la popup --> 
          <div class="modal-header"> 
          <h4 class="modal-title" id="titrePopUp">Détails du film : <?php echo $title ;?>
          <!-- la croix de fermeture de la popup --> 
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> </h4>
          </div> 
          
          <!-- le contenu HTML de la popup --> 
          <div class="modal-body"> 
          <p class="lead"><img src="<?php echo $result['movie']['poster']['href'];?>" class="pull-left affiche-detail" /> <h2><?php echo $title ;?></h2> </p> 
          
		  <p>
			  Durée : <?php echo date('h\hi\m\i\n', $result['movie']["runtime"]);?><br/>
			  Année de production : <?php echo $year;?><br/>
			  Pays : <?php echo $result['movie']['nationality'][0]['$'];?><br/>
			  Genre : <?php foreach($result['movie']['genre'] as $genre)
							  {
								  echo $genre['$']." ";
							  }
						?><br/>
			  Réalisateur : <?php echo $result['movie']["castingShort"]["directors"];?><br/>
			  
		  </p>
		  
		  <?php 
		  /*
		  foreach($xml->data->genres->genre as $genre) 
				  {
					  echo $genre.' ';
				  }
				  */
		  ?>
		  <p><h4>Notes Allociné</h4>
		  
		  <p>Presse :  <?php echo number_format($result['movie']['statistics']['pressRating'],1);?> <br>
		  Spectateurs :  <?php echo number_format($result['movie']['statistics']['userRating'],1);?>
		  </p>
		  </p>
		  
		  <p><h4>Synopsis</h4>
		  <?php echo $result['movie']['synopsis'] ;?>
		  </p> 
		  
		  <?php if(isset($result['movie']["trailerEmbed"]))
				{
		  ?>
		  <p>
			  <center>
				  <h4>Bande Annonce</h4>
				  <?php echo $result['movie']["trailerEmbed"] ;?>
			  </center>
		  </p>
		<?php } ?>
          </div>
          
          <!-- le pied de page de la popup --> 
          <div class="modal-footer"> 
          <p>
		   
				<?php 
				$i = 0;				
				foreach($urls as $url)
				{
					//echo "<br>".$url." qualité : ".$qualities[$i] ;
				?>
					<a value="<?php echo $url; ?>" type="button" class="btn download pull-left"><span class="glyphicon glyphicon-download-alt"></span> <?php echo $qualities[$i];?></a>
				<?php	$i += 1;
				} 
				?>
		   
		  </p>
          </div> 
		  
		  <script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<script src="bootstrap/js/telechargement.js"> </script>