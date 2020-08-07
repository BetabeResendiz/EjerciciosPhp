<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculadora</title>
	<link rel="short icon" type="./imagenes/logo.png" href="../imagenes/logo.jpg">
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
    <script src="../js/funcion.js"></script>
</head>
<body>
	<header>
    <nav class="menu">
      <ul>
        <li><a href="calculadora.php">Calculadora</a></li>
        <li><a href="vista_factorial.php">Factorizacion</a></li>
        <li><a href="celsius.php">Celsius</a></li>
      </ul>
    </nav>
</header>
	<form action="calculadora.php" method="post">
		<label>valor 1</label>
		<p></p>
		<input type="text" name="val1">
		<p></p>
		<label>valor 2</label>
		<p></p>
		<input type="text" name="val2">
		<p></p>
		<select name="opcion">
			<option value="suma">suma</option>
			<option value="resta">resta</option>
			<option value="division">division</option>
			<option value="multiplicacion">multiplicacion</option>
		</select>
		<p></p>
		<button>Calcular</button>
	</form>
<?php
			if (isset($_POST['mostrar']))
				echo $calcularDatos;
		?>
</body>
</html>
