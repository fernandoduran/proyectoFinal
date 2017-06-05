<?php
	$connect -> query("SET NAMES 'utf8'");

	/*
	 *********************************************************
	 ****************** Gestión de carreras ******************
	 *********************************************************
	*/
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

	} elseif (isset($_POST['fModificaCarrera'])) {
		# code...
	} elseif (isset($_POST['fEliminaCarrera'])) {
		# code...

	/*
	 *********************************************************
	 **************** Gestión de clasificación ***************
	 *********************************************************
	*/	
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
				  <strong>Genial!</strong> Datos introducidos correctamente.
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

	/*
	 *********************************************************
	 ******************* Gestión de pilotos ******************
	 *********************************************************
	*/

	} elseif (isset($_POST['fInsertaPiloto'])) {

		$query = $connect -> query('SELECT nom, sigles FROM pilot WHERE nom = "'.$_POST['fNombre'].'" AND sigles = "'.$_POST['fSigles'].'" ');

		if($query -> num_rows > 0){

			echo '
			<div class="alert alert-warning" role="alert">
				 <strong>Oops!</strong> Ya existe piloto.
				</div>';
			?>
			<script type="text/javascript">
				setTimeout(function(){
					parent.location.assign('../super/index.php?sec=lista_pilotos');
					parent.$.fancybox.close();
				}, 1500);
			</script>
			<?php
		} else {

			$sql = 'INSERT INTO pilot 
						(
							nom, sigles, data_naixement,
							pes, altura, punts_totals,
							carreres_totals,
							primera_escuderia, nacionalitat,
							any_debut, total_voltes_rapides,
							victories, titols
						) 
						
						VALUES(
							"'.$_POST['fNombre'].'", 
							"'.$_POST['fSigles'].'",
							"'.d($_POST['fFecha']).'", 
							'.$_POST['fPeso'].',
							'.$_POST['fAltura'].',
							'.$_POST['fPuntosTotales'].',
							'.$_POST['fCarrerasTotales'].',
							"'.$_POST['fEscuderia'].'", 
							"'.$_POST['fNacionalidad'].'",
							"'.$_POST['fDebut'].'",
							'.$_POST['fVueltas'].',
							'.$_POST['fVictorias'].',
							'.$_POST['fTitulos'].' 
						)';

			$result = $connect -> query($sql);
			
			if(!$result){
				echo '
				<div class="alert alert-danger" role="alert">
				  <strong>Error!</strong> Fallo al introducir piloto: <br><br>'.$connect -> error.'<br><br>'.$sql.'
				</div>';
			
			} else {
				echo '
				<div class="alert alert-success" role="alert">
				  <strong>Genial!</strong> Piloto introducido correctamente.
				</div>';
			}
		?>
		<script type="text/javascript">
			setTimeout(function(){
				parent.location.assign('../super/index.php?sec=lista_pilotos');
				parent.$.fancybox.close();
			}, 1500);
		</script>
		<?php

		}

	} elseif (isset($_POST['fModificaPiloto'])) {

		$sql = 'UPDATE pilot SET
					nom = "'.$_POST['fNombre'].'",
					sigles = "'.$_POST['fSigles'].'",
					data_naixement = "'.d($_POST['fFecha']).'",
					pes = '.$_POST['fPeso'].',
					altura = '.$_POST['fAltura'].',
					punts_totals = '.$_POST['fPuntosTotales'].',
					carreres_totals = '.$_POST['fCarrerasTotales'].',
					primera_escuderia = "'.$_POST['fEscuderia'].'",
					nacionalitat = "'.$_POST['fNacionalidad'].'",
					any_debut = "'.$_POST['fDebut'].'",
					total_voltes_rapides = '.$_POST['fVueltas'].',
					victories = '.$_POST['fVictorias'].',
					titols = '.$_POST['fTitulos'].'
				WHERE id = '.$_GET['id'];
		
		$result = $connect -> query($sql);
			
			if(!$result){
				echo '
				<div class="alert alert-danger" role="alert">
				  <strong>Error!</strong> Fallo al modificar piloto: <br><br>'.$connect -> error.'<br><br>'.$sql.'
				</div>';
			
			} else {
				echo '
				<div class="alert alert-success" role="alert">
				  <strong>Genial!</strong> Piloto modificado correctamente.
				</div>';
			}
		?>

		<script type="text/javascript">
			setTimeout(function(){
				parent.location.assign('../super/index.php?sec=lista_pilotos');
				parent.$.fancybox.close();
			}, 1500);
		</script>
		<?php

	} elseif (isset($_POST['fEliminaPiloto'])) {
		
		$sql = 'DELETE FROM pilot WHERE id = '.$_GET['id'];

		$result = $connect -> query($sql);
			
			if(!$result){
				echo '
				<div class="alert alert-danger" role="alert">
				  <strong>Error!</strong> Fallo al eliminar piloto: <br><br>'.$connect -> error.'<br><br>'.$sql.'
				</div>';
			
			} else {
				echo '
				<div class="alert alert-success" role="alert">
				  <strong>Genial!</strong> Piloto eliminado correctamente.
				</div>';
			}
		?>
		<script type="text/javascript">
			setTimeout(function(){
				parent.location.assign('../super/index.php?sec=lista_pilotos');
				parent.$.fancybox.close();
			}, 1500);
		</script>
		<?php

	} elseif (isset($_POST['fCancelar'])) {

		?>

		<script type="text/javascript">
			setTimeout(function(){
				parent.location.assign('../super/index.php?sec=lista_pilotos');
				parent.$.fancybox.close();
			}, 1500);
		</script>
		<?php
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