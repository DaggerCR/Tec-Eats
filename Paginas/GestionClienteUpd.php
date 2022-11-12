<?php
    session_start();
    require '../dbcon.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modificar cliente TEC Eats</title>

	<link rel="stylesheet"  href="../css/bootstrap.css">

	
</head>
<body class="container">
	<div class="container mt-5 "  align="center">
		<h1>Modificar cliente TEC Eats</h1>
		<form action="ModificarCliente.php" method="POST">

            <div class="container mb-4 d-block ">
                <select class="form-select" aria-label="Default select example" id="Nombre" name="Nombre">
                    
                    <?php
                        $query = "SELECT * FROM usuario";
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

            <div class="form-group">
            <div class="col-sm-10 mb-4 mt-5" >   
				<input type="text" class="form-control" id="NombreNuevo" placeholder="Nombre Nuevo" name="NombreNuevo">
			</div>
			</div>

			<div class="form-group">
			<div class="col-sm-10 mb-4" >   
				<input type="text" class="form-control" id="Apellido1" placeholder="Apellido 1" name="Apellido1">
			</div>
			</div>

			<div class="form-group">
			<div class="col-sm-10 mb-4" >   
				<input type="text" class="form-control" id="Apellido2" placeholder="Apellido 2" name="Apellido2">
			</div>
			</div>

			<div class="form-group">
			<div class="col-sm-10 mb-4" >   
				<input type="text" class="form-control" id="Usuario" placeholder="Nombre de usuario" name="Usuario">
			</div>
			</div>

			<div class="form-group">
			<div class="col-sm-10 mb-4">          
				<input type="password" class="form-control" id="Contrase" placeholder="Contraseña"  
				pattern="(?=.*\d)(?=.*[!,¡,#,¿,?,@])(?=.*[a-z])(?=.*[A-Z]).{8,}" title="La contraseña debe tener mas de 8 caracteres y minimo 1 digito ,1 minuscula,1 mayuscula y un 1 caracter especial(!¡#¿?@)" required name="Contra">
			</div>
			</div>

			<div class="form-group">
			<div class="col-sm-10 mb-4" >   
				<input type="email" class="form-control" id="Correo" placeholder="Correo" name="Correo">
			</div>
			</div>

            <div class="container mb-4 d-block ">
            <select class="form-select" aria-label="Default select example" id="Tipo" name="Administrador">
                
                <?php
                    <option>1</option>
                    <option>2</option>
                ?>
            </select>
            </div>

			<button type="submit" class="btn btn-light mt-5" name="modificar_cliente" > <h2>Modificar</h2> </button>
			<!-- href="../index.html" -->
			
		</form>

	</div>
	
	
	<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>