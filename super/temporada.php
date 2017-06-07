<?echo titular('Gestión de temporadas')?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
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
						<input type="submit" name="fBusca" value="Buscar" class="btn btn-primary"><br>
					</form>
				</div>
			</div>
			<?
				if(isset($_POST['fBusca'])){
				
					echo listaTemporadas($connect, $_POST['fAny']);
				}
			?>
		</div>
	</div>
</div>