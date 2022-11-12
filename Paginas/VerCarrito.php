
<?php
   error_reporting(0);
   require '../dbcon.php';

?>

<?php
	if(isset($_POST['save']))
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


<form action="MensajeCarrito.php ?id=<?= $_GET['id']; ?>" method="POST">

	<div class="container mt-5 "  align="center" >
		<h2  class="mb-3" >Carrito de compras</h2>
		<br>
		<h5  class="mb-3" align="center" >Detalles</h5>
		<table border='1' cellpadding='0' cellspacing='0' width='650' bgcolor='#F6F6F6' bordercolor='#5F5F5F' align='center' id='table'>
      <tr>
         <th width='150' style='font-weight: bold' style='text-align:center'>Pedidos</th> 
         <th width='150' style='font-weight: bold' style='text-align:center'>Total</th>
      </tr>   
		<?php
				$query = "select * from Pedidos ORDER BY id DESC LIMIT 1;";
				$query_run = mysqli_query($con, $query);
				$contador = 0;
				$check = 'check';

				if(mysqli_num_rows($query_run) > 0)
				{
					foreach($query_run as $Pedidos)
					{	
						$contador++; 					
						echo "
						<tr>
							<td>".$Pedidos['alimento']."</td>	
							<td>".$Pedidos['precio']."</td>					
						</tr>
						";
						 
					} 
				}
						?>
   </table>
   
   
   <script>
            function sumarTabla()
            {
				$('#registrar_carrito').toggle();
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
   

   <br>
		<input type="submit" class="btn btn-light mt-5" name="Facturar" value="Facturar">
   <p id="text" style="display:none">Checkbox is CHECKED!</p>
   
	</div>	
	<br>

	<script>
		$('#replybutton').click(function() {
		$('#registrar_carrito').toggle()
		})
	</script>
	
	
	<script src="../js/bootstrap.bundle.js"></script>         
</form>
</body>
</html>