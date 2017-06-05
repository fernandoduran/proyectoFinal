<?php

	$carrera = new Carrera();
	$connect -> query("SET NAMES 'utf8'");
	$sql = $connect -> query('SELECT id, nom_carrera FROM  carrera WHERE data_carrera LIKE "'.$_POST['fAny'].'%');

	while ($row = $sql -> fetch_array()) {
		
		$carrera -> _setId($row['id']);
		$carrera -> _setnomCarrera($row['nom_carrera']);

		echo "<option value='".$carrera -> getId()."'>".$carrera -> getNomCarrera()."</option>";

	}
?>