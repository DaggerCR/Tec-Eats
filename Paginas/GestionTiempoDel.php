<?php
    session_start();
    require '../dbcon.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Eliminar tiempo de comida TEC Eats</title>

	<link rel="stylesheet"  href="../css/bootstrap.css">

	
</head>
<body class="container">
	<div class="container mt-5 "  align="center">
		<h1>Eliminar tiempo de comida TEC Eats</h1>
		<form action="EliminarTiempo.php" method="POST">

            <div class="container mb-4 d-block ">
            <select class="form-select" aria-label="Default select example" id="Nombre" name="Nombre">
                
                <?php
                    $query = "SELECT * FROM comidas";
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
            </div>

			<button type="submit" class="btn btn-light mt-5" name="eliminar_tiempo" > <h2>Eliminar</h2> </button>
			<!-- href="../index.html" -->
			
		</form>

	</div>
	
	
	<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>