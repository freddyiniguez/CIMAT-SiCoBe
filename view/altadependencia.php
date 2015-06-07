<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>SiCoBe</title>
  <meta name="description" content="Sistema de Control de Beneficiarios para mejorar el control de los recursos asignados.">
  <link href="../css/style.css" rel="stylesheet" type="text/css">
  <!---->
  <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
	<div style="margin: 0 auto;">
		<!--Nombre de la dependecia-->
		<div class="control-group">
		  <label class="control-label" for="singlebutton">Nombre de la Dependecía:</label>
		  <div class="controls">
		    <input type="text" class="input-xlarge" name="dependecia" placeholder="Nombre de la dependecía"/>
		  </div>
		</div>
		<!--dirección-->
		<div class="control-group">
		  <label class="control-label" for="singlebutton">Dirección:</label>
		  <div class="controls">
		    <input type="text" class="input-xlarge" name="direccion" placeholder="Dirección"/>
		  </div>
		</div>
		<!--titular-->
		<div class="control-group">
		  <label class="control-label" for="singlebutton">Titular:</label>
		  <div class="controls">
		    <input type="tel" class="input-xlarge" name="titular" placeholder="Titular de la dependecía"/>
		  </div>
		</div>
		<!--telefono-->
		<div class="control-group">
		  <label class="control-label" for="singlebutton">Teléfono:</label>
		  <div class="controls">
		    <input type="tel" class="input-xlarge" name="telefono" placeholder="Ingresar telefono"/>
		  </div>
		</div>
		<!--correo electronico-->
		<div class="control-group">
		  <label class="control-label" for="singlebutton">e-mail:</label>
		  <div class="controls">
		    <input type="email" class="input-xlarge" placeholder="Correo electrónico"/>
		  </div>
		</div>
		<!--boton-->
		<div class="control-group">
		  <label class="control-label" for="singlebutton"></label>
		  <div class="controls">
		  	<input type="submit" id="singlebutton" name="singlebutton" class="btn btn-success" value="Agregar" />
		  </div>
		</div>
	</div>
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