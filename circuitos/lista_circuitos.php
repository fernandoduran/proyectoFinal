<?php

	function datosCircuito($connect){
		$circuit = new Circuit();

		$resultado = "";
		$connect -> query("SET NAMES 'utf8'");
		$sql = $connect -> query('SELECT nom, pais FROM circuit ORDER BY pais');

		if($sql -> num_rows > 0){

			while($row = $sql -> fetch_assoc()){

				$circuit -> _setNom($row['nom']);
				$circuit -> _setPais($row['pais']);

				$resultado .= '"'.$circuit -> getNom().' ('.$circuit -> getPais().')",';
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
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class=jumbotron>
				<h2 class="text-center">
					Circuitos de Fórmula 1
					<br><small>Actuales y míticos</small>
				</h2>
			</div>
			<div class="alert alert-warning" role="alert">
				 <h1><strong>Muy pronto!</strong> Tendrás los resultados.</h1>
				</div>
		</div>
	</div>
</div>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<? //echo listaCircuitos($connect, $_POST['fCircuito'])?>
