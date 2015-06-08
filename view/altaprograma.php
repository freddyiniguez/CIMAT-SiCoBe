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
          <li><a href="altadependencia.php">Agregar</a></li>
          <li><a href="modificardependencia.php">Editar</a></li>
          <li><a href="consultardependencia.php">Mostrar</a></li>
        </ul>
      </li>
    <li  class="item_selected">
      <a href="#">Programas</a>
      <ul class="fallback">
        <li><a href="altaprograma.php">Agregar</a></li>
        <li><a href="consultarprograma.php">Consultar</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Beneficiarios</a>
      <ul class="fallback">
        <li><a href="altabeneficiario.php">Agregar</a></li>
        <li><a href="buscarbeneficiario.php">Buscar</a></li>
        <li><a href="historialbeneficiario.php">Historial</a></li>
      </ul>
    </li>
    <li><a href="about.php">Acerca de</a></li>
    </ul>
  </nav></div>
<div class="content">
<div class="left-panel">
<div class="left-panel-in">
<h2 class="title">Alta de Programas</h2>
	<div style="margin: 0 auto;">
<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="selectbasic">Dependencia</label>
  <div class="controls">
    <select id="selectbasic" name="selectbasic" class="input-xlarge">
      <option>Selecciona dependencia</option>
      <option>Dependencia 1</option>
      <option>Dependencia 2</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nombreprograma">Nombre:</label>
  <div class="controls">
    <input id="nombreprograma" name="nombreprograma" placeholder="Nombre del programa" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="descripcionprograma">Descripción</label>
  <div class="controls">
    <input id="descripcionprograma" name="descripcionprograma" placeholder="Descripción del programa" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="responsableprograma">Responsable</label>
  <div class="controls">
    <input id="responsableprograma" name="responsableprograma" placeholder="Responsable del programa" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="sectorprograma">Sector</label>
  <div class="controls">
    <input id="sectorprograma" name="sectorprograma" placeholder="Sector al que pertenece" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="poblacionobjetivo">Población</label>
  <div class="controls">
    <input id="poblacionobjetivo" name="poblacionobjetivo" placeholder="Población Objetivo" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="anioinicio">Año Inicio</label>
  <div class="controls">
    <select id="anioinicio" name="anioinicio" class="input-xlarge">
      <option>Selecciona</option>
      <option>Opción 1</option>
      <option>Opción 2</option>
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="add"></label>
  <div class="controls">
    <button id="add" name="add" class="btn btn-success">Agregar</button>
    <button id="cancel" name="cancel" class="btn btn-danger">Cancelar</button>
  </div>
</div>

	</div>
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