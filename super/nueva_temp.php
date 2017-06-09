<?php echo titular('Nuevo reglamento')?>
 
 <script type="text/javascript">
	tinymce.init({
  	selector: 'textarea',
  	menubar: false,
  	height :100,
  	max_height: 100,
  	statusbar: false,
  	plugins: [
    'advlist lists'
  ],
  	toolbar: 'styleselect | bold italic | alignleft aligncenter alignright | cut copy undo  redo | bullist numlist outdent indent ',

	});
/*styleselect, formatselect, fontselect, fontsizeselect,*/
</script>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12 col-xs-12">
			<form action="" method="POST">
				<h4><span class="label label-info">Año</span></h4>
				<input type="text" name="fAny" class="form-control">
				<h4><span class="label label-info">Reglamento</span></h4>
				<textarea name="fReglamento"></textarea>
				<br><br>
				<button type="submit" class="btn btn-success" name="fInsertaReglamento">Inserta</button>
			</form>
		</div>
	</div>
</div>