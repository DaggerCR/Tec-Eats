<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu TEC Eats</title>

	<link rel="stylesheet"  href="../css/bootstrap.css">

</head>
<body class="container">
	<div class="container mt-5 "  align="center" >
		<h2  class="mb-3">Menu TEC Eats</h2>

		<div class="container mb-4 d-block ">
			<a type="button" class="btn  btn-light"  href="Desayuno.php ?id=<?= $_GET['id']; ?>">Desayuno</a>
		</div>
		
		<div class="container mb-4 d-block ">
			<a type="button" class="btn btn-light"  href="Almuerzo.php ?id=<?= $_GET['id']; ?>">Almuerzo</a>
		</div>
		
		<div class="container mb-4 d-block ">
			<a type="button" class="btn btn-light"  href="Cafe.php ?id=<?= $_GET['id']; ?>">Cafe</a>
		</div>

		<div class="container mb-4 d-block ">
			<a type="button" class="btn btn-light"  href="Cena.php ?id=<?= $_GET['id']; ?>">Cena</a>
		</div>

		<div class="container mb-4 d-block ">
			<a type="button" class="btn btn-light"  href="VerCarrito.php ?id=<?= $_GET['id']; ?>">Ver carrito de compras</a>
		</div>

		<div class="container mb-4 d-block ">
			<a type="button" class="btn btn-light"  href="Transferencias.php ?id=<?= $_GET['id']; ?>">Ver mi historial</a>
		</div>

		<div class="container mb-4 d-block ">
			<a type="button" class="btn btn-light"  href="../index.php">Salir</a>
		</div>

	</div>
	<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>