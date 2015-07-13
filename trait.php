<?php 


if(isset($_SERVER['PHP_AUTH_USER']))
{ 
			if(isset($_GET['url']) && strrpos ($_GET['url'],'.torrent'))
				{	
					$url = $_GET['url'] ;
					
							$torrent = file_get_contents ( $url ) ;
							$nom = get_nom_torrent( $url );
							
							$chemin = '/home/'.$_SERVER['PHP_AUTH_USER'].'/watch/'.$nom ;
							
							@$ajout = file_put_contents ($chemin,$torrent);
							 
							 if($ajout)
							 {
								 echo "succes";
								 
							 }else echo 'echec' ;			
				}
			else
				{
					echo "incorrecte";
				}
				
			
}else echo 'deconnecte';  
							
function get_nom_torrent($url)
{
		 $timeout = 10; 

		$ch = curl_init($url); 

		curl_setopt($ch, CURLOPT_FRESH_CONNECT, true); 
		curl_setopt($ch, CURLOPT_TIMEOUT, $timeout); 
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 

		if (preg_match('`^https://`i', $url)) 
		{ 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
		} 

		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_NOBODY, true); 

		// Inclure les headers HTTP de retour dans le corps de la réponse 
		curl_setopt($ch, CURLOPT_HEADER, true); 

		$headers = curl_exec($ch); 
		curl_close($ch); 

		$nom = stristr ($headers, 'filename="');
		
		preg_match_all('#"(.+)"#',$nom,$out, PREG_PATTERN_ORDER);
		
		return $out[1][0];
}
		
?>

		