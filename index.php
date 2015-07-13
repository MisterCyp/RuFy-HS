<?php

if(isset($_SERVER['PHP_AUTH_USER']))
{
	
	$nb_films_par_page = 12 ;
	$tri='limit='.$nb_films_par_page ;
	$accueil = true;
	
		if(isset($_GET['search']) && $_GET['search']=='on')
		{
			$accueil = false;
			
			if(isset($_GET['quality']))
			{
				$qualities = explode("-", $_GET['quality']);
				foreach($qualities as $quality)
				{
					$tri .='&quality='.strip_tags($quality);
				}
			}
			
			if(isset($_GET['minimum_rating']))
			{
					$tri .='&minimum_rating='.strip_tags($_GET['minimum_rating']);
			}
			
			if(isset($_GET['query_term']))
			{
					$tri .='&query_term='.strip_tags($_GET['query_term']);
			}
			
			if(isset($_GET['genre']))
			{
					$genres = explode("_", $_GET['genre']);
						foreach($genres as $genre)
						{
							$tri .='&genre='.strip_tags($genre);
						}
			}
			
			if(isset($_GET['sort_by']))
			{
					$tri .='&sort_by='.strip_tags($_GET['sort_by']);
			}
			if(isset($_GET['order_by']))
			{
					$tri .='&order_by='.strip_tags($_GET['order_by']);
			}
						
		}
		$numero_page = '1';
		if(isset($_GET['page']) && $_GET['page']>0)
		{
			$numero_page = strip_tags($_GET['page']) ;
		}
		
	 try{
		 
			if(!@$xml=simplexml_load_file('https://yts.to/api/v2/list_movies.xml?'.$tri.'&page='.$numero_page)){
				throw new Exception('Flux introuvable');
			}
			
			if(empty($xml->status) ) throw new Exception('Flux invalide');	 
			
			@$avenir=simplexml_load_file('https://yts.to/api/v2/list_upcoming.xml');	// telecharge les films à venir
			
			$nb_pages_total = ceil($xml->data->movie_count/$nb_films_par_page) ;
			
			 include('vue.php');
			
		
		
		}
		catch(Exception $e){
			//include('erreur.php')
			echo $e->getMessage() ;
		}
		
}
else
{
	//include('non_user.php');
	echo "Vous n'êtes pas identifié ! " ;
}
