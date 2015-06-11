<?php 
    require_once "../classes/classuser.php";
    $dependencia = new Generica();
    $var = $dependencia->selectMethod("selectprograma");
    $var2 = $dependencia->selectMethod("selectorganizacion");

    // Retorna valores get
    $retVal = (isset($_GET['act'])) ? $_GET['act'] : '' ;
    if ($retVal == 'ok') {
      ?>
      <script type="text/javascript">
        alert('Organizacion inscrita');
      </script>
      <?php
    }
    elseif ($retVal == 'error')
    {
      ?>
      <script type="text/javascript">
        alert('Error al insertar los datos. ya se encuentra registrado');
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
<h2 class="title">Inscribir Organización a un Programa</h2>
<form class="form-horizontal" method="post" action="../controllers/controladorinscribirorganizacion.php">

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="selPrograma">Programa</label>
  <div class="controls">
    <select id="selPrograma" name="selPrograma" class="input-xlarge">
      <option>Selecciona programa</option>
      <?php
        foreach ($var as $key) {
          # code...
      ?>
      <option value="<?php echo $key['Idprograma'];?>"><?php echo utf8_encode($key['Nombre']);?></option>
      <?php
       }
      ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="selOrganizacion">Organización</label>
  <div class="controls">
    <select id="selOrganizacion" name="selOrganizacion" class="input-xlarge">
      <option>Selecciona organización</option>
      <?php
        foreach ($var2 as $key) {
          # code...
      ?>
      <option value="<?php echo $key['Rfc'];?>"><?php echo utf8_encode($key['Nombre']);?></option>
      <?php
       }
      ?>
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="add"></label>
  <div class="controls">
    <button id="add" name="btnRegistrar" class="btn btn-success">Registrar</button>
    <button id="cancel" name="btnCancelar" class="btn btn-danger">Cancelar</button>
  </div>
</div>
  <input type="hidden" name="bandera" id="bandera" value="inscribirorganizacion">
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