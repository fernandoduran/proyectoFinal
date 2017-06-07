<?
	if($_SESSION['rol'] != 'registrado'){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?
	}
	function datosEscuderia($connect){
		
		$scuderia = new Escuderia();

		$resultado = "";

		$connect -> query("SET NAMES 'utf8'");

		$sql = $connect -> query('SELECT nomEscuderia FROM scuderia');

		if($sql -> num_rows > 0){

			while($row = $sql -> fetch_assoc()){

				$scuderia -> _setNomEscuderia($row['nomEscuderia']);

				$resultado .= '"'.$scuderia -> getNomEscuderia().'",';
			}
		}
		return $resultado;
	}

	$escuderias = datosEscuderia($connect);	
?>
<script type="text/javascript">
	
	$(function(){

		var availableTags = [<?php echo $escuderias?>];

		$('#fNombre').autocomplete({
			source: availableTags
		})

	})
</script>


<div class="container">
	<div class="row">
		<div class="jumbotron">
			<h1>Escuderías actuales e históricas</h1>
		</div>
		<div class="col-lg-8 col-lg-push-1 col-sm-8 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<form action="" method="POST" class="form-inline">
						<div class="row">
							<div class="col-lg-4 col-sm-4 col-xs-12">
								<div class="for-group">
									<h4><span class="label label-info">
										Nombre de la escudería
									</span></h4>
									<input type="text" name="fNombre" id="fNombre">
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 col-xs-12">
								<div class="for-group">
									<h4><span class="label label-info">
										Ver datos del año:
									</span></h4>
									<select name="fAny" class="form-control
									">
										<?php
											$sql = $connect -> query('SELECT any FROM temporada ORDER BY any DESC');

											while ($row = $sql -> fetch_array()) {
												
												//Objeto de clase
												$temp = new Temporada();

												$temp -> _setAny($row['any']);

												echo '<option value='.$temp -> getAny().'>'.$temp -> getAny().'</option>';
											}
										?>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-sm-4 col-xs-12">
								<div class="for-group">
									<button type="submit" name="fBusca" class="btn btn-success">Buscar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<?	
				if(isset($_POST['fBusca'])){

					echo listaEscuderias($connect, $_POST['fAny'], $_POST['fNombre']);
				}
			?>
		</div>
	</div>
</div>