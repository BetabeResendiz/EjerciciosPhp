<?php

require_once "claseCal.php";
$calcular = new calculadora();

$val1=$_POST['val1'];
$val2=$_POST['val2'];
$opcion=$_POST['opcion'];

echo $calcular->calcularDatos($val1,$val2,$opcion);

require_once "vista_Calculadora.php";
?>
