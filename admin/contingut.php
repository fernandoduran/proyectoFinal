<?php
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
			}, 1500);
		</script>
		<?php
	
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