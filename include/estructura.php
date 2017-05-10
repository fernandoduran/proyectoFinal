<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>F1 History</title>

	<!-- Estils propis -->
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	
	<!-- Bootstrap estils-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css.map">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css.map">
	<link rel="stylesheet" type="text/css" href="boostrap.css">
	<link rel="stylesheet" type="text/css" href="boostrap.min.css">
	<link rel="stylesheet" type="text/css" href="boostrap.min.css.map">
	<link rel="stylesheet" type="text/css" href="">

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
	echo titular("hola");
	include_once 'contingut.php';
?>

</body>
</html>