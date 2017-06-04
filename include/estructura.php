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
	<link rel="stylesheet" type="text/css" href="../css/datepicker.less">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">
	
	<!-- Add jQuery library -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!--jQuery Validation-->
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js" type="text/javascript"></script>

	
	<!-- Fancybox -->
	<link rel="stylesheet" href="../js/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="../js/jquery.fancybox.pack.js?v=2.1.5"></script>

	<!-- DataTables -->
	<link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
	<script type="text/javascript" src="../DataTables/datatables.min.js"></script>

</head>
<!-- Llibreries -->
<?php
	include_once "../include/connect.php";
	include_once '../clases/Carrera.php';
	include_once '../clases/Carrito.php';
	include_once '../clases/CarritoProducto.php';
	include_once '../clases/Circuit.php';
	include_once '../clases/Classificacio.php';
	include_once '../clases/Escuderia.php';
	include_once '../clases/EscuderiaUsuario.php';
	include_once '../clases/Foro.php';
	include_once '../clases/Mundial.php';
	include_once '../clases/Piloto.php';
	include_once '../clases/PilotoUsuario.php';
	include_once '../clases/Producto.php';
	include_once '../clases/Temporada.php';
	include_once '../clases/TemporadaPilotEscuderia.php';
	include_once "../clases/Usuario.php";
	include_once "../include/funcions_dibuix.php";
	include_once '../include/funciones.php';
	include_once "../inici/valida.php";
	
?>
<body>

<?php
	
	if(!$_SESSION['rol']){
		?>
		<nav class="navbar navbar-inverse navbar-fixed-top">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
      				</button>
      				<a class="navbar-brand" href="/inici/">F1 History</a>
    			</div>

    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      				<ul class="nav navbar-nav">
       					<li class="dropdown">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Campeonatos <span class="caret"></span></a>
          					<ul class="dropdown-menu">
            					<li><a href="../campeonatos/index.php?sec=2017">2017</a></li>
          					</ul>
        				</li>
        				<li class="dropdown">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Circuitos <span class="caret"></span></a>
          					<ul class="dropdown-menu">
            					<li><a href="../circuitos/index.php?sec=lista_circuitos&any=<?=date('Y')?>">2017</a></li>
          					</ul>
        				</li>
      				</ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a class="various" data-fancybox-type="iframe" href="../acceso/index2.php?sec=registro"><span class="glyphicon glyphicon-user"></span> Registrate</a></li>
        <li><a href="../acceso/index.php?sec=contacto"><span class="glyphicon glyphicon-envelope"></span> Contacto</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
		<?php
	} else {
		echo pintaMenu();
	}
	include_once 'contingut.php';
?>
	<!-- Fi contingut -->

	<!--- Peu de Pàgina -->

	<!-- Fi peu de pàgina -->



	<!-- Script per tornar adalt de l'scroll  http://www.scrolltotop.com/ -->
	<script type="text/javascript" src="../js/arrow79.js"></script>
	<!--  <ascript src="../js/vendor/modernizr.js"></script>	 -->

	<script src="../js/bootstrap.min.js"></script>
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
			closeEffect	: 'none'
		});
	});
	</script>
	<footer class="site-footer">
		<div class="inner">
			<div class="footer-upper">
				<div class="social-wrapper">
			
					<span class="follow-us">Sigue a F1 History<span>
				
					<a href="https://twitter.com/f1" target="_blank" title="Sigue a F1 History en Twitter"><span class="fa fa-twitter"></span></a>
				
				
					<a href="https://www.instagram.com/f1/" target="_blank" title="Sigue a F1 History en Instagram"><span class="fa fa-instagram"></span></a>
				
				
					<a href="https://vimeo.com/user66994675" target="_blank" title="Sigue a F1 History en Vimeo"><span class="fa fa-vimeo"></span></a>
				
				
					<a href="https://www.facebook.com/Formula1" target="_blank" title="Sigue a F1 History on Facebook"><span class="fa fa-facebook-official"></span></a>
				</div>
			</div>

			<div class="group footer-lower">
				<div class="toolbar">
					<ul>
						<li><a href="/en/toolbar/contacts.html">Contacto</a></li>
						<li><a href="/en/toolbar/privacy-policy.html">Politicas de privacidad</a></li>
					</ul>
				</div>
				<p class="copyright">©2017 Formula One History</p>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>