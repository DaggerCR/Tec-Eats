<?php
    session_start();
    require '../dbcon.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insertar tiempo de comida TEC Eats</title>

	<link rel="stylesheet"  href="../css/bootstrap.css">

	
</head>
<body class="container">
	<div class="container mt-5 "  align="center">
		<h1>Insertar tiempo de comida TEC Eats</h1>
		<form action="InsertarTiempo.php" method="POST">
			<div class="form-group">
			<div class="col-sm-10 mb-4 mt-5" >   
				<input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="Nombre">
			</div>
			</div>

			<button type="submit" class="btn btn-light mt-5" name="insertar_tiempo" > <h2>Agregar</h2> </button>
			<!-- href="../index.html" -->
			
		</form>

	</div>
	
	
	<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>