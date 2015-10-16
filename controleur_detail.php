<?php
if(isset($_GET['title']))
{
				require_once('allocine-api/PHP/allocine.class.php');

				define('ALLOCINE_PARTNER_KEY', '100043982026');
				define('ALLOCINE_SECRET_KEY', '29d185d98c984a359e6e6f26a0474269');

				$allocine = new Allocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);
				$result = $allocine->search(strval($_GET['title']));
				
				$urls = explode(" ", $_GET['urls']);
				$qualities = explode(" ", $_GET['qualities']);

				$result = json_decode($result,true);
								
			
				//echo " Resultats : ".$result['feed']['results'][0]['$'];
				
				$code = 0;
				if($result['feed']['results'][0]['$'] > 0)
				{					
					foreach($result['feed']['movie'] as $movie)
					{
						if(isset($movie['originalTitle']) && $movie['originalTitle'] == $_GET['title'])
						{
							$code = $movie['code'];
							break;
						}
						
						if($movie['productionYear'] == $_GET['year'])
						{
							$code = $movie['code'];
							break;
						}
					}
					
				}
				
				if($code > 0)
				{
					$result = $allocine->get($code);
					$result = json_decode($result,true);
					
					$title = $_GET['title'];
					$year = $_GET['year'] ;
					
					//echo $result;
					//echo var_dump($result['movie']);
					include('detail_allocine.php');
					
				}
				else
				{
					try
					{
							if(!@$xml=simplexml_load_file('https://yts.to/api/v2/movie_details.xml?movie_id='.$_GET['movie_id'].'&with_images=true'))//movie_id='.$_GET['movie_id'].'&with_images=true'
							{ 
								throw new Exception("L'API YIFY ne répond pas.");
							}
				
							if(empty($xml->data->title) ) throw new Exception('Flux invalide');
							
							include('detail.php');
				
					}
					catch(Exception $e)
					{
							//include('erreur.php')
							echo $e->getMessage() ;
					}
					
					
					
				}
			
			
}
else 
	echo "l'id du film n'est pas valide ";