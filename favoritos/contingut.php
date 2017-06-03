<?php
	
	if(isset($_POST['fEliminaFav'])){

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