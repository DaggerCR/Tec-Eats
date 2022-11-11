<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu de Gestion de comidas TEC Eats</title>

	<link rel="stylesheet"  href="../css/bootstrap.css">

</head>
<body class="container">
	<div class="container mt-5 "  align="center" >
		<h2  class="mb-3">Menu de Gestion de comidas TEC Eats</h2>

		<div class="container mb-4 d-block ">
			<a type="button" class="btn  btn-light"  href="GestionComidasIns.php ?ban=false & id=<?= $_GET['id']; ?>">Agregar comida</a>
		</div>
		
		<div class="container mb-4 d-block ">
			<a type="button" class="btn btn-light"  href="GestionComidasUpd.php ?id=<?= $_GET['id']; ?>">Modificar comida</a>
		</div>

		<div class="container mb-4 d-block ">
			<a type="button" class="btn btn-light"  href="GestionComidasDel.php ?id=<?= $_GET['id']; ?>">Eliminar comida</a>
		</div>

		<div class="container mb-4 d-block ">
			<a type="button" class="btn btn-light"  href="../index.php">Salir</a>
		</div>

	</div>
	<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>