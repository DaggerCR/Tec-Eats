<script src="../js/Registrado.js"></script>
<?php
session_start();
require '../dbcon.php';


if(isset($_POST['insertar_usuario']))
{
    
    $Registrado=false;
    $nombre = mysqli_real_escape_string($con, $_POST['Nombre']);
    $apellido1 = mysqli_real_escape_string($con, $_POST['Apellido1']);
    $apellido2 = mysqli_real_escape_string($con, $_POST['Apellido2']);
    $usuario = mysqli_real_escape_string($con, $_POST['Usuario']);
    $contra= mysqli_real_escape_string($con, $_POST['Contra']);
    $correo = mysqli_real_escape_string($con, $_POST['Correo']);

	$Cuerpo = "Bienvenido ".$nombre." ".$apellido1." ".$apellido2.".\nGracias por confiar en este servicio, estos son tus datos: \nUsuario: ".$usuario." \nContraseña: ".$contra." \nCorreo: ".$correo;


    $query = "INSERT INTO usuario (nombre,apellido1,apellido2,correo,usuario,passw,tipoUsuario)
	VALUES ('$nombre','$apellido1','$apellido2','$correo','$usuario','$contra',false)";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {   
        echo "<script>Registrado(true)</script>";
		$url = "https://script.google.com/macros/s/AKfycbzm2a0ExgMAkkTMEl4MdWs4sk0hVxiFT3Gk1HPOg8dXeB1r4mgNEf2RySXRvrjY98jI/exec";
		$ch = curl_init($url);
		curl_setopt_array($ch,[
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => http_build_query([
			"recipient" => $_POST['Correo'],
			"subject" => "Bienvenido a TEC EATS",
			"body" => $Cuerpo
			])
		]);
		$result = curl_exec($ch);
		echo $result;
    }
    else
    {
        echo "<script>Registrado(false)</script>";
    }
}
?>