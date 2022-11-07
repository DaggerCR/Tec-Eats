
<?php
   error_reporting(0);
   require '../dbcon.php';

?>

<?php
	if(isset($_POST['save']) && $_POST['save']=='Save')
	{	
		//si se toca el botón de agregar comida, se ejecuta este código que aún no está terminado
		$query = "SELECT * FROM comidas WHERE tipo_id= 1 and tiempo_id = 1";
		$query_run = mysqli_query($con, $query);
						
	}

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


<form action="" method="POST">

	<div class="container mt-5 "  align="center" >
		<h2  class="mb-3" >Desayuno</h2>
		<h5  class="mb-3" align="left" >Plato Principal</h5>
			
		<div class="container mb-4 d-block ">
		<select class="form-select" aria-label="Default select example" id="PlatoPrincipal" name="PlatoPrincipal">
			<option selected>Ninguno</option>
			
			<?php
				$query = "SELECT * FROM comidas WHERE tipo_id= 1 and tiempo_id = 1";
				$query_run = mysqli_query($con, $query);

				if(mysqli_num_rows($query_run) > 0)
				{
					foreach($query_run as $Comida)
					{				
			?>	
						<option><?=$Comida['nombre']?> - ₡<?=$Comida['precio']?></option>	
						<?php
					} 
				}
				?>
		</select>
		
		</div>
		<h5  class="mb-3" align="left" >Adicional</h5>
		<div class="container mb-4 d-block ">
			<select class="form-select" aria-label="Default select example" id="CuenS" name="Adicional">
		<option selected>Ninguno</option>
		
		<?php
            $query = "SELECT * FROM comidas WHERE tipo_id= 2 and tiempo_id = 1";
			$query_run = mysqli_query($con, $query);

			if(mysqli_num_rows($query_run) > 0)
			{
				foreach($query_run as $Comida)
				{				
		?>	
					<option><?=$Comida['nombre']?> - ₡<?=$Comida['precio']?></option>	
					<?php
				} 
			}
			?>
		</select>
		</div>
		<h5  class="mb-3" align="left" >Bebida</h5>
		<div class="container mb-4 d-block ">
			<select class="form-select" aria-label="Default select example" id="CuenS" name="Bebida">
		<option selected>Ninguna</option>
		
		<?php
            $query = "SELECT * FROM comidas WHERE tipo_id= 3 and tiempo_id = 1";
			$query_run = mysqli_query($con, $query);

			if(mysqli_num_rows($query_run) > 0)
			{
				foreach($query_run as $Comida)
				{				
		?>	
					<option><?=$Comida['nombre']?> - ₡<?=$Comida['precio']?></option>	
					<?php
				} 
			}
			?>
		</select>
		</div>
		<h5  class="mb-3" align="left" >Postre</h5>
		<div class="container mb-4 d-block ">
			<select class="form-select" aria-label="Default select example" id="CuenS" name="Postre">
		<option selected>Ninguno</option>
		
		<?php
            $query = "SELECT * FROM comidas WHERE tipo_id= 4 and tiempo_id = 1";
			$query_run = mysqli_query($con, $query);

			if(mysqli_num_rows($query_run) > 0)
			{
				foreach($query_run as $Comida)
				{				
		?>	
					<option><?=$Comida['nombre']?> - ₡<?=$Comida['precio']?></option>	
					<?php
				} 
			}
			?>
		</select>
		</div>
		<h5  class="mb-3" align="left" >Total: </h5>
		
	</div>
	<input name="col_title" id="col_title" align="left"/>
	<div class="mt-5 "  align="center" >
		<a href="confirmacion.html">
			<input type="submit" class="btn btn-success form-control" name="save" value="Agregar al carrito">
		</a>
	<script type='text/javascript'>

        $("#PlatoPrincipal").change(function()
		{
            $("#PlatoPrincipal").children().each(function()
			{
                if(this.value == $('#PlatoPrincipal').val())
				{
                    $("#col_title").val(this.innerHTML);
                }
            });
            // console.log($("#col_title").val());
        });

    </script>
	</div>
	
	<script src="../js/bootstrap.bundle.js"></script>
	
</form>
</body>
</html>