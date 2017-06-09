<?php 
	if($_SESSION['rol'] != 'super'){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?php
	}
	
	echo titular('Gestión escuderías');

?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<?php echo gestionEscuderias($connect)?>
		</div>
	</div>
</div>