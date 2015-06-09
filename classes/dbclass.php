<?php
	/**
	* clase de conexion a la base de datos
	* definimos constantes de conexion
	*/
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', 'SQl11386703.');
	define('DBNAME', 'mydb');
	define('DBCHARSET', 'utf-8');

	class Dbclass 
	{
		# Se protege la variable para la conexión. Solo esta clase puede acceder a ella.
		protected $conexion;
		function __construct()
		{
			try {
				# Se configuran la cadena para la conexión
				$this->conexion = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
				if ($this->conexion->connect_errno) {
					# Hubo un problema al conectar con la base de datos.
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