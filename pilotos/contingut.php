<?
	
	if(isset($_POST['fFav'])){

		$sql = 'INSERT INTO pilot_usuari 
					VALUES ('.$_POST['fIdPiloto'].','.$_SESSION['id'].')';
		
		$result = $connect -> query($sql);

		if(!$result){
			echo '
			<div class="alert alert-danger" role="alert">
			  <strong>Error!</strong> Ya tienes marcado a este piloto como favorito!:
			</div>';
		} else {
			echo '
			<div class="alert alert-success" role="alert">
			  <strong>Genial!</strong> Ya es uno de tus favoritos!.
			</div>';
		}
		
		?>
		<script type="text/javascript">
			setTimeout(function(){
				parent.location.assign('../pilotos/index.php?sec=lista_pilotos');
				parent.$.fancybox.close();
			}, 1500);
		</script>
		<?php
		
	} else {

		switch ($_GET['sec']) {
			case 'lista_pilotos':
				include 'lista_pilotos.php';
				break;
			case 'ficha':
				include 'ficha_piloto.php';
				break;
			default:
				# code...
				break;
		}
	}
?>