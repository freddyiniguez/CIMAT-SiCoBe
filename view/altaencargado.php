<?php 
    require_once "../classes/classuser.php";
    $dependencia = new Generica();
    $var = $dependencia->selectMethod("selectdependencia");

    // Retorna valores get
    $retVal = (isset($_GET['act'])) ? $_GET['act'] : '' ;
    if ($retVal == 'ok') {
      # code...
      ?>
      <script type="text/javascript">
        alert('Encargado agregado correctamente');
      </script>
      
      <?php
    }
?>
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
    <li>
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
<h2 class="title">Alta de Encargado</h2>
<form class="form-horizontal" method="post" action="../controllers/controladorencargado.php">

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="selectbasic">Dependencia</label>
  <div class="controls">
    <select id="selectbasic" name="selDependencia" class="input-xlarge">
      <option>Selecciona dependencia</option>
      <?php
        foreach ($var as $key) {
          # code...
      ?>
      <option value="<?php echo $key['Iddependecia'];?>"><?php echo utf8_encode($key['Nombre']);?></option>
      <?php
       }
      ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtNoempleado">No. de Empleado</label>
  <div class="controls">
    <input id="txtNoempleado" name="txtNoempleado" type="text" placeholder="" class="input-medium" required="">
    
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
  <label class="control-label" for="txtRfc">RFC</label>
  <div class="controls">
    <input id="txtRfc" name="txtRfc" type="text" placeholder="" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="txtCurp">CURP</label>
  <div class="controls">
    <input id="txtCurp" name="txtCurp" type="text" placeholder="" class="input-large" required="">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="control-group">
  <label class="control-label" for="rbnSexo">Sexo</label>
  <div class="controls">
    <label class="radio inline" for="rbnSexo-0">
      <input type="radio" name="rbnSexo" id="rbnSexo-0" value="H" checked="checked">
      Masculino
    </label>
    <label class="radio inline" for="rbnSexo-1">
      <input type="radio" name="rbnSexo" id="rbnSexo-1" value="M">
      Femenino
    </label>
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
  <label class="control-label" for="txtEmail">e-mail</label>
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
<input type="hidden" name="bandera" id="bandera" value="altaencargado">
<input type="hidden" name="banderatipo" id="banderatipo" value="alta">
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