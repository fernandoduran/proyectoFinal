<?php

	/*
	 * Devuelve la fecha en formato dd/mm/aaaa
	 */
	function d ($fecha){
		
		$val = explode('/',$fecha);
		
		$ret = $val[2].'/'.$val[1].'/'.$val[0];
		if ($ret=='//' or $ret=='--') $ret='';
		return $ret;
	}

	/*
	 * Devuelve la fecha en formato dd-mm-aaaa
	 */
	function d2($fecha){
	
		$val=explode('-',$fecha);
		
		$ret = $val[2].'-'.$val[1].'-'.$val[0];
		if ($ret=='//' or $ret=='--') $ret='';
		return $ret;
	}

	/*
	 * Transforma una fecha dada en formato yyyy-mm-dd
	  * al formato dd/mm/aaaa
	 */
	function d3($fecha){
		//Transforma una fecha del format yyyy-mm-dd al format dd/mm/yyy
		$val=explode('-',$fecha);

		$ret = $val[2].'/'.$val[1].'/'.$val[0];
		if ($ret=='//' or $ret=='--') $ret='';
		return $ret;
	}
?>