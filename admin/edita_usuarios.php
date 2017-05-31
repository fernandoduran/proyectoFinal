<?php
	echo titular(''.ucwords($_GET['sec']).' usuario');
	$sql = $connect -> query('SELECT * FROM log_user WHERE id ='.$_GET['id']);
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
		<form action="" method="POST">
			<?if($_GET['sec'] == 'elimina'){?>
				<h4>¿Estás seguro que deseas <span class="text-uppercase bg-warning" style="font-weight: bold;">eliminar</span> este usuario?</h4>
				<input type="submit" name="fElimina" value="Eliminar" class="btn btn-danger">
				<input type="submit" name="fCancelar" value="Cancelar" class="btn btn-success">
			<?} else {?>
		</form>
</div>