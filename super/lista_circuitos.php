<?
	echo titular('Gestión circuitos');

	if($_SESSION['rol'] != 'super'){
		?>
		<script type="text/javascript">
			parent.location.assign('../inicio.php');
		</script>
		<?
	}
?>
