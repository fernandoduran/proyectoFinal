<?php
	
	if($_SESSION['rol'] != 'admin' || $_SESSION['rol'] != 'super'){

		header("Location: ../inicio.php");
	}

	echo titular(''.ucwords($_GET['sec']).' usuario');
	$user = new Usuario();

	$sql = $connect -> query('SELECT * FROM log_user WHERE id ='.$_GET['id']);

	while($row = $sql -> fetch_array()){

		$user -> _setId($row['id']);
		$user -> _setNom($row['nom']);
		$user -> _setCognom($row['cognom']);
	}
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
				<h4><span class="label label-info">Nombre</span></h4>
				<input type="text" name="fNombre" value="<?=$?>">
		</form>
	<?}?>
</div>