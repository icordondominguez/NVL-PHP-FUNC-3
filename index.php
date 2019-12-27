<?php
	$texto = "Upgrade Hub";
	comprobarVocales($texto);
	
	function comprobarVocales($texto)
	{
		// ponemos la cadena en minusculas por si nos meten alguna mayuscula
		$texto = strtolower($texto);

		// transformamos la cadena en array para poder buscar las vocales
		$arr = str_split($texto);

		// utilizamos la funcion in_array() para comprobar si cada una de las vocales esta en el array, si lo estan, nos devolvera true y un mensaje
		if(in_array("a", $arr) and in_array("e", $arr) and in_array("i", $arr) and in_array("o", $arr) and in_array("u", $arr)) {
			echo "LA PALABRA CONTIENE LAS 5 VOCALES";
		}
		else{
			echo "LA PALABRA NO CONTIENE TODAS LAS VOCALES";
		}
	}
?>