<div class="panel panel-primary" id="bloc-recherche" style="display:none;">
	<div class="panel-heading"><span class="glyphicon glyphicon-film"></span> Recherche par critères</div>
	<div class="panel-body">
			
			<form action="recherche.php" method="post">
			<div class="form-group">
			<div class="row">
				<div class="col-lg-12"  >
				<label class="col-sm-2 control-label">Qualité </label>
						 <span class="button-checkbox">
						<button type="button" class="btn" data-color="primary">720p</button>
						<input type="checkbox" name="quality[]" value="720p" class="hidden"  />
					</span>
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="primary">1080p</button>
						<input type="checkbox" name="quality[]" value="1080p" class="hidden"  />
					</span>
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="primary">3D</button>
						<input type="checkbox" name="quality[]" value="3D" class="hidden"  />
					</span>
				</div>
			</div>
			</div>
			<div class="form-group">
				<!-- Debut NOTE MINIMUM -->
				<div class="row">
							<div class="col-lg-12">
							<label class="col-sm-2 control-label ">Note minimum </label>
						<div class="btn-group radio" data-toggle="buttons" >
						<label class="btn btn-default active">
								<input type="radio" id="r1" name="note" value="0" checked /> 0
							</label> 
							<label class="btn btn-default">
								<input type="radio" id="r1" name="note" value="1"  /> 1
							</label> 
							<label class="btn btn-default">
								<input type="radio" id="r2" name="note" value="2"  /> 2
							</label> 
							<label class="btn btn-default">
								<input type="radio" id="r3" name="note" value="3"  /> 3
							</label> 
							<label class="btn btn-default">
								<input type="radio" id="r4" name="note" value="4"  /> 4
							</label> 
							<label class="btn btn-default ">
								<input type="radio" id="r5"  name="note" value="5" /> 5
							</label>
							<label class="btn btn-default">
								<input type="radio" id="r6" name="note" value="6"  /> 6
							</label> 
							<label class="btn btn-default">
								<input type="radio" id="r7" name="note" value="7" /> 7
							</label> 
							<label class="btn btn-default">
								<input type="radio" id="r8" name="note" value="8"  /> 8
							</label> 
							<label class="btn btn-default">
								<input type="radio" id="r9" name="note" value="9"  /> 9
							</label> 
							
						</div>
					</div>
				</div>
				</div>
				<!-- Fin NOTE MINIMUM -->
				<!-- Debut GENRE -->
				<div class="form-group">
				<div class="row">
				<div class="col-lg-12"  >
				<label class="col-sm-2 control-label">Genre </label>
						 <span class="button-checkbox">
						<button type="button" class="btn" data-color="primary">Action</button>
						<input type="checkbox" class="hidden"  name="genre[]" value="action" checked />
					</span>
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="primary">Animation</button>
						<input type="checkbox" class="hidden" name="genre[]" value="animation" checked />
					</span>
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="primary">Comédie</button>
						<input type="checkbox" class="hidden" name="genre[]" value="comedy" checked />
					</span>
							 <span class="button-checkbox">
						<button type="button" class="btn" data-color="primary">Documentaire</button>
						<input type="checkbox" class="hidden" name="genre[]" value="documentary" checked />
					</span>
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="primary">Horreur</button>
						<input type="checkbox" class="hidden" name="genre[]" value="horror" checked />
					</span>
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="primary">Science-Fiction</button>
						<input type="checkbox" class="hidden" name="genre[]" value="sci-fi" checked />
					</span>
							 <span class="button-checkbox">
						<button type="button" class="btn" data-color="primary">Thriller</button>
						<input type="checkbox" class="hidden" name="genre[]" value="thriller" checked />
					</span>
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="primary">Western</button>
						<input type="checkbox" class="hidden" name="genre[]" value="western" checked />
					</span>
				</div>
			</div>
			</div>	
				<!-- FIN GENRE -->
				
				<!-- Debut TRIER PAR -->
				
				<div class="form-group">
				<div class="row">
							<div class="col-lg-12">
							<label class="col-sm-2 control-label ">Trier par </label>
						<div class="btn-group radio" data-toggle="buttons">
						<label class="btn btn-default ">
								<input type="radio" name="tri"  value="title"  /> Nom
							</label> 
							<label class="btn btn-default">
								<input type="radio" name="tri" value="year"  /> Année
							</label> 
							<label class="btn btn-default">
								<input type="radio"  name="tri"value="rating"  /> Note
							</label> 
							<label class="btn btn-default">
								<input type="radio" name="tri" value="peers"  /> Peers
							</label> 
							<label class="btn btn-default">
								<input type="radio" name="tri" value="seeds"  /> Seeders
							</label> 
							<label class="btn btn-default ">
								<input type="radio"  name="tri" value="download_count" /> Nombre de Download
							</label>
							<label class="btn btn-default">
								<input type="radio" name="tri" value="like_count"  /> Nombre de Like
							</label> 
							<label class="btn btn-default active">
								<input type="radio" name="tri" value="date_added" checked /> Date d'ajout
							</label> 
							
						</div>
					</div>
				</div>
				</div>
				<!-- FIN TRIER PAR -->
				
				<div class="form-group">
			<div class="row">
				<div class="col-lg-12"  >
				<label class="col-sm-2 control-label">Mots clés </label>
					<input type="text" name="champs" id="champs" placeholder="Ex : film/acteur/realisateur" size="40" maxlength="80" />
					<button type="submit" class="btn btn-default" id="btn_recherche">Rechercher</button>
				</div>
				
			</div>
			</div>
				
			</form>
			
	</div>
	</div>