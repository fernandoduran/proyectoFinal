<?php echo titular('Carreras');?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<form action="" method="POST">
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
						</div>
						<div class="form-group">
							<h4><span for="fAny" class="label label-primary">Carrera</span></h4>
							<select id="fAny" name="fCarrera" class="form-control">
								<option selected value="">Todas</option>
								<?php

									$carrera = new Carrera();
									$connect -> query("SET NAMES 'utf8'");
									$sql = $connect -> query('SELECT id, nom_carrera FROM  carrera');

									while ($row = $sql -> fetch_array()) {
										
										$carrera -> _setId($row['id']);
										$carrera -> _setnomCarrera($row['nom_carrera']);

										echo "<option value='".$carrera -> getId()."'>".$carrera -> getNomCarrera()."</option>";

									}
								?>
							</select>
						</div>
						<input type="submit" name="fBusca" value="Buscar" class="btn btn-primary"><br>
					</form>
					<br>
					<a class="various" data-fancybox-type="iframe" href="../super/index2.php?sec=nueva_carrera"><span class="glyphicon glyphicon-plus"></span>Añade carrera</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	if(isset($_POST['fBusca'])){

		echo listaCarreras($connect, $_POST['fCarrera'], $_POST['fAny']);
	}
?>

