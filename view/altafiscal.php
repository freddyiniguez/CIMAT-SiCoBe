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
<div class="menu">
<ul>
  <li><a href="../index.php">Home</a></li>
  <li class="item_selected"><a href="#">Dependencias</a></li>
  <li><a href="programas.php">Programas</a></li>
  <li><a href="beneficiarios.php">Beneficiarios</a></li>
  <li><a href="about.php">Acerca de</a></li>
</ul>
</div>
</div>
<div class="content">
<div class="left-panel">
<div class="left-panel-in">
<h2 class="title">Alta de Año Fiscal</h2>
    <form class="form-horizontal">
<!-- Text input-->
<div class="control-group">
  <br>
  <label class="control-label" for="txtaño">Año:</label>
  <div class="controls">
    <input id="txtaño" name="txtaño" type="text" placeholder="" class="input-medium" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtpresupuesto">Presupuesto:</label>
  <div class="controls">
    <input id="txtpresupuesto" name="txtpresupuesto" type="text" placeholder="" class="input-medium" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="btnRegistrar"></label>
  <div class="controls">
    <button id="btnRegistrar" name="btnRegistrar" class="btn btn-success">Registrar</button>
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
  <li><a href="index.html#">Ciencias Económicas<br>
    </a></li>
  <li><a href="index.html#">Ciencias Sociales y Administrativas<br>
    </a></li>
  <li><a href="index.html#">Ingeniería y Tecnología<br>
    </a></li>
  <li><a href="index.html#">Ciencias Jurídicas y Derecho<br>
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