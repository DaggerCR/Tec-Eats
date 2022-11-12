<script src="../js/GestionComida.js"></script>
<?php
session_start();
require '../dbcon.php';


if(isset($_POST['insertar_comida']))
{
    
    $Gestion=false;
    $nombre = mysqli_real_escape_string($con, $_POST['Nombre']);
    $disponibilidad = mysqli_real_escape_string($con, $_POST['Disponibilidad']);
    $tipo = mysqli_real_escape_string($con, $_POST['Tipo']);
    $precio = mysqli_real_escape_string($con, $_POST['Precio']);
    $tiempo= mysqli_real_escape_string($con, $_POST['Tiempo']);


    $query = "INSERT INTO comidas (nombre,disponibilidad,tipo_id,precio,tiempo_id) 
                SELECT '$nombre','$disponibilidad',tipos.id,'$precio',tiempos.id 
                FROM tipos,tiempos 
                WHERE tipos.nombre='$tipo' AND tiempos.nombre='$tiempo'";

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