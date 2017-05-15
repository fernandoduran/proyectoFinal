<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>F1 History</title>

	<!-- Estils propis -->
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/estils.css">
	
	<!-- Bootstrap estils-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css.map">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css.map">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/boostrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css.map">
	

	<!-- Bootstrap javascript-->
	<script src="../js/bootstrap.min.js"></script>

	<!-- Fancybox -->
	<link rel="stylesheet" type="text/css" media="screen" href="../jquery.fancybox-1.3.4/jquery.easing-1.3.pack.js">
	<link rel="stylesheet" type="text/css" media="screen" href="../jquery.fancybox-1.3.4/jquery.fancybox-1.3.4.css">
	<link rel="stylesheet" type="text/css" media="screen" href="../jquery.fancybox-1.3.4/jquery.fancybox-1.3.4.js">
	<link rel="stylesheet" type="text/css" media="screen" href="../jquery.fancybox-1.3.4/jquery.fancybox-1.3.4.pack.js">
	<link rel="stylesheet" type="text/css" media="screen" href="../jquery.fancybox-1.3.4/jquery.mousewheel-3.0.4.pack.js">

	<!-- jQuery -->
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<!-- Llibreries -->
<?php
	include_once ("../include/connect.php");
	include_once ("../include/funcions_dibuix.php");
	
?>
<body>
<?php 
	if($_SESSION['rol']){
		?>
		<nav class="navbar navbar-default">
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
        <li><a href="../acceso/index.php?sec=registro">Registrate</a></li>
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
?><script src="../js/bootstrap.min.js"></script>

</body>
</html>