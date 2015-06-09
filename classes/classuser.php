<?php
	require_once "dbclass.php";
	class Generica extends Dbclass
	{
		function __construct()
		{
			parent::__construct();
		}

		public function getValid($data = array(), $metadata)
		{
			switch ($metadata) {
				case 'login':
					 if(self::loginUser($data) == 1){
					 	echo "Logueado exitosamente";
					 }
					 else
					 {
					 	echo "fallas al autentificarse";
					 }
					break;
				case 'add':
					if (self::addMethod($data) > 0) {
						echo "Datos insertados correctamente";
					}
					else
					{
						echo "Hubo un error al insertar los datos";
					}
					break;
				case 'mod':
					break;
				default:
					break;
			}

			
		}
		protected function loginUser($dats= array())
		{
			# code...
			foreach ($dats as $key => $value) $$key = $value;
			$contrasena = md5($contrasena);

			$sql = "SELECT Username, Password FROM usuario WHERE Username = '".$this->conexion->real_escape_string($usuario)."' 
			AND Password = '".$this->conexion->real_escape_string($contrasena)."'";
			try {
				$resultado = $this->conexion->query($sql);
				if (!$resultado) {
					# code...
					throw new Exception("Error en la Base de datos [{$this->conexion->errno}] {$this->conexion->error}", 1);
					
				}
				$count = $resultado->num_rows;
				if ($count > 0) {
					# code...
					$mensaje = 1;
				}
				else
					$mensaje = 0;
				return $mensaje;
			} catch (Exception $e) {
				return "Lo sentimos, ocurrio un error al generar la consulta ".$e;
			}
		}
		//metodo que agregará datos generico a las tablas
		protected function addMethod($valueMethod= array())
		{
			foreach ($valueMethod as $key => $value) $$key = $value;
			switch ($bandera) {
				case 'altadependencia':
					 $sql = "INSERT INTO dependencia (Nombre, Direccion, Telefono, Responsable, Correo) 
					VALUES ('".utf8_decode($txtDependencia)."','".utf8_decode($txtDireccion)."','".$txtTelefono."','".utf8_decode($txtTitular)."','".$txtEmail."')";
					break;
				case 'altaprograma':
					 $sql ="INSERT INTO programa( Nombre, Descripcion, Responsable, Poblacion_objetivo, Sector, Anio_inicio, Iddependecia, Convocatoria) 
					VALUES ('".$txtNombre."','".$txtDescripcion."','".$txtResponsable."','".$txtPoblacion."','".$txtSector."','".$anioinicio."','".$selDependencia."','http://www.google.com')";
					break;
				default:
					break;
			}
			try {	
				$resultado = $this->conexion->query($sql);
				if (!$resultado) {
					throw new Exception("Error en la Base de datos [{$this->conexion->errno}] {$this->conexion->error}", 1);
				}
				else
				$lastId = $this->conexion->insert_id;
				return $lastId;
			} catch (Exception $e) {
				return "Lo sentimos, ocurrio un error al generar la consulta ".$g->getMessage();
			}
		}
	}
?>