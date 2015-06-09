<?php
	require_once "../classes/classuser.php";
		# code... instanciamos la clase
		$addprogram = new Generica();
		//invocamos el metodo
		echo $add = $addprogram->getValid($_POST, "add");

?>