<?php
	
	if(isset($_POST['fEliminaFav'])){

		$sql = 'DELETE FROM pilot_usuari WHERE pilot_id = '.$_POST['fPilotId'].' AND log_user_id = '.$_SESSION['id'];

		$result = $connect -> query($sql);

		if(!$result){

			echo '
			<div class="alert alert-danger" role="alert">
			  <strong>Error!</strong> No hemos podido eliminar al piloto de tus favoritos: <br><br>'.$connect -> error.'<br><br>'.$sql.'
			</div>';

		} else {

			echo '
			<div class="alert alert-success" role="alert">
			  <strong>Vaya...</strong> Sentimos que este piloto ya no sea tu favorito.
			</div>';
		}
		?>
		<script type="text/javascript">
			setTimeout(function(){
				parent.location.assign('../favoritos/index.php?sec=pilotos');
				parent.$.fancybox.close();
			}, 1500);
		</script>
		<?php 
	} else {

		switch ($_GET['sec']) {
			case 'pilotos':
				include 'pilotos_fav.php';
				break;
			case 'escuderias':
				include 'escuderias_fav.php';
				break;
			default:
				# code...
				break;
		}
	}
?>