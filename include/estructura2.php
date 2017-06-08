<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>F1 History</title>

	
	<link rel="icon" href="../favicon.ico" type="image/x-icon">

	<!-- Estils propis -->
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/estils.css">
	
	<!-- Bootstrap estils-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-social.css">
	

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">
	
	<!-- Add jQuery library -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	<!--jQuery Validation-->
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

	<script src='../js/tinymce/tinymce.min.js'></script>

	<!-- Fancybox -->
	<link rel="stylesheet" href="../js/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="../js/jquery.fancybox.pack.js?v=2.1.5"></script>

	<!-- DataTables -->
	<link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
	 
	<script type="text/javascript" src="../DataTables/datatables.min.js"></script>




</head>
<!-- Llibreries -->
<body>
<?php
	include_once "../include/connect.php";
	include_once '../clases/Carrera.php';
	include_once '../clases/Circuit.php';
	include_once '../clases/Classificacio.php';
	include_once '../clases/Escuderia.php';
	include_once '../clases/EscuderiaUsuario.php';
	include_once '../clases/Piloto.php';
	include_once '../clases/PilotoUsuario.php';
	include_once '../clases/Temporada.php';
	include_once '../clases/TemporadaPilotEscuderia.php';
	include_once "../clases/Usuario.php";
	include_once "../include/funcions_dibuix.php";
	include_once '../include/funciones.php';
	
	
?>
	<?php include_once ("contingut.php")  ?>

	<script type="text/javascript">
	$(document).ready(function() {
		$(".various").fancybox({
			maxWidth	: 1000,
			maxHeight	: 700,
			fitToView	: true,
			width		: '95%',
			height		: '95%',
			autoSize	: true,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none',
			helpers: {
				overlay: {
					locked: false
				},
			overlay : {
	          	closeClick : false  // Evita que se cierre al hacer click fuera del modal
	        	}
			}
		});
		$(".various_petit").fancybox({
			maxWidth	: 1000,
			maxHeight	: 700,
			fitToView	: true,
			width		: '50%',
			height		: '50%',
			autoSize	: true,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none',
			overlay : {
	          	closeClick : false  // Evita que se cierre al hacer click fuera del modal
	        	}
		});
	});
	</script>
	<!-- Script per tornar adalt de l'scroll  http://www.scrolltotop.com/ -->
	<script type="text/javascript" src="../js/arrow79.js"></script>
	<!--  <ascript src="../js/vendor/modernizr.js"></script>	 -->

</body>
</html>