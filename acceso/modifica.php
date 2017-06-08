<?echo titular('Canvio de contraseña')?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#modifica').blur(function(e){

			e.preventDefault();
		}).validate({
			debug: false,
			rules: {
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
				}
			},
			messages: {
				
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
				}
			}
		});
	});
</script>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<form action="" method="POST" id="modifica">
			<h4><span class="label label-info">Contraseña actual</span></h4>
			<input type="password" name="fPassActual">
			<h4><span class="label label-info">Nueva contraseña</span></h4>
			<input type="password" name="fPass" id="fPass">
			<h4><span class="label label-info">Repite contraseña</span></h4>
			<input type="password" name="fPass2"><br><br>
			<input type="submit" class="btn btn-success" name="fModificaPass" value="Canviar contraseña">
			</form>
		</div>
	</div>
</div>
<?php


$user = new Usuario();

if(isset($_POST['fModificaPass'])){

		$query = $connect -> query("SELECT password FROM log_user WHERE id = '".$_SESSION['id']."'");

		$pass = md5($_POST['fPassActual']);
		$passNuevo = md5($_POST['fPass']);

		while ($ele = $query -> fetch_array()) {
				
				
				$user -> _setPassword($ele['password']);

				if($user -> getPassword() == $pass){

					$sql = 'UPDATE log_user SET password ="'.$passNuevo.' "WHERE id = '.$_SESSION['id'];

					$result = $connect -> query($sql);

					if(!$result){
						echo '
						<div class="alert alert-danger" role="alert">
						  <strong>Error!</strong> Fallo al cambiar contraseña: <br><br>'.$connect -> error.'<br><br>'.$sql.'
						</div>';
					} else {
						echo '
						<div class="alert alert-success" role="alert">
						  <strong>Genial!</strong> Contraeña cambiada correctamente.
						</div>';
					}
					?>
					<script type="text/javascript">
						setTimeout(function(){
							parent.location.assign('../inici/index.php');
							parent.$.fancybox.close();
						}, 3500);
					</script>
					<?php
					
				} else {

					echo "<script type='text/javascript'>alert('La contraseña actual no es correcta.');</script>";
				}
		}
	} 
?>