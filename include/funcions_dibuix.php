<?php
	session_start();

	//Titulos de las páginas

	function titular($titulo)
	{
		return '<div class="row">
					<div class="col-lg-12">
						<h3>'.$titulo.'</h3>
					</div>
				</div>';
	}
?>