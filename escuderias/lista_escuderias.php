<?php

	if($_SESSION['rol'] != 'registrado'){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?php
	}
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class="jumbotron">
				<h1 class="text-center">
					Escuderías de fórmula 1
				</h1>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<form action="" method="POST">
						<div class="row">
							<h4><span class="label label-info">
								Ver datos del año:
							</span></h4>
							<select name="fAny" class="form-control">
								<?php
									$sql = $connect -> query('SELECT any FROM temporada');

									while ($row = $sql -> fetch_array()) {
										
										//Objeto de clase
										$temp = new Temporada();

										$temp -> _setAny($row['any']);

										echo '<option value='.$temp -> getAny().'>'.$temp -> getAny().'</option>';
									}
								?>
							</select>
						</div>
						<div class="row">
							<button type="submit" name="fBusca" class="btn btn-success">Buscar</button>
						</div>
					</form>
				</div>
			</div>
			<?php	
				if(isset($_POST['fBusca'])){

					echo listaEscuderias($connect, $_POST['fAny']);
				}

			?>
		</div>
	</div>
</div>