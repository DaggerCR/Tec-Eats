<script src="../js/Validado.js"></script>


<?php
session_start();
require '../dbcon.php';

global $ID;

if(isset($_POST['validar_usuario']))
{
    $usuario = mysqli_real_escape_string($con, $_POST['Usuario']);
    $contra= mysqli_real_escape_string($con, $_POST['Contra']);

    $query  = "SELECT * FROM usuario WHERE usuario='$usuario'";
    $result = mysqli_query($con, $query);
        
    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc(); 
        
        echo "contraseña: " . $row["passw"];
		
			if($contra==$row["passw"])
			{
				$ID = $row["id"];
				if($row["tipoUsuario"] == 1)
					echo "<script>Validado(true,true)</script>";
				else
					echo "<script>Validado(true,false)</script>";
			   
			}
			else
			{
				echo "<script>Validado(false,true)</script>";
			}
		

        
    } 
    else 
    {
        echo "<script>Validado(false)</script>";
    }
}

?>