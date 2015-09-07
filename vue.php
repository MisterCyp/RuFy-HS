<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <title> RuFy </title>
    <?php include('include/header.html') ?>
  </head>
  <body>
  <!-- Menu TOP liens vers les différentes applications -->
		<?php include('include/menu-top.html') ?>
	<!-- FIN Menu TOP liens vers les différentes applications -->
	
    <div class="container">
	
	
	<!-- Menu de navigation de l'application -->
		<?php include('include/menu-app.php') ?>
	<!-- FIN Menu de navigation de l'application -->
	
	<!-- CATEGORIE RECHERCHE -->
	<?php include('include/bloc-recherche.php') ?>
	
	<!-- FIN CATEGORIE RECHERCHE -->
	
	<!-- Debut TOP MOVIE UPCOMING OU POPULAR -->
<div class="panel panel-primary">
	<div class="panel-heading"><span class="glyphicon glyphicon-time"></span> Films à venir</div>
	<div class="panel-body">
	
			<div class="row" id="top-movies">
			 <?php 		$i = 0;
					$nb_affichage = 4;
	  
		foreach($avenir->data->upcoming_movies->upcoming_movie as $movie){ ?>
				
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
<!-- FIN TOP MOVIE UPCOMING OU POPULAR -->

<div class="modal fade" id="infos" data-backdrop="true">
        <div class="modal-dialog">  
          <div class="modal-content"></div>  
        </div> 
      </div>

      <div class="row resultat">
	  
	  <?php 		$i = 0;
					$nb_affichage = 12;
	  
		foreach($xml->data->movies->movie as $movie){ ?>
		
        <div class="col-md-3 col-sm-4 col-xs-12 pull-down">
		
				<div class="thumbnail">
						  <img src="<?php echo $movie->medium_cover_image ; ?>" alt="...">
						  <div class="caption">
							<p class="film"><?php echo $movie->title ; ?></p>
							<div class="row year-genre-note">
									<p class="col-xs-3 year "><?php echo $movie->year ; ?></p> <p class="col-xs-6 genre"><?php echo $movie->genres->genre ?></p> <p class="col-xs-3 note"><?php echo $movie->rating ; ?></p>
							</div>
							<p><a  value="<?php echo $movie->torrents->torrent->url ?>" type="button" class="btn download"><span class="glyphicon glyphicon-download-alt"></span> <?php echo $movie->torrents->torrent->quality ?></a><button id="<?php echo $movie->id ; ?>" type="button" class="btn btn-primary detail-movie">Détails <span class="glyphicon glyphicon-chevron-right"></span></button> </p>
						  </div>
				</div> 
		
      </div>
			<?php
			if(++$i>=$nb_affichage)
                break;
			}
			?>
    </div>
	<div class="row" style="text-align:center">
	
		<?php include('include/pagination.php') ?>
</div>
		<?php include('include/alertes.html') ?>
  </body>
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<script src="bootstrap/js/rufy.js"> </script>
	<script src="bootstrap/js/telechargement.js"> </script>
	
</html>
