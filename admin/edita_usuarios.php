<?php
	if($_SESSION['rol'] == 'registrado' || $_SESSION['rol'] == ''){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?
	}
	echo titular(''.ucwords($_GET['sec']).' usuario');
	$user = new Usuario();
	$connect -> query("SET NAMES 'utf8'");
	$sql = $connect -> query('SELECT * FROM log_user WHERE id ='.$_GET['id']);

	while($row = $sql -> fetch_array()){

		$user -> _setId($row['id']);
		$user -> _setNom($row['nom']);
		$user -> _setCognom($row['cognom']);
		$user -> _setMail($row['mail']);
		$user -> _setPassword($row['password']);
		$user -> _setDataNaixement($row['data_naixement']);
		$user -> _setRol($row['rol']);
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
					pattern: /^[a-zA-ZñÑáéíóúàèìòùÁÉÍÓÚÀÈÌÒÙäëïöüäëïöüçÇ]{3,}$/
				},
				'fApellido':{
					required: true,
					pattern: /^[a-zA-ZñÑáéíóúàèìòùÁÉÍÓÚÀÈÌÒÙäëïöüäëïöüçÇ]{3,}$/
				},
				'fMail':{
					required: true,
					email: true
				},
				'fPass':{
					required: false,
					pattern: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/,
					minlength: 8,
					maxlength: 16
				},
				'fData':{
					required: true
				}
			},
			messages: {
				'fNombre': {
					required: '<span style="color: red;">Introduce tu nombre</span>',
					pattern: '<span style="color: red;">El formato no es correcto</span>'
				},
				'fApellido':{
					required: '<span style="color: red;">Introduce tu apellido</span>',
					pattern: '<span style="color: red;">El formato no es correcto</span>'
				},
				'fMail':{
					required: '<span style="color: red;">Introduce tu email</span>',
					email: '<span style="color: red;">El mail no és válido</span>'
				},
				'fPass':{
					pattern: '<span style="color: red;">La contraseña de contener al menos una mayúscula, una minúscula y un número</span>',
					minlength: '<span style="color: red;">Introduce un mínimo de 8 caracteres</span>',
					maxlength: '<span style="color: red;">Introduce un máximo de 16 caracteres</span>'
				},
				'fData':{
					required: '<span style="color: red;">Introduce tu fecha de nacimiento</span>'
				}
			}
		});
	});
</script>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
		<form action="" method="POST" id="edita">
			
			<h4><span class="label label-info">Nombre</span></h4>
			<input class="form-control" type="text" name="fNombre" value="<?=$user -> getNom()?>">

			<h4><span class="label label-info">Apellido(s)</span></h4>
			<input class="form-control" type="text" name="fCognom" value="<?=$user -> getCognom()?>">

			<h4><span class="label label-info">Email</span></h4>
			<input class="form-control" type="text" name="fMail" value="<?=$user -> getMail()?>">

			<h4><span class="label label-info">Password</span></h4>
			<input class="form-control" type="password" name="fPass">

			<h4><span class="label label-info">Fecha de nacimiento</span></h4>
			<input id="fData" class="form-control" type="text" name="fData" value="<?=d3($user -> getDataNaixement())?>" readonly>
			
			<h4><span class="label label-info">Rol</span></h4>
			<select class="form-control" name="fRol">
				<option selected value="<?=$user -> getRol()?>" ><?=$user -> getRol()?></option>
				<?
					if($user -> getRol() == 'admin'){
					?>
					<option value="super" <?if($_SESSION['rol'] == 'admin'){echo "disabled";}?>>Super usuario</option>
					<option value="registrado" <?if($_SESSION['rol'] == 'admin'){echo "disabled";}?>>Usuario básico</option>
					<?
					} elseif ($user -> getRol() == 'super') {
						?>
					<option value="admin" <?if($_SESSION['rol'] == 'admin'){echo "disabled";}?>>Administrador</option>
					<option value="registrado" <?if($_SESSION['rol'] == 'admin'){echo "disabled";}?>>Usuario básico</option>
					<?
					} elseif ($user -> getRol() == 'registrado') {
						?>
					<option value="admin" <?if($_SESSION['rol'] == 'admin'){echo "disabled";}?>>Administrador</option>
					<option value="super" <?if($_SESSION['rol'] == 'admin'){echo "disabled";}?>>Super usuario</option>
					<?
					}
				?>
			</select>
			<br>
			<button type="submit" name="fModifica" class="btn btn-success">Modificar datos</button>
		</form>
</div>
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

		$('#fData').datepicker({
			changeMonth: true,
				changeYear: true,
				yearRange: '1917:2017'

		});
	})
</script>