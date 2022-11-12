
<?php
   error_reporting(0);
   require '../dbcon.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Desayuno TEC Eats</title>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js" type='text/javascript'></script>

	<link rel="stylesheet"  href="../css/bootstrap.css">

</head>
<body class="container">


<form action="Menu.php ?id=<?= $_GET['id']; ?>" method="POST">

	<div class="container mt-5 "  align="center" >
		<h2  class="mb-3" >Gracias!</h2>
		<br>
		<h5  class="mb-3" align="center" >Se ha facturado su compra</h5>
		
   <br>
		<input type="submit" class="btn btn-light mt-5" name="aceptar" value="Volver Al menú">
   <p id="text" style="display:none">Checkbox is CHECKED!</p>
   
	</div>	
	<br>

	
	
	<script src="../js/bootstrap.bundle.js"></script>         
</form>
</body>
</html>