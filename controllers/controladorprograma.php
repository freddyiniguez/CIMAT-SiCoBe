<?php
	/* 
	* Controlador.
	* Permite instanciar la clase encargada de actualizar una dependencia.
	*/
	$tipoTransaccion = $_POST("banderatipo");
	require_once "../classes/classuser.php";
		$dependencia = new Generica();
		switch ($tipoTransaccion) {
			case 'alta':
				echo $add = $dependencia->getValid($_POST, "add");
				break;
			case 'modificar':
				echo $add = $dependencia->getValid($_POST, "mod");
			default:
				break;
		}
		
?>