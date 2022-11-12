<script src="../js/GestionTiempo.js"></script>
<?php
session_start();
require '../dbcon.php';


if(isset($_POST['insertar_tiempo']))
{
    
    $Gestion=false;
    $nombre = mysqli_real_escape_string($con, $_POST['Nombre']);


    $query = "INSERT INTO tiempos (nombre) 
                VALUES ('$nombre')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {   
        echo "<script>GestionTiempo(true)</script>";
       
    }
    else
    {
        echo "<script>GestionTiempo(false)</script>";
    }
}
?>