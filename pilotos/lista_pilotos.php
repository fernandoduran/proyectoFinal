<?
	if($_SESSION['rol'] == 'admin' || $_SESSION['rol'] == ""){

		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?
	}
?>
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
						<? if($_SESSION['rol'] == 'super'){?>
						<th colspan="2">Acción</th>
						<? } ?>
						<?if($_SESSION['rol'] == 'registrado'){?>
						<th>Favorito</th>
						<?}?>
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
<script type="text/javascript">
	$(document).ready(function(){
	    $('#listaPilotos').DataTable({
	    	'order': [[7, 'desc']],
	    	
	    	'columnDefs' :[{

	    		'targets': [8],
	    		'visible': true,
	    		'searchable': false
	    	}]
	    });
	});
</script>

