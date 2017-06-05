<?php

	switch ($_GET['sec']) {
		case 'lista_escuderias':
			include 'lista_escuderias.php';
			break;
		case 'nombre':
			include 'buscador_escuderias.php';
			break;
	}
?>