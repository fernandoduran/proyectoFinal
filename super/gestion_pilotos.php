<?php
	echo titular('Gestion Pilotos');
	
	if($_SESSION['rol'] != 'super'){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?php
	}
	
	$connect -> query("SET NAMES 'utf8'");

	// Objeto de clase
	$piloto = new Piloto();

	$sql = $connect -> query('SELECT * FROM pilot WHERE id = '.$_GET['id']);

	while ($row = $sql -> fetch_array()) {
				
		//Setter tabla pilot
		$piloto -> _setId($row['id']);
		$piloto -> _setNom($row['nom']);
		$piloto -> _setSigles($row['sigles']);
		$piloto -> _setDataNaixement($row['data_naixement']);
		$piloto -> _setPes($row['pes']);
		$piloto -> _setAltura($row['altura']);
		$piloto -> _setPuntsTotals($row['punts_totals']);
		$piloto -> _setCarreresTotals($row['carreres_totals']);
		$piloto -> _setPrimeraEscuderia($row['primera_escuderia']);
		$piloto -> _setNacionalitat($row['nacionalitat']);
		$piloto -> _setAnyDebut($row['any_debut']);
		$piloto -> _setTotalVoltesRapides($row['total_voltes_rapides']);
		$piloto -> _setVictories($row['victories']);
		$piloto -> _setTitols($row['titols']);
	}
?>
<?php if($_GET['acc'] == 'elimina'){?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
		<form action="" method="POST">
				<h4>¿Estás seguro que deseas <span class="text-uppercase bg-warning" style="font-weight: bold;">eliminar</span> este piloto?</h4>
				<input type="submit" name="fEliminaPiloto" value="Eliminar" class="btn btn-danger">
				<input type="submit" name="fCancelar" value="Cancelar" class="btn btn-success">
		</form>
</div>
<?php } else {?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#edita').blur(function(e){

			e.preventDefault();
		}).validate({
			debug: false,
			rules: {
				'fNombre': {
					required: true,
					pattern: /^[a-zA-ZñÑáéíóúàèìòùÁÉÍÓÚÀÈÌÒÙäëïöüäëïöüçÇ\s]{3,}$/
				},
				'Sigles':{
					required: true,
					pattern: /^[A-Z]{3}$/
				},
				'fFecha':{
					required: true
				},
				'fNacionalidad':{
					required: true,
					pattern: /^[a-zA-ZñÑáéíóúàèìòùÁÉÍÓÚÀÈÌÒÙäëïöüäëïöüçÇ\s]{3,}$/
				},
				'fPeso': {
					required: true,
					pattern: /^[5-9]{1}[0-9]{1}$/,
					number: true
				},
				'fAltura':{
					required: true,
					pattern: /^[1]+[0-9]{2}$/,
					digits: true
				},
				'fPuntosTotales':{
					required: true,
					pattern: /^[0-9]{1,5}$/,
					digits: true
				},
				'fCarrerasTotales':{
					required: true,
					pattern: /^[0-9]{1,3}$/,
					digits: true
				},
				'fEscuderia':{
					required: true,
					pattern: /^[a-zA-ZñÑáéíóúàèìòùÁÉÍÓÚÀÈÌÒÙäëïöüäëïöüçÇ\s]{3,}$/
				},
				'fDebut':{
					required: true,
					pattern: /^[1-2]+[0-9]{3}$/,
					digits: true
				},
				'fVueltas':{
					required: true,
					pattern: /^[0-9]{1,3}$/,
					digits: true
				},
				'fVictorias':{
					required: true,
					pattern: /^[0-9]{1,3}$/,
					digits: true
				},
				'fTitulos':{
					required: true,
					pattern: /^[0-9]{1,2}$/,
					digits: true
				}
			},
			messages: {
				'fNombre': {
					required: '<span style="color:red;">Debe introducir datos</span>',
					pattern: '<span style="color:red;">El formato no es correcto</span>'
				},
				'Sigles':{
					required: '<span style="color:red;">Debe introducir datos</span>',
					pattern: '<span style="color:red;">El formato no es correcto, máximo 3 caracteres en mayúsculas</span>'
				},
				'fFecha':{
					required: '<span style="color:red;">Debe introducir datos</span>'
				},
				'fNacionalidad':{
					required: '<span style="color:red;">Debe introducir datos</span>',
					pattern: '<span style="color:red;">El formato no es correcto</span>'
				},
				'fPeso': {
					required: '<span style="color:red;">Debe introducir datos</span>',
					pattern: '<span style="color:red;">Introduce un peso entre 50 y 99 kg</span>',
					number: '<span style="color:red;">Solo se admiten números o números con decimales</span>'
				},
				'fAltura':{
					required: '<span style="color:red;">Debe introducir datos</span>',
					pattern: '<span style="color:red;">Introduce la altura en centimetros entre 100 y 199</span>',
					digits: '<span style="color:red;">Solo se admiten números</span>'
				},
				'fPuntosTotales':{
					required: '<span style="color:red;">Debe introducir datos</span>',
					pattern: '<span style="color:red;">Introduce una cantidad entre 0 y 99999</span>',
					digits: '<span style="color:red;">Solo se admiten números</span>'
				},
				'fCarrerasTotales':{
					required: '<span style="color:red;">Debe introducir datos</span>',
					pattern: '<span style="color:red;">Introduce una cantidad entre 0 y 999</span>',
					digits: '<span style="color:red;">Solo se admiten números</span>'
				},
				'fEscuderia':{
					required: '<span style="color:red;">Debe introducir datos</span>',
					pattern: '<span style="color:red;">El formato no es correcto</span>'
				},
				'fDebut':{
					required: '<span style="color:red;">Debe introducir datos</span>',
					pattern: '<span style="color:red;">El formato no es correcto, debe ser un año entre 1000 y 2999</span>',
					digits: '<span style="color:red;">Solo se admiten números</span>'
				},
				'fVueltas':{
					required: '<span style="color:red;">Debe introducir datos',
					pattern: '<span style="color:red;">Introduce una cantidad entre 0 y 999',
					digits: '<span style="color:red;">Solo se admiten números</span>'
				},
				'fVictorias':{
					required: '<span style="color:red;">Debe introducir datos</span>',
					pattern: '<span style="color:red;">Introduce una cantidad entre 0 y 999</span>',
					digits: '<span style="color:red;">Solo se admiten números</span>'
				},
				'fTitulos':{
					required: '<span style="color:red;">Debe introducir datos</span>',
					pattern: '<span style="color:red;">Introduce una cantidad entre o y 99</span>',
					digits: '<span style="color:red;">Solo se admiten números</span>'
				}
			}
		});
	});
