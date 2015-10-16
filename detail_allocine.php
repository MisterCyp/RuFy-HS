
            
          <!-- le titre de la popup --> 
          <div class="modal-header"> 
          <h4 class="modal-title" id="titrePopUp">Détails du film : <?php echo $_GET['title'] ;?>
          <!-- la croix de fermeture de la popup --> 
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> </h4>
          </div> 
          
          <!-- le contenu HTML de la popup --> 
          <div class="modal-body"> 
          <p class="lead"><img src="<?php echo ;?>" class="pull-left affiche-detail" /> <?php echo $_GET['title'] ;?> </p> 
          <p><?php echo $_GET['year'];?><br/>
		  <?php 
		  /*
		  foreach($xml->data->genres->genre as $genre) 
				  {
					  echo $genre.' ';
				  }
				  */
		  ?>
		  
		  <p><img src="images/imdb-logo.png" alt="Note IMDB" > <?php echo "IMDB";?> <span class="glyphicon glyphicon-star"></span></p>
		  
		  <p><img src="images/rt-upright.png" alt="Note Rotten" > <?php echo "ROTTEN";?> %</p>
		  
		  </p>
		  <p><?php echo $result['movie']['synopsis'];?></p> 
          </div>
          
          <!-- le pied de page de la popup --> 
          <div class="modal-footer"> 
          <p>
		   
				<?php $i = 0;				
				foreach($urls as $url)
				{
					echo "<br>".$url." qualité : ".$qualities[$i] ;
				?>
					<a value="<?php echo $url ?>" type="button" class="btn download pull-left"><span class="glyphicon glyphicon-download-alt"></span> <?php echo $qualities[$i] ?></a>
				<?php	$i += 1;
				}   
				?>
		   
		  </p>
          </div> 
		  
		  <script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<script src="bootstrap/js/telechargement.js"> </script>