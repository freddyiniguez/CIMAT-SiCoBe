<?php
	/* 
	* Controlador.
	* Permite instanciar la clase encargada de actualizar un programa.
	*/
	require_once "../classes/classuser.php";
	$tipoTransaccion = $_POST["banderatipo"];
		$dependencia = new Generica();
		switch ($tipoTransaccion) {
			case 'alta':
				$add = $dependencia->getValid($_POST, "add");
				if($add == 'true'){
					header("Location: ../view/altaencargado.php?act=ok");
				}
				break;
			case 'modificar':
				echo $add = $dependencia->getValid($_POST, "mod");
			default:
				break;
		}
?>