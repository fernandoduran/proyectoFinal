<?php
	$connect -> query("SET NAMES 'utf8'");
	if(isset($_POST['fInsertaCarrera'])){
		
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
	} elseif (isset($_POST['fInsertaClasif'])) {

		$query = $connect -> query('SELECT pilot_id, carrera_id, punts FROM clasificacio WHERE pilot_id ='.$_POST['fPiloto'].' AND carrera_id = '.$_POST['fCircuito'].' AND punts = '.$_POST['fPuntos']);

		if($query -> num_rows > 0){

			echo '
			<div class="alert alert-warning" role="alert">
				 <strong>Oops!</strong> Ya existen estos datos.
				</div>';
			?>
			<script type="text/javascript">
				setTimeout(function(){
					parent.location.assign('../super/index.php?sec=lista_campeonatos');
					parent.$.fancybox.close();
				}, 1500);
			</script>
			<?php
		} else {

			$sql = 'INSERT INTO clasificacio (
						pilot_id,
						carrera_id,
						punts
					) VALUES (
						'.$_POST['fPiloto'].',
						'.$_POST['fCircuito'].',
						'.$_POST['fPuntos'].'
					)';

			$result = $connect -> query($sql);
			if(!$result){
				echo '
				<div class="alert alert-danger" role="alert">
				  <strong>Error!</strong> Fallo al introducir los datos: <br><br>'.$connect -> error.'<br><br>'.$sql.'
				</div>';
			} else {
				echo '
				<div class="alert alert-success" role="alert">
				  <strong>Genial!</strong> Datps introducidos correctamente.
				</div>';
				?>
				<script type="text/javascript">
					setTimeout(function(){
						parent.location.assign('../super/index.php?sec=lista_campeonatos');
						parent.$.fancybox.close();
					}, 1500);
				</script>
				<?php
			}

		}

	} elseif (isset($_POST['fInsertaClasifMundial'])) {
		
		$query = $connect -> query('SELECT temporada_any, pilot_id FROM clasificacionMundial WHERE temporada_any = '.$_POST['fAny'].' AND pilot_id = '.$_POST['fPiloto'].'');
		
		if($query -> num_rows > 0){

			echo '
			<div class="alert alert-warning" role="alert">
				 <strong>Oops!</strong> Ya existen estos datos.
				</div>';
			?>
			<script type="text/javascript">
				setTimeout(function(){
					parent.location.assign('../super/index.php?sec=lista_campeonatos');
					parent.$.fancybox.close();
				}, 1500);
			</script>
			<?php
		} else {

			

			$sql = ' INSERT INTO clasificacionMundial (
						temporada_any,
						pilot_id,
						AU, CH, BA, RU, ES, MO, CA,
						VL, AZ, AT, GR, HU, AL, BE,
						IT, SG, MA, KO, JA, ND, USA,
						ME, BR, AB
					) VALUES (
						'.$_POST['fAny'].', 
						'.$_POST['fPiloto'].',
						'.$_POST['fAU'].', '.$_POST['fCH'].',
						'.$_POST['fBA'].', '.$_POST['fRU'].',
						'.$_POST['fES'].', '.$_POST['fMO'].',
						'.$_POST['fCA'].', '.$_POST['fVL'].',
						'.$_POST['fAZ'].', '.$_POST['fAT'].',
						'.$_POST['fGR'].', '.$_POST['fHU'].',
						'.$_POST['fAL'].', '.$_POST['fBE'].',
						'.$_POST['fIT'].', '.$_POST['fSG'].',
						'.$_POST['fMA'].', '.$_POST['fKO'].',
						'.$_POST['fJA'].', '.$_POST['fND'].',
						'.$_POST['fUSA'].','.$_POST['fME'].',
						'.$_POST['fBR'].', '.$_POST['fAB'].'
					)';
			var_dump($sql);
			var_dump('<br>');
			var_dump('<br>');
			var_dump('<br>');
			var_dump($_POST);
			
			$result = $connect -> query($sql);
			if(!$result){
				echo '
				<div class="alert alert-danger" role="alert">
				  <strong>Error!</strong> Fallo al introducir los datos: <br><br>'.$connect -> error.'<br><br>'.$sql.'
				</div>';
			} else {
				echo '
				<div class="alert alert-success" role="alert">
				  <strong>Genial!</strong> Datps introducidos correctamente.
				</div>';
				?>
				<script type="text/javascript">
					setTimeout(function(){
						parent.location.assign('../super/index.php?sec=lista_campeonatos');
						parent.$.fancybox.close();
					}, 1500);
				</script>
				<?php
			}

		}
	} elseif (isset($_POST['fEliminaPiloto'])) {
		
		

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
			case 'nueva_clasif_mundial':
				include 'nueva_clasif_mundial.php';
				break;
			case 'lista_carreras':
				include 'carreras.php';
				break;
			case 'nueva_carrera':
				include 'nueva_carrera.php';
				break;
			case 'lista_pilotos':
				include '../pilotos/lista_pilotos.php';
				break;
			case 'gest_pilotos':
				include 'gestion_pilotos.php';
				break;
			case 'nuevo':
				include 'anyade_pilotos.php';
				break;
		}
	}
?>