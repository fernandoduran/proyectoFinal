
<?php
	if($_SESSION['rol'] == 'admin'){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?
	}
	
	function datosCircuito($connect){
		$circuit = new Circuit();

		$resultado = "";
		$connect -> query("SET NAMES 'utf8'");
		$sql = $connect -> query('SELECT pais FROM circuit GROUP BY pais');

		if($sql -> num_rows > 0){

			while($row = $sql -> fetch_assoc()){

				$circuit -> _setPais($row['pais']);

				$resultado .= '"'.$circuit -> getPais().'",';
			}
		}
		return $resultado;
	}

	$circuitos = datosCircuito($connect);	
?>
<script type="text/javascript">
	
	$(function(){

		var availableTags = [<?php echo $circuitos?>];

		$('#fCircuito').autocomplete({
			source: availableTags
		})

	})
</script>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class=jumbotron>
				<h2 class="text-center">
					Circuitos de Fórmula 1
					<br><small>Actuales y míticos</small>
				</h2>
			</div>
		</div>
	</div>
</div>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<form action="" method="POST">
						<div class="form-group">
							<h4><span for="fCircuito" class="label label-primary">Circuito</span></h4>
							<input type="text" name="fCircuito" id="fCircuito" class="form-control">
						</div>
						<input type="submit" name="fBusca" value="Buscar" class="btn btn-primary"><br>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>