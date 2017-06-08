<?
	echo titular('Añade Pilotos');
	
	if($_SESSION['rol'] != 'super'){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?
	}
?>
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
				'fSigles':{
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
				'fSigles':{
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
							<input class="form-control" type="text" name="fNombre">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Siglas
							</span></h4>
							<input class="form-control" type="text" name="fSigles">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Fecha Nacimiento
							</span></h4>
							<input id="fFecha" class="form-control" type="text" name="fFecha" readonly>
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Nacionalidad
							</span></h4>
							<input class="form-control" type="text" name="fNacionalidad">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Peso
							</span></h4>
							<input class="form-control" type="text" name="fPeso">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Altura
							</span></h4>
							<input class="form-control" type="text" name="fAltura">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Puntos totales
							</span></h4>
							<input class="form-control" type="text" name="fPuntosTotales">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Carreras disputadas
							</span></h4>
							<input class="form-control" type="text" name="fCarrerasTotales">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Primera escuderia
							</span></h4>
							<input class="form-control" type="text" name="fEscuderia">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Año debut
							</span></h4>
							<input class="form-control" type="text" name="fDebut">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								V. rápidas
							</span></h4>
							<input class="form-control" type="text" name="fVueltas">
						</div>
					</div>
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Victorias
							</span></h4>
							<input class="form-control" type="text" name="fVictorias">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<h4><span class="label label-info">
								Titulos
							</span></h4>
							<input class="form-control" type="text" name="fTitulos">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<button type="submit" class="btn btn-success" name="fInsertaPiloto">Inserta</button>
						</div>
					</div>
				</div>
			</form>
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