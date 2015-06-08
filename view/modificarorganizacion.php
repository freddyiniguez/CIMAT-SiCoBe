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
	<div style="margin: 0 auto;">
<!-- Form Name -->
<legend>Modificar Datos de la Organización</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="rfc">Rfc</label>
  <div class="controls">
    <input id="rfc" name="rfc" placeholder="Rfc" readonly class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nombreorganizacion">Nombre:</label>
  <div class="controls">
    <input id="nombreorganizacion" name="nombreorganizacion" placeholder="Nombre de la organización" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="domicilio">Domicilio:</label>
  <div class="controls">
    <input id="domicilio" name="domicilio" placeholder="Domicilio" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="titular">Titular </label>
  <div class="controls">
    <input id="titular" name="titular" placeholder="Titulat de la Organización" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="telefono">Teléfono:</label>
  <div class="controls">
    <input id="telefono" name="telefono" placeholder="Teléfono Organización" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="correo">e-mail</label>
  <div class="controls">
    <input id="correo" name="correo" placeholder="Correo eléctronico" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="add"></label>
  <div class="controls">
    <button id="add" name="add" class="btn btn-info">Modificar</button>
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