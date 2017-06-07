<? 
	if($_SESSION['rol'] == 'registrado' || $_SESSION['rol'] == ''){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?
	}

	echo titular('Gestión de usuarios');
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table id="listaUsuarios" class="table  table-bordered"  cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Email</th>
						<th>Contraseña</th>
						<th>Fecha de Nacimiento</th>
						<th>Rol</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?

						echo listaUsuarios($connect, $_SESSION['rol'], $_SESSION['id']);
					?>
				</tbody>	
					
				</table>
				<a class="various" data-fancybox-type="iframe" href="../admin/index2.php?sec=nuevo"><span class="glyphicon glyphicon-plus"></span>Añade un usuario</a>
			</div>
		</div>
	</div>
</div>