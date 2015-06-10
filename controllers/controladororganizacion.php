<?php
	/* 
	* Controlador.
	* Permite instanciar la clase encargada de actualizar un beneficiario.
	*/
	require_once "../classes/classuser.php";
	print_r($_POST);
	$tipoTransaccion = $_POST["banderatipo"];
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