<?php

	switch ($_GET['sec']) {
		case 'videos':
			include 'videos.php';
			break;
		case 'fotos':
			include 'fotos.php';
			break;
	}
?>