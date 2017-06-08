<?
	
	if($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == ""){

		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?
	}
	echo titular('Ficha del piloto');
?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<?echo fichaPiloto($connect, $_GET['id'])?>
		</div>
	</div>
</div>