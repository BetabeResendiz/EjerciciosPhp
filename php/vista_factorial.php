<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Obtencion del importe en bruto</title>
	<link rel="stylesheet" type="text/css" href="estilo-php">
	<link rel="short icon" type="./imagenes/logo.png" href="./imagenes/logo.jpg">
	<link rel="stylesheet" type="text/css" href="./css/menu.css">
</head>
<body>
<header>
    <nav class="menu">
      <ul>
        <li><a href="index.html">INICIO</a></li>
        <li><a href="vista_factorial.php">Factorizacion</a></li>
      </ul>
    </nav>
</header>
<section>
	<h1> Capture el numero para calcular el factorial </h1>
	<form name="factori" action="controlador_factorial.php" method="GET" enctype="multipart/form-data">
		<label>Numero a calcular</label>
		<input type="text" name="num" min="1" max="10" required><br/>
		<input type="submit" name="calcular" value="Calcular">
	</form>

	
</section>
</body>
</html>

