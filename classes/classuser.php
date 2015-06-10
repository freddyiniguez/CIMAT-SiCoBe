<?php
	require_once "dbclass.php";

	/* 
	* Clase Generica.
	* Única clase para la actualización (altas, cambios y consultas) de los catálogos.
	*/
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
					if (self::addMethod($data) != -1) {
						return "true";
					}
					else
					{
						return "false";
					}
					break;
				case 'mod':
					break;
				default:
					break;
			}
		}

		/*
		* Método loginUser.
		* Encargado de la validación del usuario.
		*/
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
		
		/* 
		* Método addMethod.
		* Encargado de realizar todas las altas de los catálogos.
		*/
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
					VALUES ('".utf8_decode($txtNombre)."','".utf8_decode($txtDescripcion)."','".utf8_decode($txtResponsable)."','".utf8_decode($txtPoblacion)."','".utf8_decode($txtSector)."','".$anioinicio."','".$selDependencia."','".$txtUrl."')";
					break;
				case 'altabeneficiario':
					$sql ="INSERT INTO beneficiario( Rfc, Curp, Nombre, Apellidos, Domicilio, Telefonos, Correo, Estado) 
					VALUES ('".$txtRfc."','".$txtCurp."','".utf8_decode($txtNombre)."','".utf8_decode($txtApellidos)."','".utf8_decode($txtDomicilio)."','".$txtTelefono."','".$txtEmail."','".$rbnEstado."')";
					break;
				case 'altaaniofiscal':
					$sql ="INSERT INTO anio_fiscal( Anio, Presupuesto) 
					VALUES ('".$txtAnio."','".$txtpresupuesto."')";
					break;
				case 'altaorganizacion':
					$sql ="INSERT INTO organizacion( Rfc, Nombre, Domicilio, Titular, Telefono, Correo, Estado) 
					VALUES ('".$txtRFC."','".utf8_decode($txtNombre)."','".utf8_decode($txtDomicilio)."','".utf8_decode($txtTitular)."','".$txtTelefono."','".$txtEmail."','".$rbnEstado."')";
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
				$lastId = $this->conexion->affected_rows;
				return $lastId;
			} catch (Exception $e) {
				return "Lo sentimos, ocurrio un error al generar la consulta ".$e->getMessage();
			}
		}

		/* 
		* Método updateMethod.
		* Encargo de realizar todas las actualizaciones a los catálogos.
		*/
		protected function updateMethod($updateValue = array())
		{
			# code... extraemos los valores del arreglo post o get
			foreach ($updateValue as $key => $value) $$key = $value;
			switch ($bandera) {
				case 'modificardependencia':
					(isset($txtNombre)) ? strip_tags($txtNombre) : '' ;
					(isset($txtDireccion)) ? strip_tags($txtDireccion) : '' ;
					(isset($txtTitular)) ? strip_tags($txtTitular) : '' ;
					(isset($txtTelefono)) ? strip_tags($txtTelefono) : '' ;
					(isset($txtEmail)) ? strip_tags($txtEmail) : '' ;
					(isset($Iddependecia)) ? strip_tags($Iddependecia) : '' ;

					#preparamos la consulta usando sentencias preparadas
					$sql  = "UPDATE dependencia SET  Nombre = '".$txtNombre."',Direccion ='".$txtDireccion."', Telefono ='".$txtTelefono."', Responsable ='".$txtTitular."', Correo = '".$txtEmail."'
					 WHERE Iddependecia = '".$Iddependecia."'";
					break;
				case 'modificarbeneficiario':
					# code...
					$sql = "UPDATE beneficiario SET Rfc='".$txtRfc."', Curp ='".$txtCurp."', Nombre ='".$txtNombre."',Apellidos ='".$txtApellidos."', Domicilio = '".$txtDomicilio."',Telefonos ='".$txtTelefono."', Correo ='".$txtEmail."' WHERE 1";
					break;
				default:
					# code...
					break;
			}

			try {
				$result = $this->conexion->query($sql);
				if (!$result) {
					# code...
					throw new Exception("Error en la Base de datos [{$this->conexion->errno}] {$this->conexion->error}", 1);
				}
				return $this->conexion->affected_rows;
			} catch (Exception $e) {
				return "Lo sentimos, ocurrio un error al generar la consulta ".$e->getMessage();
			}

		}

		/* 
		* Método selectMethod.
		* Soporta las consultas a los catálogos del sistema.
		*/
		public function selectMethod($qry)
		{
			$arreglo = array();

			switch ($qry) {
				case 'selectprograma':
					# code...
					$sql = "SELECT Idprograma, Nombre, Responsable, Poblacion_objetivo, Sector, Anio_inicio, Iddependecia, Convocatoria FROM programa";
					break;
				case 'selectdependencia':
					# code...
					$sql = "SELECT Iddependecia, Nombre, Direccion, Telefono, Responsable, Correo FROM dependencia WHERE 1";
					break;
				default:
					# code...
					break;
			}
			# code... generamos la consulta

			try {
				$consulta = $this->conexion->query($sql);
				if (!$consulta) {
					# code...
					throw new Exception("Error en la Base de datos [{$this->conexion->errno}] {$this->conexion->error}", 1);
					
				}
				//recorremos el arreglo y lo enviamos a uno asociativo
				while ($rows = $consulta->fetch_assoc()) {
					# code...
					$arreglo[] = $rows;
				}

				return $arreglo;
			} catch (Exception $e) {
				return "Lo sentimos, ocurrio un error al generar la consulta ".$e->getMessage();
			}

		}
	}
?>