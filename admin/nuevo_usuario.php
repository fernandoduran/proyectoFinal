<?php

	echo titular('Añade usuarios');
	if($_SESSION['rol'] == 'registrado' || $_SESSION['rol'] == ''){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?php
	}
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#nuevo').blur(function(e){

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
					required: true,
					pattern: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/,
					minlength: 8,
					maxlength: 16
				},
				'fPass2': {
					minlength: 8,
					pattern: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/,
					maxlength: 16,
					equalTo: '#fPass'
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
					required: '<span style="color: red;">Introduce una contraseña</span>',
					pattern: '<span style="color: red;">La contraseña de contener al menos una mayúscula, una minúscula y un número</span>',
					minlength: '<span style="color: red;">Introduce un mínimo de 8 caracteres</span>',
					maxlength: '<span style="color: red;">Introduce un máximo de 16 caracteres</span>'
				},
				'fPass2': {
					pattern: '<span style="color: red;">La contraseña de contener al menos una mayúscula, una minúscula y un número</span>',
					minlength: '<span style="color: red;">Introduce un mínimo de 8 caracteres</span>',
					maxlength: '<span style="color: red;">Introduce un máximo de 16 caracteres</span>',
					equalTo: '<span style="color: red;">Las contraseñars no coinciden</span>'
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
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<form action="" method="POST" id="nuevo">
				<div class="form-group">
					<h4><span class="label label-info" for="fNombre">Nombre:</span></h4>
						<input id="fNombre" class="form-control" type="text" name="fNombre" placeholder="Tu nombre aquí" pattern="^[a-zA-Z]{3,}$">
				</div>
				<div class="form-group">
					<h4><span class="label label-info" for="fApellido">Apellido:</span></h4>
						<input id="fApellido" class="form-control" type="text" name="fApellido" placeholder="Tu apellido aquí">
				</div>
				<div class="form-group">
					<h4><span class="label label-info" for="fMail">Email:</span></h4>
						<input id="fMail" class="form-control" type="email" name="fMail" placeholder="Tu email aquí">
				</div>
				<div class="form-group">
					<h4><span class="label label-info" for="fPass">Password:</span></h4>
						<input id="fPass" class="form-control" type="password" name="fPass" placeholder="Tu contraseña aquí">
				</div>
				<div class="form-group">
					<h4><span class="label label-info" for="fPass2">Confirmar Password:</span></h4>
						<input id="fPass2" class="form-control" type="password" name="fPass2" placeholder="Tu contraseña aquí">
				</div>
				<div class="form-group">
					<h4><span class="label label-info" for="fData">Fecha nacimiento:</span></h4>
						<input id="fData" class="form-control" type="text" name="fData" placeholder="DD/MM/AAAA" readonly>

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

							$('#fData').datepicker({
								changeMonth: true,
      							changeYear: true,
      							yearRange: '1917:2017'

							});
						})
						</script>
				</div>
			<select class="form-control" name="fRol">
				<option selected value="registrado">Registrado</option>
				<option value="super" <?php if($_SESSION['rol'] == 'admin'){echo 'disabled';}?>>Super usuario</option>
				<option value="admin" <?php if($_SESSION['rol'] == 'admin'){echo 'disabled';}?>>Administrador</option>
				
			</select><br>
				<input type="submit" name="fRegistra" value="Da de alta" class="btn btn-success">

			</form>
		</div>
	</div>
</div>