
<?php
   error_reporting(0);
   require '../dbcon.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ver Plato principal del desayuno</title>

	<link rel="stylesheet"  href="../css/bootstrap.css">


	<script>
	function Ver(){
		var cuentaE;
		
		cuentaE = document.getElementById('CuenS');
		console.log(cuentaE.value);
		location.href="VerCuentas.php ?ban=true  & id=<?= $_GET['id']; ?>& CuentaE="+cuentaE.value;
		
	};
			
	</script>
	
			

<body class="container p-5">
	

	<div class="mt-5 "  align="center" >
		<h1>Plato principal del desayuno</h1>
		<select class="form-select" aria-label="Default select example" id="CuenS" name="CuentaSelect">
		<option selected>Plato Principal</option>
		
		<?php
            $query = "SELECT * FROM comidas WHERE tipo_id= 1 and tiempo_id = 1";
			$query_run = mysqli_query($con, $query);

			if(mysqli_num_rows($query_run) > 0)
			{
				foreach($query_run as $Comida)
				{				
		?>	
					<option><?=$Comida['nombre']?></option>	
					<?php
				} 
			}
			?>
		</select>

		<a type="button" class="btn btn-light mt-3"  onclick="Ver()"> <h4>Agregar al Carrito</h4> </a>
		<script src="../js/bootstrap.bundle.js"></script>
	</div>
</body>
</html>