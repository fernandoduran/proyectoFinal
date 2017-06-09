<?php

	if($_SESSION['rol'] != 'registrado'){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?php
	}
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<div class=jumbotron>
				<h2 class="text-center">
					Circuitos de Fórmula 1
					<br><small>Actuales y míticos</small>
				</h2>
			</div>
			<?php echo listaCircuitos($connect)?>
		</div>
	</div>
</div>

