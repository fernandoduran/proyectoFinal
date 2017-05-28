<?php
	$connect -> query("SET NAMES 'utf8'");
	if(isset($_POST['fInsertaCarrera'])){
		$connect -> query("SET NAMES 'utf8'");
		$query = $connect -> query('SELECT nom_carrera, data_carrera, circuit_id FROM carrera WHERE nom_carrera = "'.$_POST['fNombreCarrera'].'" AND data_carrera = "'.d($_POST['fFecha']).'" AND circuit_id ='.$_POST['fCircuito']);
		
		$row = $query -> fetch_array();

		
		if(d3($row['data_carrera']) == $_POST['fFecha'] && $row['nom_carrera'] == $_POST['fNombreCarrera'] && $row['circuit_id'] == $_POST['fCircuito']){
			echo '
			<div class="alert alert-warning" role="alert">
				 <strong>Oops!</strong> Ya existe esta carrera.
				</div>';
			?>
			<script type="text/javascript">
				setTimeout(function(){
					parent.location.assign('../super/index.php?sec=lista_carreras');
					parent.$.fancybox.close();
				}, 1500);
			</script>
			<?php
		} else {

			$sql = 'INSERT INTO carrera(
						nom_carrera,
						data_carrera,
						circuit_id
					) VALUES (
						"'.$_POST['fNombreCarrera'].'",
						"'.d($_POST['fFecha']).'",
						'.$_POST['fCircuito'].'
					)';

			$result = $connect -> query($sql);
			if(!$result){
				echo '
				<div class="alert alert-danger" role="alert">
				  <strong>Error!</strong> Fallo al introducir la carrera: <br><br>'.$connect -> error.'<br><br>'.$sql.'
				</div>';
			} else {
				echo '
				<div class="alert alert-success" role="alert">
				  <strong>Genial!</strong> Carrera insertada correctamente.
				</div>';
				?>
				<script type="text/javascript">
					setTimeout(function(){
						parent.location.assign('../super/index.php?sec=lista_carreras');
						parent.$.fancybox.close();
					}, 1500);
				</script>
				<?php
			}
		}
	} else {

		switch ($_GET['sec']) {
			case 'lista_circuitos':
				include 'lista_circuitos.php';
				break;
			case 'lista_campeonatos':
				include 'lista_campeonatos.php';
				break;
			case 'nueva_clasif':
				include 'nueva_clasificacion.php';
				break;
			case 'lista_carreras':
				include 'carreras.php';
				break;
			case 'nueva_carrera':
				include 'nueva_carrera.php';
				break;
		}
	}
?>