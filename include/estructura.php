<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>F1 History</title>

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../favicon.ico" type="image/x-icon">

	<!-- Estils propis -->
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/estils.css">
	
	<!-- Bootstrap estils-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-social.css">


	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">

	<!-- Fancybox -->
	<script type="text/javascript" href="../jquery.fancybox-1.3.4/fancybox/jquery.easing-1.3.pack.js"></script>
	<script type="text/javascript" href="../jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js"></script>
	<script type="text/javascript" href="../jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" href="../jquery.fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="../jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css">

</head>
<!-- Llibreries -->
<?php
	include "../include/connect.php";
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
      				<a class="navbar-brand" href="#">F1 History</a>
    			</div>

    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      				<ul class="nav navbar-nav">
       					<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Campeonatos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../campeonatos/index.php?sec=2017">2017</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="../acceso/index.php?sec=registro"><span><i class="glyficon glyficon-login"></i></span> Registrate</a></li>
        <li><a href="../acceso/index.php?sec=contacto">Contacto</a></li>

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
<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

</body>
</html>