<?php 
	echo titular('Añade nueva carrera');

	if($_SESSION['rol'] != 'super'){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?
	}
?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<form action="" method="POST">
				<div class="form-group">
					<h4><span class="label label-info">Nombre Carrera</span> </h4>
						<input type="text" name="fNombreCarrera" class="form-control">
				</div>
				<div class="form-group">
					<h4><span class="label label-info">Fecha Carrera</span> </h4>
					<input id="fFecha" type="text" name="fFecha" class="form-control">

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
				</div>
				<div class="form-group">
					<h4><span class="label label-info">Circuito</span> </h4>
					<select name="fCircuito" class="form-control">
						<option selected value="">Seleccione circuito</option>
						<?php
						$circuit = new Circuit();
						$connect -> query("SET NAMES 'utf8'");
							$sql = $connect -> query('SELECT id, nom, pais FROM circuit');

							while ($row = $sql -> fetch_array()) {
								
								$circuit -> _setId($row['id']);
								$circuit -> _setNom($row['nom']);
								$circuit -> _setPais($row['pais']);

								echo '<option value="'.$circuit -> getId().'">'.$circuit -> getNom().' <strong>('.$circuit -> getPais().')</strong></option>';
							}
						?>
					</select>
				</div>
				<input type="submit" name="fInsertaCarrera" value="Inserta" class="btn btn-success">
			</form>
		</div>
	</div>
</div>
