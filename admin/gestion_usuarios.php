<? echo titular('Gestión de usuarios')?>
<div class="container">
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
			</div>
		</div>
	</div>
</div>