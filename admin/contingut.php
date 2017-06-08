<?php
	$connect -> query("SET NAMES 'utf8'");
	
	if (isset($_POST['fElimina'])) {
		
		$sql = 'DELETE FROM log_user WHERE id ='.$_GET['id'];

		$result = $connect -> query($sql);
			if(!$result){
				echo '
				<div class="alert alert-danger" role="alert">
				  <strong>Error!</strong> Fallo al eliminar el usuario: <br><br>'.$connect -> error.'<br><br>'.$sql.'
				</div>';
			} else {
				echo '
				<div class="alert alert-success" role="alert">
				  <strong>Genial!</strong> Usuario eliminado.
				</div>';
				
			}
		?>
		<script type="text/javascript">
			setTimeout(function(){
				parent.location.assign('../admin/index.php?sec=lista_usuarios');
				parent.$.fancybox.close();
			}, 3500);
		</script>
		<?php
	
	} elseif (isset($_POST['fModifica'])) {
		
		if($_POST['fPass'] == ""){

			$sql = 'UPDATE log_user SET 
					nom = "'.$_POST['fNombre'].'",
					cognom = "'.$_POST['fCognom'].'",
					mail = "'.$_POST['fMail'].'",
					data_naixement = "'.d($_POST['fData']).'",
					rol = "'.$_POST['fRol'].'"
				WHERE id = '.$_GET['id'];

		} else {

			$sql = 'UPDATE log_user SET 
					nom = "'.$_POST['fNombre'].'",
					cognom = "'.$_POST['fCognom'].'",
					mail = "'.$_POST['fMail'].'",
					password = "'.md5($_POST['fPass']).'",
					data_naixement = "'.d($_POST['fData']).'",
					rol = "'.$_POST['fRol'].'"
				WHERE id = '.$_GET['id'];
		}
		

		$result = $connect -> query($sql);
			if(!$result){
				echo '
				<div class="alert alert-danger" role="alert">
				  <strong>Error!</strong> Fallo al modificar el usuario: <br><br>'.$connect -> error.'<br><br>'.$sql.'
				</div>';
			} else {
				echo '
				<div class="alert alert-success" role="alert">
				  <strong>Genial!</strong> Usuario modificado.
				</div>';
				
			}
		?>
		<script type="text/javascript">
			setTimeout(function(){
				parent.location.assign('../admin/index.php?sec=lista_usuarios');
				parent.$.fancybox.close();
			}, 3500);
		</script>
		<?php		


	} elseif (isset($_POST['fRegistra'])) {
		
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
				  <strong>Error!</strong> Fallo al registrar usuario: <br><br>'.$connect -> error.'<br><br>'.$sql.'
				</div>';
			} else {
				echo '
				<div class="alert alert-success" role="alert">
				  <strong>Genial!</strong> Usuario registrado correctamente.
				</div>';
			}
		?>
		<script type="text/javascript">
			setTimeout(function(){
				parent.location.assign('../admin/index.php?sec=lista_usuarios');
				parent.$.fancybox.close();
			}, 3500);
		</script>
		<?php
		}
	} else {
		switch ($_GET['sec']) {

			case 'lista_usuarios':
				include'gestion_usuarios.php';
				break;
			case 'edita':
				include 'edita_usuarios.php';
				break;
			case 'elimina':
				include 'elimina_usuarios.php';
				break;
			case 'nuevo':
				include 'nuevo_usuario.php';
				break;
			default:
				# code...
				break;
		}
	}
	
	

?>