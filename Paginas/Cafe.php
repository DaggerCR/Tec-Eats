
<?php
   error_reporting(0);
   require '../dbcon.php';

?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Café TEC Eats</title>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js" type='text/javascript'></script>

	<link rel="stylesheet"  href="../css/bootstrap.css">

</head>
<body class="container">

	<div class="container mt-5 "  align="center" >
		<h2  class="mb-3" >Café</h2>
		<h5  class="mb-3" align="left" >Plato Principal</h5>
			
		<div class="container mb-4 d-block ">
		<select class="form-select" aria-label="Default select example" id="PlatoPrincipal" name="PlatoPrincipal">
			<option selected>Ninguno</option>
			
			<?php
				$query = "SELECT * FROM comidas WHERE tipo_id= 1 and tiempo_id = 3";
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
			<select class="form-select" aria-label="Default select example" id="Adicional" name="Adicional">
		<option selected>Ninguno</option>
		
		<?php
            $query = "SELECT * FROM comidas WHERE tipo_id= 2 and tiempo_id = 3";
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
			<select class="form-select" aria-label="Default select example" id="Bebida" name="Bebida">
		<option selected>Ninguna</option>
		
		<?php
            $query = "SELECT * FROM comidas WHERE tipo_id= 3 and tiempo_id = 3";
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
			<select class="form-select" aria-label="Default select example" id="Postre" name="Postre">
		<option selected>Ninguno</option>
		
		<?php
            $query = "SELECT * FROM comidas WHERE tipo_id= 4 and tiempo_id = 3";
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
		
		
	</div>
	
	<form action="InsertarCarrito.php ?id=<?= $_GET['id']; ?>" method="POST">
		<h5  class="mb-3" align="left" >Comida: </h5>
		<input class="form-control" name="col_title2" id="col_title2" value=''align="left"/>
		
		<h5  class="mb-3" align="left" >Total: </h5>
		<input class="form-control" name="col_title" id="col_title" value='0'align="left"/>
		
		<button type="submit" class="btn btn-light mt-5" name="registrar_carrito"> Agregar al carrito</button>		
	</form>
	
	<script type='text/javascript'>

        $("#PlatoPrincipal").change(function()
		{
            $("#PlatoPrincipal").children().each(function()
			{
                if(this.value == $('#PlatoPrincipal').val())
				{
					var precio = $('#PlatoPrincipal').val().split(" -");
					var suma = $("#col_title2").val() + precio[0] + ",";
                    $("#col_title2").val(suma);
                }
            });
            // console.log($("#col_title").val());
        });
		
		$("#Adicional").change(function()
		{
            $("#Adicional").children().each(function()
			{
                if(this.value == $('#Adicional').val())
				{
					var precio = $('#Adicional').val().split(" -");
					var suma = $("#col_title2").val() + precio[0] + ",";
                    $("#col_title2").val(suma);
                }
            });
            // console.log($("#col_title").val());
        });
		
		$("#Bebida").change(function()
		{
            $("#Bebida").children().each(function()
			{
                if(this.value == $('#Bebida').val())
				{
					var precio = $('#Bebida').val().split(" -");
					var suma = $("#col_title2").val() + precio[0] + ",";
                    $("#col_title2").val(suma);
                }
            });
            // console.log($("#col_title").val());
        });
		
		$("#Postre").change(function()
		{
            $("#Postre").children().each(function()
			{
                if(this.value == $('#Postre').val())
				{
					var precio = $('#Postre').val().split(" -");
					var suma = $("#col_title2").val() + precio[0] + ",";
                    $("#col_title2").val(suma);
                }
            });
            // console.log($("#col_title").val());
        });

    </script>
	
	
	<script type='text/javascript'>

        $("#PlatoPrincipal").change(function()
		{
            $("#PlatoPrincipal").children().each(function()
			{
                if(this.value == $('#PlatoPrincipal').val())
				{
					var precio = $('#PlatoPrincipal').val().split("₡");
					var suma = parseInt(precio[1]) + parseInt($("#col_title").val());
                    $("#col_title").val(suma);
                }
            });
            // console.log($("#col_title").val());
        });

    </script>
	
	<script>
		$("#Adicional").change(function()
			{
				$("#Adicional").children().each(function()
				{
					if(this.value == $('#Adicional').val())
					{
						var precio = $('#Adicional').val().split("₡");
						var suma = parseInt(precio[1]) + parseInt($("#col_title").val());
						$("#col_title").val(suma);
					}
				});
				// console.log($("#col_title").val());
			});
	</script>
	<script>
		$("#Bebida").change(function()
			{
				$("#Bebida").children().each(function()
				{
					if(this.value == $('#Bebida').val())
					{
						var precio = $('#Bebida').val().split("₡");
						var suma = parseInt(precio[1]) + parseInt($("#col_title").val());
						$("#col_title").val(suma);
					}
				});
				// console.log($("#col_title").val());
			});
	</script>
	<script>
		$("#Postre").change(function()
			{
				$("#Postre").children().each(function()
				{
					if(this.value == $('#Postre').val())
					{
						var precio = $('#Postre').val().split("₡");
						var suma = parseInt(precio[1]) + parseInt($("#col_title").val());
						$("#col_title").val(suma);
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