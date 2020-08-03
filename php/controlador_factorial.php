<?php
//post los envia de manera oculta o encriptada
// get los evia de manera muy visual, y lo puedo ver en la url del navegador
//extraer todos los datos del formulario

extract($_GET);
//solicitar el archivo donde sencuentra el modelo
require_once 'modelo_factorial.php';
//Crear un objeto para poderlo utilizar
//intanciacion
$objFactorial = new factorial();
$objFactorial->Setvalor($num);
$objFactorial->CalculaFactorial();
$objFactorial->Getvalor();

require_once 'vista_factorial.php';

?>