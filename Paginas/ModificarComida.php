<script src="../js/GestionComida.js"></script>
<?php
session_start();
require '../dbcon.php';


if(isset($_POST['modificar_comida']))
{
    
    $Gestion=false;
    $nombre = mysqli_real_escape_string($con, $_POST['Nombre']);
    $nombreNuevo = mysqli_real_escape_string($con, $_POST['NombreNuevo']);
    $disponibilidad = mysqli_real_escape_string($con, $_POST['Disponibilidad']);
    $tipo = mysqli_real_escape_string($con, $_POST['Tipo']);
    $precio = mysqli_real_escape_string($con, $_POST['Precio']);
    $tiempo= mysqli_real_escape_string($con, $_POST['Tiempo']);

    $query = "UPDATE comidas 
                SET nombre = '$nombreNuevo', disponibilidad='$disponibilidad',tipo_id = tipos.id, precio='$precio',tiempo_id=tiempos.id 
                FROM tipos,tiempos 
                WHERE tipos.nombre='$tipo' AND tiempos.nombre='$tiempo' AND comidas.nombre='$nombre'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {   
        echo "<script>GestionComida(true)</script>";
       
    }
    else
    {
        echo "<script>GestionComida(false)</script>";
    }
}
?>