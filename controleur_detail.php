<?php
if(isset($_GET['movie_id']) && $_GET['movie_id']>0)
{

	try{
				if(!@$xml=simplexml_load_file('https://yts.to/api/v2/movie_details.xml?movie_id='.$_GET['movie_id'].'&with_images=true')){
					throw new Exception('Flux introuvable');
				}
				@$suggest=simplexml_load_file('https://yts.to/api/v2/movie_suggestions.xml?movie_id='.$_GET['movie_id']);
				
				if(empty($xml->data->title) ) throw new Exception('Flux invalide');
				
					 
				include('detail.php');
				
			
			
			}
			catch(Exception $e){
				//include('erreur.php')
				echo $e->getMessage() ;
			}
}
else 
	echo "l'id du film n'est pas valide ";