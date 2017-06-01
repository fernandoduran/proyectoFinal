<?php
	
	if($_SESSION['rol'] == ''){

		switch ($_GET['sec']) {
			case '2017':
				include 'campeonatos.php';
				break;
			case '2016':
				?>
				<script type="text/javascript">
					parent.location.assign('../inicio.php');
				</script>
				<?
				break;
			case '2015':
				?>
				<script type="text/javascript">
					parent.location.assign('../inicio.php');
				</script>
				<?
				break;
			case '2014':
				?>
				<script type="text/javascript">
					parent.location.assign('../inicio.php');
				</script>
				<?
				break;
			case '2013':
				?>
				<script type="text/javascript">
					parent.location.assign('../inicio.php');
				</script>
				<?
				break;
			case '2012':
				?>
				<script type="text/javascript">
					parent.location.assign('../inicio.php');
				</script>
				<?
				break;
			case '2011':
				?>
				<script type="text/javascript">
					parent.location.assign('../inicio.php');
				</script>
				<?
				break;
			case '2010':
				?>
				<script type="text/javascript">
					parent.location.assign('../inicio.php');
				</script>
				<?
				break;
			case '2009':
				?>
				<script type="text/javascript">
					parent.location.assign('../inicio.php');
				</script>
				<?
				break;
			case '2008':
				?>
				<script type="text/javascript">
					parent.location.assign('../inicio.php');
				</script>
				<?
				break;
			case '2007':
				?>
				<script type="text/javascript">
					parent.location.assign('../inicio.php');
				</script>
				<?
				break;
		}
			

	} elseif ($_SESSION['rol'] == 'registrado') {

		switch ($_GET['sec']) {
			case '2017':
				include 'campeonatos.php';
				break;
			case '2016':
				include 'campeonatos.php';
				break;
			case '2015':
				include 'campeonatos.php';
				break;
			case '2014':
				include 'campeonatos.php';
				break;
			case '2013':
				include 'campeonatos.php';
				break;
			case '2012':
				include 'campeonatos.php';
				break;
			case '2011':
				include 'campeonatos.php';
				break;
			case '2010':
				include 'campeonatos.php';
				break;
			case '2009':
				include 'campeonatos.php';
				break;
			case '2008':
				include 'campeonatos.php';
				break;
			case '2007':
				include 'campeonatos.php';
				break;
		}
	} else {
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?
	}
?>