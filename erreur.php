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
	
	<div class="row resultat">
	
	<?php echo $e->getMessage() ; ?>
	
	</div>


  </body>
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
</html>
