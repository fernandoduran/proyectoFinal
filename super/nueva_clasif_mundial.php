<? 
	echo titular('Nueva clasificación de mundial');
	$connect -> query("SET NAMES 'utf8'");
?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<form id="nuevaClasif" action="" method="POST" class="form-inline">
				<div class="row">
					<div class="form-group">
						<h4><span for="fAny" class="label label-primary">Año</span></h4>
						<select id="fAny" name="fAny" class="form-control">
							<?php

								$temp = new Temporada();

								$sql = $connect -> query('SELECT any FROM temporada ORDER BY any DESC');

								while ($row = $sql -> fetch_array()) {
									
									$temp -> _setAny($row['any']);

									echo "<option value='".$temp -> getAny()."'>".$temp -> getAny()."</option>";

								}
							?>
						</select>
						
						<h4><span class="label label-primary">Piloto</span></h4>
						<select id="fPiloto" name="fPiloto" class="form-control">
							<?php

								$pilot = new Piloto();

								$sql = $connect -> query('SELECT id, nom FROM pilot ORDER BY nom ASC');

								while ($row = $sql -> fetch_array()) {
									
									$pilot -> _setId($row['id']);
									$pilot -> _setNom($row['nom']);

									echo "<option value='".$pilot -> getId()."'>".$pilot -> getNom()."</option>";

								}
							?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<h4><span class="label label-info">Australia</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fAU" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">China</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fCH" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Bahréin</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fBA" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Rusia</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fRU" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">España</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fES" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Mónaco</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fMO" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Canadá</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fCA" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Valencia</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fVL" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Azerbaijan</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fAZ" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Austria</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fAT" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Gran Bretaña</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fGR" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Hungría</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fHU" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<h4><span class="label label-info">Alemania</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fAL" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Bégica</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fBE" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Italia</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fIT" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Singapur</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fSG" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Malasia</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fMA" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Corea</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fKO" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Japón</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fJA" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">India</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fND" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">EEUU</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fUSA" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">México</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fME" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Brasil</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fBR" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-info">Abu Dhabi</span></h4>
						
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fAB" class="form-control">
							<option selected value="NULL"></option>
							<option>25</option>
							<option>18</option>
							<option>15</option>
							<option>12</option>
							<option>10</option>
							<option>8</option>
							<option>6</option>
							<option>4</option>
							<option>2</option>
							<option>1</option>
							<option>0</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<br>
					<input type="submit" name="fInsertaClasifMundial" value="Inserta" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>