<?php

	if($_SESSION['rol'] == 'registrado' || $_SESSION['rol'] == ''){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?php
	}

	echo titular(''.ucwords($_GET['sec']).' usuario');
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
		<form action="" method="POST">
				<h4>¿Estás seguro que deseas <span class="text-uppercase bg-warning" style="font-weight: bold;">eliminar</span> este usuario?</h4>
				<input type="submit" name="fElimina" value="Eliminar" class="btn btn-danger">
				<input type="submit" name="fCancelar" value="Cancelar" class="btn btn-success">
		</form>
</div>