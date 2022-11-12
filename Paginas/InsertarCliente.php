<script src="../js/GestionCliente.js"></script>
<?php
session_start();
require '../dbcon.php';


if(isset($_POST['insertar_cliente']))
{
    
    $Registrado=false;
    $nombre = mysqli_real_escape_string($con, $_POST['Nombre']);
    $apellido1 = mysqli_real_escape_string($con, $_POST['Apellido1']);
    $apellido2 = mysqli_real_escape_string($con, $_POST['Apellido2']);
    $usuario = mysqli_real_escape_string($con, $_POST['Usuario']);
    $contra= mysqli_real_escape_string($con, $_POST['Contra']);
    $correo = mysqli_real_escape_string($con, $_POST['Correo']);
    $tipo = mysqli_real_escape_string($con, $_POST['Tipo']);


    $query = "INSERT INTO usuario (nombre,apellido1,apellido2,correo,usuario,passw,tipoUsuario)
	VALUES ('$nombre','$apellido1','$apellido2','$correo','$usuario','$contra', '$tipo')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {   
        echo "<script>GestionCliente(true)</script>";
       
    }
    else
    {
        echo "<script>GestionCliente(false)</script>";
    }
}
?>