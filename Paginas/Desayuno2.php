
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
		<h2  class="mb-3" >Desayuno Version2</h2>
		<br>
		<h5  class="mb-3" align="center" >Plato Principal</h5>
		<table border='1' cellpadding='0' cellspacing='0' width='650' bgcolor='#F6F6F6' bordercolor='#5F5F5F' align='center' id='table'>
      <tr>
         <th width='150' style='font-weight: bold' style='text-align:center'>Añadir</th>
         <th width='150' style='font-weight: bold' style='text-align:center'>Nombre</th> 
         <th width='150' style='font-weight: bold' style='text-align:center'>Precio</th>
      </tr>   
		<?php
				$query = "SELECT * FROM comidas WHERE tipo_id= 1 and tiempo_id = 1";
				$query_run = mysqli_query($con, $query);
				$contador = 0;
				$check = 'check';

				if(mysqli_num_rows($query_run) > 0)
				{
					foreach($query_run as $Comida)
					{	
						$contador++; 					
						echo "
						<tr>
						<td width='150' style='text-align:center' ><input type='checkbox' id='$contador' value='$check.$contador'></td>
						<td>".$Comida['nombre']."</td>	
						<td>".$Comida['precio']."</td>	
						</tr>
						";
						 
					} 
				}
						?>
   </table>
   <br>
   <h5  class="mb-3" align="center" >Adicional</h5>
		<table border='1' cellpadding='0' cellspacing='0' width='650' bgcolor='#F6F6F6' bordercolor='#5F5F5F' align='center' id='table2'>
      <tr>
         <th width='150' style='font-weight: bold' style='text-align:center'>Añadir</th>
         <th width='150' style='font-weight: bold' style='text-align:center'>Nombre</th> 
         <th width='150' style='font-weight: bold' style='text-align:center'>Precio</th>
      </tr>   
		<?php
				$query = "SELECT * FROM comidas WHERE tipo_id= 2 and tiempo_id = 1";
				$query_run = mysqli_query($con, $query);
				$contador = 0;
				$check = 'check';

				if(mysqli_num_rows($query_run) > 0)
				{
					foreach($query_run as $Comida)
					{	
						$contador++; 					
						echo "
						<tr>
						<td width='150' style='text-align:center' ><input type='checkbox' id='B$contador' value='$check.$contador'></td>
						<td>".$Comida['nombre']."</td>	
						<td>".$Comida['precio']."</td>	
						</tr>
						";
						 
					} 
				}
						?>
   </table>
   <br>
   <h5  class="mb-3" align="center" >Bebida</h5>
		<table border='1' cellpadding='0' cellspacing='0' width='650' bgcolor='#F6F6F6' bordercolor='#5F5F5F' align='center' id='table3'>
      <tr>
         <th width='150' style='font-weight: bold' style='text-align:center'>Añadir</th>
         <th width='150' style='font-weight: bold' style='text-align:center'>Nombre</th> 
         <th width='150' style='font-weight: bold' style='text-align:center'>Precio</th>
      </tr>   
		<?php
				$query = "SELECT * FROM comidas WHERE tipo_id= 3 and tiempo_id = 1";
				$query_run = mysqli_query($con, $query);
				$contador = 0;
				$check = 'check';

				if(mysqli_num_rows($query_run) > 0)
				{
					foreach($query_run as $Comida)
					{	
						$contador++; 					
						echo "
						<tr>
						<td width='150' style='text-align:center' ><input type='checkbox' id='C$contador' value='$check.$contador'></td>
						<td>".$Comida['nombre']."</td>	
						<td>".$Comida['precio']."</td>	
						</tr>
						";
						 
					} 
				}
						?>
   </table>
   <br>
   <h5  class="mb-3" align="center" >Postre</h5>
		<table border='1' cellpadding='0' cellspacing='0' width='650' bgcolor='#F6F6F6' bordercolor='#5F5F5F' align='center' id='table4'>
      <tr>
         <th width='150' style='font-weight: bold' style='text-align:center'>Añadir</th>
         <th width='150' style='font-weight: bold' style='text-align:center'>Nombre</th> 
         <th width='150' style='font-weight: bold' style='text-align:center'>Precio</th>
      </tr>   
		<?php
				$query = "SELECT * FROM comidas WHERE tipo_id= 4 and tiempo_id = 1";
				$query_run = mysqli_query($con, $query);
				$contador = 0;
				$check = 'check';

				if(mysqli_num_rows($query_run) > 0)
				{
					foreach($query_run as $Comida)
					{	
						$contador++; 					
						echo "
						<tr>
						<td width='150' style='text-align:center' ><input type='checkbox' id='D$contador' value='$check.$contador'></td>
						<td>".$Comida['nombre']."</td>	
						<td>".$Comida['precio']."</td>	
						</tr>
						";
						 
					} 
				}
						?>
   </table>
   <legend id ="val2"class="text-center header text-success">Total a Pagar: </legend>
   <legend id ="val"class="text-center header text-success"></legend>
   <script>
            function sumarTabla()
            {
				var table = document.getElementById("table"), sumVal = 0;  
				var table2 = document.getElementById("table2");
				var table3 = document.getElementById("table3");
				var table4 = document.getElementById("table4");	
				
				for(var i = 1; i < table.rows.length; i++)
				{
					if(document.getElementById(i.toString()).checked)
					{
						sumVal = sumVal + parseInt(table.rows[i].cells[2].innerHTML);
					}                  
				}
				for(var i = 1; i < table2.rows.length; i++)
				{
					if(document.getElementById("B"+i.toString()).checked)
					{
						sumVal = sumVal + parseInt(table2.rows[i].cells[2].innerHTML);
					}                  
				}
				for(var i = 1; i < table3.rows.length; i++)
				{
					if(document.getElementById("C"+i.toString()).checked)
					{
						sumVal = sumVal + parseInt(table3.rows[i].cells[2].innerHTML);
					}                  
				}
				for(var i = 1; i < table4.rows.length; i++)
				{
					if(document.getElementById("D"+i.toString()).checked)
					{
						sumVal = sumVal + parseInt(table4.rows[i].cells[2].innerHTML);
					}                  
				}
				document.getElementById("val").innerHTML = sumVal;
               
            }
   </script>
   <input type="button" onclick="sumarTabla()" name="aceptar" value="Facturar">
   
	</div>	
	<br>
   <input type="submit" class="btn btn-success form-control" name="save" value="Agregar al carrito">
	<script src="../js/bootstrap.bundle.js"></script>         
</form>

<form action="" method="post" style="width:40%;margin:0 auto;">
	
</form>

</body>
</html>