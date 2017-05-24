<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="table-responsive">
				<table id="listaPilotos" class="table  table-bordered"  cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Nacionalidad</th>
						<th>Año debut</th>
						<th>Escudería debut</th>
						<th>GPs disputados</th>
						<th>Total puntos obtenidos</th>
						<th>Victorias</th>
						<th>Titulos</th>
					</tr>
				</thead>
				<tbody>
					<?
						$connect -> query("SET NAMES 'utf8'");
						$sql = $connect -> query("SELECT id, nom, punts_totals, carreres_totals, primera_escuderia, nacionalitat, any_debut, victories, titols FROM pilot ORDER BY titols DESC");

						echo listaPilotos($sql);
					?>
				</tbody>	
					
				</table>
			</div>
		</div>
	</div>
</div>


