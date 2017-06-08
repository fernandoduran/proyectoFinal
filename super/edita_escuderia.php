<? 
	if($_SESSION['rol'] != 'super'){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?
	}
	//Mapa de caractertes
	$connect -> query("SET NAMES 'utf8'");

	//Objetos de clase
	$scud = new Escuderia();

	$sql = $connect -> query('SELECT * FROM scuderia WHERE id = '.$_GET['id']);

	while ($row = $sql -> fetch_array()) {
			
		$scud -> _setId($row['id']);
		$scud -> _setNomEscuderia($row['nomEscuderia']);
		$scud -> _setSeu($row['seu']);
		$scud -> _setDebut($row['debut']);
	}
?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#editaEscud').blur(function(e){

			e.preventDefault();
		}).validate({
			debug: false,
			rules: {
				'fNombre': {
					required: true
				},
				'fSede':{
					required: true
				},
				'fDebut':{
					required: true,
					pattern: /^[1-2]+[0-9]{3}$/,
					digits: true,
					range: [1950, <?=date('Y')?>]
				}
			},
			messages: {
				'fNombre': {
					required: '<span style="color:red;">Debe introducir datos</span>'
				},
				
				'fSede':{
					required: '<span style="color:red;">Debe introducir datos</span>'
				},
				'fDebut':{
					required: '<span style="color:red;">Debe introducir datos</span>',
					pattern: '<span style="color:red;">El formato no es correcto</span>',
					digits: '<span style="color:red;">Solo se admiten números</span>',
					range: '<span style="color:red;">Debes introducir un rango entre 1950 y <?=date('Y')?></span>'
				}
			}
		});
	});
</script>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<form action="" method="POST" id="editaEscud">
				<div class="form-group">
					<h4><span class="label label-primary">
						Nombre escudería
					</span></h4>

					<input class="form-control" type="text" name="fNombre" value="<?=$scud -> getNomEscuderia()?>">
				</div>

				<div class="form-group">
					<h4><span class="label label-primary">
						Sede
					</span></h4>

					<input class="form-control" type="text" name="fSede" value="<?=$scud -> getSeu()?>">
				</div>

				<div class="form-group">
					<h4><span class="label label-primary">
						Año debut
					</span></h4>

					<input class="form-control" type="text" name="fDebut" value="<?=$scud -> getDebut()?>">
				</div>

				<div class="form-group">

					<button type="submit" class="btn btn-success" name="fModificaEscuderia">Modifica datos</button>
				</div>

			</form>
		</div>
	</div>
</div>