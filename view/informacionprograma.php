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
    <li class="item_selected">
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
<h2 class="title">Programas de la Secretaría de Economía</h2>
    <form class="form-horizontal">
      <table style="width:100%">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>URL</th>
      <th>Responsable</th>
      <th>Sector</th>
      <th>Año inicio</th>
    </tr>
  </thead>
    <tr>
    <td>Certificaciones MexicoFISRT</td>
    <td><a href="http://www.mexico-first.org/">México FIRST</a></td>    
    <td>Miguel Gómez</td>
    <td>Educativo</td>
    <td>2013</td>
  </tr>
  <tr>
    <td>PROIAT</td>
    <td><a href="http://www.economia.gob.mx/files/comunidad_negocios/industria_comercio/Proiat/convocatoria_PROIAT_2015.pdf">PROIAT</a></td>    
    <td>Lic. José Luis Martinez</td>
    <td>Tecnológico</td>
    <td>2011</td>
  </tr>
</table>
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