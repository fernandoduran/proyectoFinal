<?php
	echo titular(''.ucwords($_GET['sec']).' usuario');
	$user = new Usuario();

	$sql = $connect -> query('SELECT * FROM log_user WHERE id ='.$_GET['id']);

	while($row = $sql -> fetch_array()){

		$user -> _setId($row['id']);
		$user -> _setNom($row['nom']);
		$user -> _setCognom($row['cognom']);
		$user -> _setMail($row['mail']);
		$user -> _setPassword($row['password']);
		$user -> _setDataNaixement($row['data_naixement']);
		$user -> _setRol($row['rol']);
	}
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
		<form action="" method="POST">
			
			<h4><span class="label label-info">Nombre</span></h4>
			<input type="text" name="fNombre" value="<?=$user -> getNom()?>">
			<h4><span class="label label-info">Apellido(s)</span></h4>
			<input type="text" name="fCognom" value="<?=$user -> getCognom()?>">
			<h4><span class="label label-info">Email</span></h4>
			<input type="text" name="fMail" value="<?=$user -> getMail()?>">
			<h4><span class="label label-info">Password</span></h4>
			<input type="text" name="fPass">
			<h4><span class="label label-info">Nombre</span></h4>
			<input type="text" name="fData" value="<?=$user -> getDataNaixement()?>">
			<?if($_SESSION['rol'] == 'super'){?>
			<h4><span class="label label-info">Rol</span></h4>
			<select name="fRol">
				<option selected value="<?=$user -> getRol()?>"></option>
				<?
					if($user -> getRol() == 'admin'){
					?>
					<option value="super">Super usuario</option>
					<option value="registrado">Usuario básico</option>
					<?
					} elseif ($user -> getRol() == 'super') {
						?>
					<option value="admin">Administrador</option>
					<option value="registrado">Usuario básico</option>
					<?
					} elseif ($user -> getRol() == 'registrado') {
						?>
					<option value="admin">Administrador</option>
					<option value="super">Super usuario</option>
					<?
					}
				?>
			</select>
			<?}?>
		</form>
</div>