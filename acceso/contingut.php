<?php

	if (isset($_POST['fRegistra'])) {
		$query = $connect -> query('SELECT mail FROM log_user WHERE mail = "'.$_POST['fMail'].'"');

		if($query -> num_rows > 0){

			echo '<div class="alert alert-warning" role="alert">
				  <strong>Oops!</strong> Ya existe un usuario con este email.
				</div>';
				?>
				<script type="text/javascript">
					setTimeout(function(){
						parent.location.assign('../inici/index.php');
						parent.$.fancybox.close();
					}, 3500);
				</script>

				<?php
		} else {
			$connect -> query("SET NAMES 'utf8'");
			$pass = md5($_POST['fPass']);
			$sql = 
				'INSERT INTO log_user (
					nom,
					cognom,
					mail,
					password,
					data_naixement,
					rol
				) VALUES (
					"'.$_POST['fNombre'].'",
					"'.$_POST['fApellido'].'",
					"'.$_POST['fMail'].'",
					"'.$pass.'",
					"'.d($_POST['fData']).'",
					"'.$_POST['fRol'].'"
					)';
			
			

			$result = $connect -> query($sql);

			if(!$result){
				echo '
				<div class="alert alert-danger" role="alert">
				  <strong>Error!</strong> Fallo al registrarse: <br><br>'.$connect -> error.'<br><br>'.$sql.'
				</div>';
			} else {
				echo '
				<div class="alert alert-success" role="alert">
				  <strong>Genial!</strong> Te has registrado correctamente.
				</div>';
				?>
				<script type="text/javascript">
					setTimeout(function(){
						parent.location.assign('../inici/index.php');
						parent.$.fancybox.close();
					}, 3500);
				</script>
				<?php
			}
		}
		
	} else {
		
		switch ($_GET['sec']) {
			case 'registro':
				include 'registro.php';
				break;
			case 'modifica':
				include 'modifica.php';
				break;
		}
	}
	
	
?>