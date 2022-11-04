<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Servicios</title>

	<link rel="stylesheet"  href="../css/bootstrap.css">

</head>
<body class="container">
	<div class="container mt-5 "  align="center" >
		<h2  class="mb-5 mt-6">Servicios</h2>
		<div class="container mb-4 d-block ">
			<a type="button" class="btn  btn-light"  href="Recargas.php ?id=<?= $_GET['id']; ?>">Recarga telefónica</a>
		</div>
		
		<div class="container mb-4 d-block ">
			<a type="button" class="btn btn-light"  href="PagoServiciosP.php ?id=<?= $_GET['id']; ?>">Pago de servicios públicos</a>
		</div>

		<div class="container mb-4 d-block ">
			<a type="button" class="btn btn-light"  href="PagoInternet.php ?id=<?= $_GET['id']; ?>">Pago de internet</a>
		</div>

		<div class="container mb-4 d-block ">
			<a type="button" class="btn btn-light"  href="PagoEdu.php ?id=<?= $_GET['id']; ?>">Pagar educación</a>
		</div>

		
	</div>
	<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>