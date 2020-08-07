<!DOCTYPE html>
<html>
<head>
	<title> Fahrenheit a celsius </title>
	<link rel="short icon" type="../imagenes/logo.png" href="../imagenes/logo.jpg">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
</head>
<style>
	body {
		font-family: arial;
		font-size: 12;
	}
</style>
<body>
	<header>
    <nav class="menu">
      <ul>
        <li><a href="index.html">INICIO</a></li>
        <li><a href="celsius.php">Celsius</a></li>
        <li><a href="vista_Calculadora.php">Calculadora</a></li>
        <li><a href="vista_factorial.php">Factorizacion</a></li>
      </ul>
    </nav>
</header>
<?php
error_reporting(0);
$fahrenheit = $_POST['fahrenheit'];
$celsius = $_POST['celsius'];

if (isset($_POST['convert'])) {
	# code...
	$f = $_POST['fahrenheit'];
	$c = ($f-32) * 5/9;
	$display = round($c,2)."". "°C";
}
if (isset($_POST['borrar'])) {
	# code...
	$fahrenheit = "";
	$celsius = "";
}

?>
<h3 >Fahrenheit y celsius</h3>
<table >
	<form name="temperature" method="post">
		<tr>
			<td>Temperatura en Fahrenheit</td>
			<td><input type="text" name="fahrenheit" value="<?php echo $fahrenheit; ?>" required autofocus></td>
		</tr>
		<tr>
			<tr><td>La temperatura de celsius es</td>
			<td><input type="text" name="celsius:" value="<?php echo $display; ?>"></td></tr>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Convert" name="convert"/>
				&nbsp;&nbsp;&nbsp;
				<input type="submit" value="Borrar" name="borrar"> 
			</td>
		</tr>
	</form>
</table>
</body>
</html>