<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sistema de Control de Beneficiarios</title>
  <meta name="description" content="Sistema de Control de Beneficiarios para mejorar el control de los recursos asignados.">
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
  <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="../images/favicon.ico" type="image/ico">
</head>
<body>
<div class="main">
<div class="page">
<div class="header">
<div class="header-img">
</div>
<nav>
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li class="item_selected">
        <a href="#">Dependencias</a>
        <ul class="fallback">
          <li><a href="altadependencia.php">Agregar dependencia</a></li>
          <li><a href="modificardependencia.php">Modificar dependencia</a></li>
          <li><a href="informaciondependencia.php">Información</a></li>
        </ul>
      </li>
    <li>
      <a href="#">Programas</a>
      <ul class="fallback">
        <li><a href="altaprograma.php">Agregar programa</a></li>
        <li><a href="modificarprograma.php">Modificar programa</a></li>
        <li><a href="informacionprograma.php">Información</a></li>
        <li><a href="registraraniofiscal.php">Registrar año fiscal</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Beneficiarios</a>
      <ul class="fallback">
        <li><a href="altaorganizacion.php">Agregar organización</a></li>
        <li><a href="altabeneficiario.php">Agregar beneficiario</a></li>
        <li><a href="modificarorganizacion.php">Modificar organización</a></li>
        <li><a href="modificarbeneficiario.php">Modificar beneficiario</a></li>
        <li><a href="consultarbeneficiario.php">Consultar</a></li>
      </ul>
    </li>
    <li><a href="about.php">Acerca de</a></li>
    </ul>
  </nav>
  </div>
<div class="content">
<div class="left-panel">
<div class="left-panel-in">
<h2 class="title">Alta de Dependencia</h2>
    <form class="form-horizontal">
		<!--Nombre de la dependecia-->
		<div class="control-group">
		  <label class="control-label" for="singlebutton">Nombre</label>
		  <div class="controls">
		    <input type="text" class="input-xlarge" name="txtDependencia" required=""/>
		  </div>
		</div>
		<!--dirección-->
		<div class="control-group">
		  <label class="control-label" for="singlebutton">Dirección</label>
		  <div class="controls">
		    <input type="text" class="input-xlarge" name="txtDireccion" required=""/>
		  </div>
		</div>
		<!--titular-->
		<div class="control-group">
		  <label class="control-label" for="singlebutton">Titular</label>
		  <div class="controls">
		    <input type="tel" class="input-xlarge" name="txtTitular" required=""/>
		  </div>
		</div>
		<!--telefono-->
		<div class="control-group">
		  <label class="control-label" for="singlebutton">Teléfono</label>
		  <div class="controls">
		    <input type="tel" class="input-xlarge" name="txtTelefono"/>
		  </div>
		</div>
		<!--correo electronico-->
		<div class="control-group">
		  <label class="control-label" for="singlebutton">e-mail</label>
		  <div class="controls">
		    <input type="email" class="input-xlarge" name="txtEmail"/>
		  </div>
		</div>
		<!--boton-->
		<div class="control-group">
		  <label class="control-label" for="singlebutton"></label>
		  <div class="controls">
		  	<button id="btnAceptar" name="btnRegistrar" class="btn btn-success">Registrar</button>
        <button id="btnCancelar" name="btnCancelar" class="btn btn-danger">Cancelar</button>
		  </div>
		</div>
	</form>
</div>
</div>
<div class="right-panel">
<div class="right-panel-in">
<h3>Áreas General</h3>
<ul>
  <li><a href="#">Ciencias Políticas<br>
    </a></li>
  <li><a href="../index.html#">Ciencias Económicas<br>
    </a></li>
  <li><a href="../index.html#">Ciencias Sociales y Administrativas<br>
    </a></li>
  <li><a href="../index.html#">Ingeniería y Tecnología<br>
    </a></li>
  <li><a href="../index.html#">Ciencias Jurídicas y Derecho<br>
    </a></li>
</ul>
</div>
</div>
</div>
<!-- FOOTER -->
<div class="footer">
<p>&copy; Copyright 2015. Creado por <a target="_blank" href="http://www.economia.gob.mx/">Secretaría de Economía</a> para el <a target="_blank" href="http://www.zacatecas.gob.mx/">Estado de Zacatecas</a>
</p>
</div>
</div>
</div>

</body>
</html>