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
      <li>
        <a href="#">Dependencias</a>
        <ul class="fallback">
          <li><a href="altadependencia.php">Agregar dependencia</a></li>
          <li><a href="modificardependencia.php">Modificar dependencia</a></li>
          <li><a href="altaencargado.php">Agregar encargado</a></li>
          <li><a href="modificarencargado.php">Modificar encargado</a></li>
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
    <li class="item_selected">
      <a href="#">Beneficiarios</a>
      <ul class="fallback">
        <li><a href="altaorganizacion.php">Agregar organización</a></li>
        <li><a href="altabeneficiario.php">Agregar beneficiario</a></li>
        <li><a href="inscribirorganizacion.php">Inscribir organización</a></li>
        <li><a href="inscribirbeneficiario.php">Inscribir beneficiario</a></li>
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
<h2 class="title">Consultas y Reportes</h2>
  <form class="form-horizontal">
	<div style="margin: 0 auto;">

    <!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="rbnTipo">Tipo de Beneficiario</label>
  <div class="controls">
    <label class="radio inline" for="rbnTipo-0">
      <input type="radio" name="rbnTipo" id="rbnTipo-0" value="Persona" checked="checked">
      Persona
    </label>
    <label class="radio inline" for="rbnTipo-1">
      <input type="radio" name="rbnTipo" id="rbnTipo-1" value="Organización">
      Organización
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="selBuscar">Buscar por</label>
  <div class="controls">
    <select id="selBuscar" name="selBuscar" class="input-medium">
      <option>CURP</option>
      <option>RFC</option>
      <option>Nombre</option>
      <option>Apellidos</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtBuscar"></label>
  <div class="controls">
    <input id="txtBuscar" name="txtBuscar" type="text" placeholder="Ingrese el dato a buscar" class="input-large" required="">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="rbnBuscar">Buscar</label>
  <div class="controls">
    <label class="radio inline" for="rbnBuscar-0">
      <input type="radio" name="rbnBuscar" id="rbnBuscar-0" value="Todos" checked="checked">
      Todos
    </label>
    <label class="radio inline" for="rbnBuscar-1">
      <input type="radio" name="rbnBuscar" id="rbnBuscar-1" value="Activos">
      Activos
    </label>
    <label class="radio inline" for="rbnBuscar-2">
      <input type="radio" name="rbnBuscar" id="rbnBuscar-2" value="Vetados">
      Vetados
    </label>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="btnBuscar"></label>
  <div class="controls">
    <button id="btnBuscar" name="btnBuscar" class="btn btn-primary">Buscar</button>
    <button id="btnCancelar" name="btnCancelar" class="btn btn-danger">Cancelar</button>
  </div>
</div>

 <table style="width:100%">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>CURP</th>
      <th>RFC</th>
      <th>Domicilio</th>
      <th>Teléfono</th>
      <th>e-mail</th>
      <th>Estado</th>
    </tr>
  </thead>
  <tr>
    <td>Juan</td>
    <td>Martínez</td>    
    <td>MAMJ</td>
    <td>MAMJ</td>
    <td>Río Grande, Zacatecas</td>
    <td>4981000000</td>
    <td>ejemplo@yahoo.com</td>
    <td>Activo</td>
  </tr>
  <tr>
    <td>Fredy</td>
    <td>Íñiguez</td>    
    <td>IILF</td>
    <td>IILF</td>
    <td>CIMAT, Zacatecas</td>
    <td>4921000000</td>
    <td>ejemplo@gmail.com</td>
    <td>Vetado</td>
  </tr>
</table>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="btnImprimir"></label>
  <div class="controls">
    <button id="btnImprimir" name="btnImprimir" style = "margin-top: 15px"class="btn btn-primary">Imprimir</button>
  </div>
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