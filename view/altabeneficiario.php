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
<h2 class="title">Alta de Beneficiarios</h2>
    <form class="form-horizontal">

<br>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtNombre">Nombre:</label>
  <div class="controls">
    <input id="txtNombre" name="txtNombre" type="text" placeholder="" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtApellidos">Apellidos:</label>
  <div class="controls">
    <input id="txtApellidos" name="txtApellidos" type="text" placeholder="" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtRfc">RFC:</label>
  <div class="controls">
    <input id="txtRfc" name="txtRfc" type="text" placeholder="" class="input-medium" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtCurp">CURP:</label>
  <div class="controls">
    <input id="txtCurp" name="txtCurp" type="text" placeholder="" class="input-medium" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtDomicilio">Domicilio:</label>
  <div class="controls">
    <input id="txtDomicilio" name="txtDomicilio" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtTelefono">Teléfono</label>
  <div class="controls">
    <input id="txtTelefono" name="txtTelefono" type="text" placeholder="" class="input-medium" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtEmail">e-mail:</label>
  <div class="controls">
    <input id="txtEmail" name="txtEmail" type="text" placeholder="" class="input-large" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="selEstado">Estado</label>
  <div class="controls">
    <select id="selEstado" name="selEstado" class="input-medium">
      <option>Activo</option>
      <option>Vetado</option>
    </select>
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