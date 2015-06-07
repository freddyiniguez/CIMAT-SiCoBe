<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>SiCoBe</title>
  <meta name="description" content="Sistema de Control de Beneficiarios para mejorar el control de los recursos asignados.">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
  <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">

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
<h2 class="title">Alta de encargado</h2>
    <form class="form-horizontal" style="text-align:center">
<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="selectbasic">Dependencia</label>
  <div class="controls">
    <select id="selectbasic" name="selectbasic" class="input-large">
      <option>Seleccionar dependencia</option>
      <option>Dependencia 1</option>
      <option>Dependencia 2</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtEmpleado">No. de Empleado</label>
  <div class="controls">
    <input id="txtEmpleado" name="txtEmpleado" type="text" placeholder="" class="input-medium" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtNombre">Nombre</label>
  <div class="controls">
    <input id="txtNombre" name="txtNombre" type="text" placeholder="" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtApellidos">Apellidos</label>
  <div class="controls">
    <input id="txtApellidos" name="txtApellidos" type="text" placeholder="" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtRFC">RFC</label>
  <div class="controls">
    <input id="txtRFC" name="txtRFC" type="text" placeholder="" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtCURP">CURP</label>
  <div class="controls">
    <input id="txtCURP" name="txtCURP" type="text" placeholder="" class="input-large" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="selSex">Sexo</label>
  <div class="controls">
    <select id="selSex" name="selSex" class="input-medium">
      <option>Masculino</option>
      <option>Femenino</option>
      <option>Prefiero no especificar</option>
    </select>
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
  <label class="control-label" for="txtEmail">Correo Electrónico</label>
  <div class="controls">
    <input id="txtEmail" name="txtEmail" type="text" placeholder="" class="input-large" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="btnAceptar"></label>
  <div class="controls">
    <button id="btnAceptar" name="btnAceptar" class="btn btn-success">Aceptar</button>
    <button id="btnCancelar" name="btnCancelar" class="btn btn-danger">Cancelar</button>
  </div>
</div>
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

<a href="http://www.htmltemplates.net">
<img src="images/design_img.gif" class="copyright" alt="HTML Templates"></a>

</body>
</html>