
            
          <!-- le titre de la popup --> 
          <div class="modal-header"> 
          <h4 class="modal-title" id="titrePopUp">Détails du film : <?php echo $title ;?>
          <!-- la croix de fermeture de la popup --> 
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> </h4>
          </div> 
          
          <!-- le contenu HTML de la popup --> 
          <div class="modal-body"> 
          <p class="lead"><img src="<?php echo $result['movie']['poster']['href'];?>" class="pull-left affiche-detail" /> 
			  <h2><?php if(isset($result['movie']["title"])) 
						  {
							  echo $result['movie']["title"] ;
						  }
						  else
						  {
							echo $title; 
						  }
				 ?>
			  </h2> 
		  </p> 
          
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
		  
		  <p>Presse :  <?php for($i=0 ; $i < 5 ; $i++ )
							  {
								if($i < round(number_format($result['movie']['statistics']['pressRating'],1),0,PHP_ROUND_HALF_DOWN))
								{
									echo   '<span class="fa fa-star"></span>' ;
								}
								else
								{
									if( 0.3 < (number_format($result['movie']['statistics']['pressRating'],1) - $i ) && (number_format($result['movie']['statistics']['pressRating'],1) - $i) <0.7 )
									{
										echo'<span class="fa fa-star-half-o "></span>' ;
									}
									else{
										echo   '<span class="fa fa-star-o"></span>' ;
									}
								}
							  }
							  echo " ".number_format($result['movie']['statistics']['pressRating'],1);?> <br>
							  
		  Spectateurs : <?php for($i=0 ; $i < 5 ; $i++ )
							  {
								if($i < round(number_format($result['movie']['statistics']['userRating'],1),0,PHP_ROUND_HALF_DOWN))
								{
									echo   '<span class="fa fa-star"></span>' ;
								}
								else
								{
									if( 0.3 < (number_format($result['movie']['statistics']['userRating'],1) - $i ) && (number_format($result['movie']['statistics']['userRating'],1) - $i) <0.7 )
									{
										echo'<span class="fa fa-star-half-o "></span>' ;
									}
									else{
										echo   '<span class="fa fa-star-o"></span>' ;
									}
								}
								
							  }
							  echo " ".number_format($result['movie']['statistics']['userRating'],1);?> <br>
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
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">