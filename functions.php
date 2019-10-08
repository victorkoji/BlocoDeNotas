<?php 
//$con = mysql_connect('HOSTNAME','USERNAME','PASSWORD');


	function limitString($texto, $limit){
		if(strlen($texto) > $limit){
			$novoTexto = substr($texto, 0, $limit);
			return $novoTexto . '...';
		}else{
			return $texto;
		}

	}

?>