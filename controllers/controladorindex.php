<?php
  	require_once "classes/dependecia.php";
  	#instanciar clase
    $deps = new Dependecia();
    $variable  = "esto es una viriable";
    if (isset($variable) ? $variable : "") {
    	# code...
    	echo $deps->getDependencia($variable);
    }
    
?>