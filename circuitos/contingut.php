<?php
	
	if(isset($_POST['fBusca'])){
		
		echo listaCircuitos($connect, $_POST['fCircuito']);
		
	} else {
		
		if($_SESSION['rol'] != 'registrado'){
			switch ($_GET['sec']) {
				case 'lista_circuitos':
					include 'buscador_circuitos.php';
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