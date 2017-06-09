<?php
	
	if($_SESSION['rol'] != 'super'){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?php
	}
	echo titular('Edita la carrera');

	$sql = $connect -> query('SELECT * FROM carrera WHERE id = '.$_GET['id']);

	$carrera = new Carrera();

	while($row = $sql -> fetch_array()){

		$carrera -> _setId($row['id']);
		$carrera -> _setNomCarrera($row['nom_carrera']);
		$carrera -> _setDataCarrera($row['data_carrera']);
	}
?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<form action="" method="POST">
				<h4><span class="label label-primary">Nombre de la carrera</span></h4>
					<input class="form-control" type="text" name="fNombre" value="<?=$carrera -> getNomCarrera()?>">
				<h4><span class="label label-primary">Fecha de la carrera</span></h4>
					<input id="fFecha" class="form-control" type="text" name="fFecha" value="<?=d3($carrera -> getDataCarrera())?>" readonly>
				<br><br>
				<button type="submit" class="btn btn-success" name="fModificaCarrera">Modifica carrera</button>
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