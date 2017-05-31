<?php
	
	switch ($_GET['sec']) {
		case 'lista_usuarios':
			include'gestion_usuarios.php';
			break;
		case 'edita':
			include 'edita_usuarios.php';
			break;
		case 'elimina':
			include 'edita_usuarios.php';
			break;
		
		default:
			# code...
			break;
	}

?>