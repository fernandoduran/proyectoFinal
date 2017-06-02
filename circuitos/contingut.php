<?php
	
	if(isset($_POST['fBusca'])){

		echo '<div class="alert alert-warning" role="alert">
				 <h1><strong>Muy pronto!</strong> Tendrás los resultados.</h1>
				</div>';
	} else {
		
		if($_SESSION['rol'] != 'registrado'){
			switch ($_GET['sec']) {
				case 'lista_circuitos':
					include 'lista_circuitos.php';
					break;
				case 'pais':
					?>
					<script type="text/javascript">
						parent.location.assign('../inicio.php');
					</script>
					<?
					break;
			}
			
		} else {

			switch ($_GET['sec']) {
				case 'lista_circuitos':
					include 'lista_circuitos.php';
					break;
				case 'pais':
					include 'buscador_circuitos.php';
					break;
			}
		}
	}
?>