<script src="../js/Registrado.js"></script>
<?php
session_start();
require '../dbcon.php';


if(isset($_POST['registrar_carrito']))
{
    
    
    $comida = mysqli_real_escape_string($con, $_POST['col_title2']);
	$precio = mysqli_real_escape_string($con, $_POST['col_title']);
	$fecha = date("Y/m/d");
	$id = $_GET['id'];
	
	echo $comida."\n";
	echo $precio."\n";
	echo $fecha."\n";
	echo $id."\n";
    


    $query = "INSERT INTO pedidos (alimento,usuario_id,fecha,precio)
	VALUES ('$comida','$id','$fecha','$precio')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {   
        echo "<script>alert('XD')</script>";
       
    }
    else
    {
        echo "<script>alert(':c')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head></head>
<body>
	<h1>Hola :)</h1>
</body>