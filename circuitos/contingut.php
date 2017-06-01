<?php
	
	//if(isset()){

	//} else {

		switch ($_GET['sec']) {
			case 'lista_circuitos':
				include 'lista_circuitos.php';
				break;
			case 'pais':
				include 'buscador_circuitos.php';
				break;
		}
	//}
?>