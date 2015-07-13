
            
          <!-- le titre de la popup --> 
          <div class="modal-header"> 
          <h4 class="modal-title" id="titrePopUp">Détails du film : <?php echo $xml->data->title ;?>
          <!-- la croix de fermeture de la popup --> 
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> </h4>
          </div> 
          
          <!-- le contenu HTML de la popup --> 
          <div class="modal-body"> 
          <p class="lead"><img src="<?php echo $xml->data->images->medium_cover_image;?>" class="pull-left affiche-detail" /> <?php echo $xml->data->title ;?> </p> 
          <p><?php echo $xml->data->year;?><br/>
		  <?php foreach($xml->data->genres->genre as $genre) 
				  {
					  echo $genre.' ';
				  }
		  ?>
		  
		  <p><img src="images/imdb-logo.png" alt="Note IMDB" > <?php echo $xml->data->rating;?> <span class="glyphicon glyphicon-star"></span></p>
		  
		  <p><img src="images/rt-upright.png" alt="Note Rotten" > <?php echo $xml->data->rt_audience_score;?> %</p>
		  
		  </p>
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

		  <script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<script src="bootstrap/js/telechargement.js"> </script>