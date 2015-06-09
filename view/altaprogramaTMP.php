<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>SiCoBe</title>
  <meta name="description" content="Sistema de Control de Beneficiarios para mejorar el control de los recursos asignados.">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <!---->
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main">
<div class="page">
<div class="header">
<div class="header-img">
<h1>SiCoBe</h1>
<p>Sistema de Control de Beneficiarios</p>
</div>
<div class="menu">
<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="dependencias.php">Dependencias</a></li>
  <li><a href="programas.php">Programas</a></li>
  <li class="item_selected"><a href="#">Beneficiarios</a></li>
  <li><a href="about.php">Acerca de</a></li>
</ul>
</div>
</div>
<div class="content">
<div class="left-panel">
<div class="left-panel-in">
<h2 class="title">Alta de dependecias</h2>
<form method="post" name="addprograma" action="../controllers/controladorprograma.php">
<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="dependecia">Dependecía</label>
  <div class="controls">
    <select id="dependencia" name="dependencia" class="input-xlarge">
      <option>Selecciona dependecia</option>
      <option value="1">Dependecia1</option>
      <option value="2">Dependecia2</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nombreprograma">Nombre:</label>
  <div class="controls">
    <input id="nombreprograma" name="nombreprograma" placeholder="Nombre del programa" class="input-xlarge" required="" type="text">
    
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
      <option>selecciona</option>
      <option value="1">opcion1</option>
      <option value="2">opcion2</option>
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
	
	<input type="hidden" name="bandera" id="bandera" value="altaprograma">

	</form>
</div>
</div>
<div class="right-panel">
<div class="right-panel-in">

<h3>Categories</h3>
<ul>
  <li><a href="#">Link item 1<br>
    </a></li>
  <li><a href="index.html#">Link item 2<br>
    </a></li>
  <li><a href="index.html#">Link item 3<br>
    </a></li>
  <li><a href="index.html#">Link item 4<br>
    </a></li>
  <li><a href="index.html#">Link item 5<br>
    </a></li>
  <li><a href="index.html#">Link item 6<br>
    </a></li>
</ul>
<h3>Blogroll</h3>
<ul>
  <li><a href="#">Blogroll link 1<br>
    </a></li>
  <li><a href="index.html#">Blogroll link 2<br>
    </a></li>
  <li><a href="index.html#">Blogroll link 3<br>
    </a></li>
  <li><a href="index.html#">Blogroll link 4<br>
    </a></li>
  <li><a href="index.html#">Blogroll link 5<br>
    </a></li>
  <li><a href="index.html#">Blogroll link 6<br>
    </a></li>
</ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
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