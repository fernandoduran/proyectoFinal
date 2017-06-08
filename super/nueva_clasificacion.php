<? 
	echo titular('Nueva clasificación de carrera');

	if($_SESSION['rol'] != 'super'){
		
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?
	}
	
	$connect -> query("SET NAMES 'utf8'");
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<form id="nuevaClasif" action="" method="POST" class="form-inline">
				<div class="row">
					<div class="form-group">
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
						<h4><span class="label label-info">Circuito</span></h4>
						<select id="fCircuito" name="fCircuito" class="form-control">
							<?php

								$carrera = new Carrera();

								$sql = $connect -> query('SELECT id, nom_carrera FROM carrera ORDER BY id ASC');

								while ($row = $sql -> fetch_array()) {
									
									$carrera -> _setId($row['id']);
									$carrera -> _setNomCarrera($row['nom_carrera']);

									echo "<option selected value='".$carrera -> getId()."'>".$carrera -> getNomCarrera()."</option disabled>";

								}
							?>
						</select>
					</div>
					<div class="form-group">
						<h4><span class="label label-default">Puntos</span></h4>
						<select name="fPuntos" class="form-control">
							<option selected value=""></option>
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
						</select>
					</div>
				</div>
				<div class="form-group">
					<br>
					<input type="submit" name="fInsertaClasif" value="Inserta" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>