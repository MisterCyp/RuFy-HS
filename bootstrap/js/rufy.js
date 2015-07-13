/* 
###############################
## BLOC RECHERCHE
################################
*/

/* 
###############################
## AFFICHER CACHER BLOC RECHERCHE
################################
*/

			$(function (){
							  $('#recherche').click(function () {
								  $checkbox = $(this).children('label').children('input:checkbox') ;
							 if($checkbox.is(':checked'))
							 {
								$('#bloc-recherche').hide(500);
								//$checkbox.removeAttr('checked');
								$checkbox.prop('checked',false);
							 }
							 else
							 {
								 $('#bloc-recherche').show(500);
								 $checkbox.prop('checked',true);
							 }	
						
						})
					});
					
					/* 
###############################
## FIN AFFICHER CACHER BLOC RECHERCHE
################################
*/

/* 
###############################
## CHECKBOX QUALITY
################################
*/

$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
				
				$checkbox.prop('checked',!$checkbox.is(':checked'));
				
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});

/* 
###############################
## FIN CHECKBOX QUALITY
################################
*/

/* 
###############################
## NOTE MINI
################################
*/
$('.radio label').click(function() {
	$widget = $(this);
	
		//$widget.children('input:radio').removeAttr('checked');
		//$widget.removeClass('active').siblings().removeClass('active').children('input:radio').removeAttr('checked');
		$widget.children('input:radio').attr('checked','checked');
		$widget.addClass('active').siblings().removeClass('active').children('input:radio').removeAttr('checked');
	
    
	
});

/* 
###############################
## FIN NOTE MINI
################################
*/
/* 
###############################
## FIN BLOC RECHERCHE
################################
*/

/* 
###############################
## AFFICHAGE POPUP DETAIL FILM
################################
*/
$("body").on("hidden.bs.modal", ".modal", function () {
          $(this).removeData("bs.modal");

      });
	 
	  
	  $(function (){
					$('.detail-movie').each(function () {
							  var $button = $(this);
							  var $id = $button.attr('id');
							  							  
							  $button.click(function() { 

							  var $page = "controleur_detail.php?movie_id="+$id;
							  							  
								$("#infos").modal({ remote: $page } ,"show");
								});
							  
					});
				});
				
/* 
###############################
## FIN AFFICHAGE POPUP DETAIL FILM
################################
*/

