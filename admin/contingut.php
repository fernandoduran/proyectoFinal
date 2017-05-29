<?php
	
	switch ($_GET['sec']) {
		case 'lista_usuarios':
			include_once 'gestion_usuarios.php';
			break;
		
		default:
			# code...
			break;
	}

?>