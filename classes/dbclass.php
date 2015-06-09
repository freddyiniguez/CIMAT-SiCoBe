<?php
	/**
	* clase de conexion a la base de datos
	* definimos constantes de conexion
	*/
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'mydb');
	define('DBCHARSET', 'utf-8');

	class Dbclass 
	{
		# variable protegida
		protected $conexion;
		function __construct()
		{
			# code...
			try {
				#linea de conexión
				$this->conexion = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
				if ($this->conexion->connect_errno) {
					# code...
					//echo "fallo al conectar a MYSQL: (". $this->conectar->connect_errno . ")". $this->conectar->connect_error;
					header('Location: error-conexion.php');
					exit;
				}
				 $this->conexion->set_charset(DBCHARSET);
				 return $this->conexion;
			} catch (Exception $e) {
				echo "excepción a la hora de generar la conexion";
				exit;
			}
		}
	}
?>