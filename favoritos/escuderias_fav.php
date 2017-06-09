<?php
	if($_SESSION['rol'] != 'registrado'){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?php
	}
?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			
				<?php
					echo escuderiasFav($connect, $_SESSION['id']);
				?>
			
		</div>
	</div>
</div>