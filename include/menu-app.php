<div class="navbar navbar-default menu-app">
			  <ul class="nav navbar-nav">
				<li <?php if($accueil) echo 'class="active"' ;?> > <a href="index.php"><span class="glyphicon glyphicon-screenshot"></span> Derniers Ajouts</a> </li>
				<li <?php if($tri=='&sort_by=download_count') echo 'class="active"' ;?> > <a href="index.php?search=on&sort_by=download_count"><span class="glyphicon glyphicon-star"></span> Populaires</a> </li>
				<li><a id="recherche" class="btn-group" data-toggle="buttons" style="padding: 10px;"><label class="btn"><input type="checkbox" class="hidden"><span class="glyphicon glyphicon-search"></span> Recherche Précise</label></a></li>
			  </ul>
		
			  
			  <form class="navbar-form navbar-right inline-form" method="post" action="recherche.php">
			 
		  <div class="form-group" >
			<input type="search" class="input-sm form-control" size="35" placeholder="Recherche par film/acteur/realisateur ..." name="champs">
			<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> Chercher</button>
		  </div>
    </form>
		</div>