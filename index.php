<!DOCTYPE html>
<html>
<head>
	<title>Facturas</title>
    <link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>

	<h1>Facturas Integratic</h1>

	<form action="" method="post">
        <img class="logo" src="logo-ejemplo.png" alt="Logo de ejemplo">
		<input type="submit" name="buscar" value="Buscar">
		<input type="submit" name="subir" value="Subir">

	</form>

	<?php

	if (isset($_POST['buscar'])) {
		header('Location: index_buscar.php');
		exit();
	}

	if (isset($_POST['subir'])) {
		header('Location: index_subir.php');
		exit();
	}

	?>

</body>
</html>