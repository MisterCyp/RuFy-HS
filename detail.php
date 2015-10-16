
            
          <!-- le titre de la popup --> 
          <div class="modal-header"> 
          <h4 class="modal-title" id="titrePopUp">Détails du film : <?php echo $xml->data->title ;?>
          <!-- la croix de fermeture de la popup --> 
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> </h4>
          </div> 
          
          <!-- le contenu HTML de la popup --> 
          <div class="modal-body"> 
          <p class="lead"><img src="<?php echo $xml->data->images->medium_cover_image;?>" class="pull-left affiche-detail" /> <?php echo $xml->data->title ;?> </p> 
          <p><?php echo $xml->data->year;?><br/></p>
		  <?php foreach($xml->data->genres->genre as $genre) 
				  {
					  echo $genre.' ';
				  }
		  ?>
		  
		  <p><img src="images/imdb-logo.png" alt="Note IMDB" > <?php echo $xml->data->rating;?> <span class="glyphicon glyphicon-star"></span></p>
		  
		  <p><img src="images/rt-upright.png" alt="Note Rotten" > <?php echo $xml->data->rt_audience_score;?> %</p>
		  
		  
		  <p><?php echo $xml->data->description_full;?></p> 
          </div>
          
          <!-- le pied de page de la popup --> 
          <div class="modal-footer"> 
          <p>
		   
		   <?php foreach($xml->data->torrents->torrent as $torrent) 
				  { ?>
					<a value="<?php echo $torrent->url ?>" type="button" class="btn download pull-left"><span class="glyphicon glyphicon-download-alt"></span> <?php echo $torrent->quality ?></a>
				  <?php }
		  ?>
		  </p>
          </div> 
		  
		  <!-- Debut SUGGESTION -->
 <?php if(0) //$suggest->data->movie_suggestions_count>0
		  { ?>
	 
<div class="panel panel-primary">
	<div class="panel-heading"><span class="glyphicon glyphicon-time"></span> Films similaires</div>
	<div class="panel-body">
	
			<div class="row" id="top-movies">
			 <?php 		$i = 0;
					$nb_affichage = 4;
	  
		foreach($suggest->data->movie_suggestions->movie_suggestion as $movie){ ?>
				
				<div class="col-md-3 col-xs-6 pull-down"> 
							
									<img src="<?php echo $movie->medium_cover_image ?>" alt="...">
									<div class="caption">
										<h4><?php echo $movie->title ?></h4>
									</div>
							
				</div>
				
				<?php
			if(++$i>=$nb_affichage)
                break;
			}
			?>
			
		</div>
</div>	
</div>			  
		  <?php } ?>
		  
		  <!-- FIN SUGGESTION -->

		  <script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<script src="bootstrap/js/telechargement.js"> </script>