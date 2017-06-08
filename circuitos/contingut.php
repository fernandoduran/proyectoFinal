<?php
	
	if(isset($_POST['fBusca'])){
		
		echo listaCircuitos($connect, $_POST['fCircuito']);
		
	} else {

		switch ($_GET['sec']) {
			case 'lista_circuitos':
				include  'buscador_circuitos.php';
				break;
		}
	}
?>