</script>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<form action="" method="POST" id="edita">
				<div class="row">
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Nombre
							</span></h4>
							<input class="form-control" type="text" name="fNombre" value="<?=$piloto -> getNom()?>">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Siglas
							</span></h4>
							<input class="form-control" type="text" name="fSigles" value="<?=$piloto -> getSigles()?>" readonly>
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Fecha Nacimiento
							</span></h4>
							<input id="fFecha" class="form-control" type="text" name="fFecha" value="<?=d3($piloto -> getDataNaixement())?>">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Nacionalidad
							</span></h4>
							<input class="form-control" type="text" name="fNacionalidad" value="<?=$piloto -> getNacionalitat()?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Peso
							</span></h4>
							<input class="form-control" type="text" name="fPeso" value="<?=$piloto -> getPes()?>">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Altura
							</span></h4>
							<input class="form-control" type="text" name="fAltura" value="<?=$piloto -> getAltura()?>">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Puntos totales
							</span></h4>
							<input class="form-control" type="text" name="fPuntosTotales" value="<?=$piloto -> getPuntsTotals()?>">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Carreras disputadas
							</span></h4>
							<input class="form-control" type="text" name="fCarrerasTotales" value="<?=$piloto -> getCarreresTotals()?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Primera escuderia
							</span></h4>
							<input class="form-control" type="text" name="fEscuderia" value="<?=$piloto -> getPrimeraEscuderia()?>">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Año debut
							</span></h4>
							<input class="form-control" type="text" name="fDebut" value="<?=$piloto -> getAnyDebut()?>">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								V. rápidas
							</span></h4>
							<input class="form-control" type="text" name="fVueltas" value="<?=$piloto -> getTotalVoltesRapides()?>">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Victorias
							</span></h4>
							<input class="form-control" type="text" name="fVictorias" value="<?=$piloto -> getVictories()?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Titulos
							</span></h4>
							<input class="form-control" type="text" name="fTitulos" value="<?=$piloto -> getTitols()?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<button type="submit" class="btn btn-success" name="fModificaPiloto">Modifica</button>
						</div>
					</div>
				</div>
			</form>
			<?}?>
		</div>
	</div>
</div>

<!-- DATEPICKER -->
<script>
	$.datepicker.regional['es'] = {
		 closeText: 'Cerrar',
		 prevText: '< Ant',
		 nextText: 'Sig >',
		 currentText: 'Hoy',
		 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
		 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
		 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
		 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
		 weekHeader: 'Sm',
		 dateFormat: 'dd/mm/yy',
		 firstDay: 1,
		 isRTL: false,
		 showMonthAfterYear: false,
		 yearSuffix: ''
	 };
	 $.datepicker.setDefaults($.datepicker.regional['es']);
	$(function(){

		$('#fFecha').datepicker({
			changeMonth: true,
				changeYear: true,
				yearRange: '1917:2017'

		});
	})
</script>