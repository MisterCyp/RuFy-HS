/* 
###############################
## LANCER LE TELECHARGEMENT
################################
*/

$(function (){
					$('.download').each(function () {
							  var $button = $(this);
							  var torrent = $button.attr('value');
							  							  
							  $button.click(function() { 
							 							  
							  		 $.ajax({
											   url : 'trait.php', // La ressource ciblée
											   type : 'GET', // Le type de la requête HTTP.
											   data : 'url=' + torrent ,
											   dataType : 'text',
											   
											    success : function(reponse, statut){ // code_html contient le HTML renvoyé
												
															 if($.trim(reponse)=='succes')
															 {
																 
																$(".alert-success").show("slow");
																setTimeout(function(){
																	  $(".alert-success").hide("slow");
																	}, 4000); 
															 }
															 if($.trim(reponse)=='echec')
															 {
																$(".alert-danger").show("slow");
																setTimeout(function(){
																	  $(".alert-danger").hide("slow");
																	}, 4000); 
															 }
															 if($.trim(reponse)=='deconnecte')
															 {
																$(".alert-info").show("slow");
																setTimeout(function(){
																	  $(".alert-info").hide("slow");
																	}, 4000); 
															 }
															
    
 
														},
												error : function(resultat, statut, erreur){

														},
												complete : function(resultat, statut){

														}
											});		
											
								});
							  
					});
				});

/* 
###############################
## FIN LANCER LE TELECHARGEMENT
################################
*/