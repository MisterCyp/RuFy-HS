<?php if(isset($nb_pages_total) && $nb_pages_total>1)
{ 
$lien = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?search=on&'.$tri ;
?>
<ul class="pagination">
    <li><a href="<?php echo $lien ; ?>">&laquo;</a></li>
	<?php 
	$i = $numero_page - 3 ;
	if($i<1) $i = 1 ;
	$pagemax = $i + 5 ;
	
	for ($i; $i <= $nb_pages_total && $i <=$pagemax; $i++) {
	?>
    <li <?php if($i==$numero_page) echo 'class="active"' ?> ><a href="<?php echo $lien.'&page='.$i ; ?>"> <?php echo $i ?> </a></li>
	<?php } 
	if($pagemax+2<$nb_pages_total) 
		{
			echo '<li><a>...</a></li>';
			echo '<li><a href="'.$lien.'&page='.$nb_pages_total.'">'.$nb_pages_total.'</a></li>';
		}
		else if($pagemax + 1 == $nb_pages_total)
		{
			echo '<li><a href="'.$lien.'&page='.$nb_pages_total.'">'.$nb_pages_total.'</a></li>';
		}
		else if($pagemax + 2 == $nb_pages_total)
		{
			$avant_derniere_page = $nb_pages_total - 1 ;
			echo '<li><a href="'.$lien.'&page='.$avant_derniere_page .'">'.$avant_derniere_page.'</a></li>';
			echo '<li><a href="'.$lien.'&page='.$nb_pages_total.'">'.$nb_pages_total.'</a></li>';
		}
		
	?>
	
	 <li><a href="<?php echo $lien.'&page='.$nb_pages_total ?>" >&raquo;</a></li>
</ul>


	
<?php } ?>

