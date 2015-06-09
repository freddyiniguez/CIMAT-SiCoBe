<?php
	require_once "dbclass.php";

	/**
	* 
	*/
	class Dependecia extends Dbclass
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
		}
		public function getDependencia($dato)
		{
			# code...
			return "Soy un Método :3 y mi variable es: ".$dato;
		}
	}
?>