<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link rel="short icon" type="./imagenes/logo.png" href="../imagenes/logo.jpg">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
</head>
<body>
	<header>
    <nav class="menu">
      <ul>
        <li><a href="./index.html">INICIO</a></li>
        <li><a href="#">Calculadora</a></li>
      </ul>
    </nav>
</header>
	<form method="post" action="calculadora.php">
		<input type="text" name="numero1">
		<select name="opciones">
			<option value="0">Sumar</option>
			<option value="1">Restar</option>
			<option value="2">Multipicar</option>
			<option value="3">Dividir</option>
		</select>
		<input type="text" name="numero2"><br>
		<input type="submit" name="calcular" value="Calcular">
	</form>

</body>
</html>

<?php

include("clase.php");
if (isset($_REQUEST['calcular'])) {
	# code...
	$n1=$_REQUEST['numero1'];
	$n2=$_REQUEST['numero2'];
	$op=$_REQUEST['opciones'];

	switch ($op) {
		case 0:echo "$n1 + $n2 = ".matematica::sumar($n1,$n2);break;
		case 1:echo "$n1 - $n2 = ".matematica::restar($n1,$n2);break;
		case 2:echo "$n1 x $n2 = ".matematica::multiplicar($n1,$n2);break;
		case 3:echo "$n1 / $n2 = ".matematica::dividir($n1,$n2);break;
	}
}
?>