<?php
	if($_SESSION['rol'] != ""){
		
		header("Location: ../inicio.php");	
	}
	
	echo titular('Formulario registro');
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').blur(function(e){

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
					required: 'Introduce tu nombre',
					pattern: 'El formato no es correcto'
				},
				'fApellido':{
					required: 'Introduce tu apellido',
					pattern: 'El formato no es correcto'
				},
				'fMail':{
					required: 'Introduce tu email',
					email: 'El mail no és válido'
				},
				'fPass':{
					required: 'Introduce una contraseña',
					pattern: 'La contraseña de contener al menos una mayúscula, una minúscula y un número',
					minlength: 'Introduce un mínimo de 8 caracteres',
					maxlength: 'Introduce un máximo de 16 caracteres'
				},
				'fPass2': {
					pattern: 'La contraseña de contener al menos una mayúscula, una minúscula y un número',
					minlength: 'Introduce un mínimo de 8 caracteres',
					maxlength: 'Introduce un máximo de 16 caracteres',
					equalTo: 'Las contraseñars no coinciden'
				},
				'fData':{
					required: 'Introduce tu fecha de nacimiento'
				}
			}
		});
	});
</script>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<form action="" method="POST" id="registro">
				<div class="form-group">
					<label class="label label-info" for="fNombre">Nombre: </label><br>
						<input id="fNombre" class="form-control" type="text" name="fNombre" placeholder="Tu nombre aquí" pattern="^[a-zA-Z]{3,}$">
				</div>
				<div class="form-group">
					<label class="label label-info" for="fApellido">Apellido: </label><br>
						<input id="fApellido" class="form-control" type="text" name="fApellido" placeholder="Tu apellido aquí">
				</div>
				<div class="form-group">
					<label class="label label-info" for="fMail">Email: </label><br>
						<input id="fMail" class="form-control" type="email" name="fMail" placeholder="Tu email aquí">
				</div>
				<div class="form-group">
					<label class="label label-info" for="fPass">Password: </label><br>
						<input id="fPass" class="form-control" type="password" name="fPass" placeholder="Tu contraseña aquí">
				</div>
				<div class="form-group">
					<label class="label label-info" for="fPass2">Confirmar Password: </label><br>
						<input id="fPass2" class="form-control" type="password" name="fPass2" placeholder="Tu contraseña aquí">
				</div>
				<div class="form-group">
					<label class="label label-info" for="fData">Fecha nacimiento: </label><br>
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
				<input type="hidden" name="fRol" value="registrado">
				<input type="submit" name="fRegistra" value="Registrarse" class="btn btn-success">
			</form>
		</div>
	</div>
</div>