<script src="../js/GestionComida.js"></script>
<?php
session_start();
require '../dbcon.php';


if(isset($_POST['eliminar_comida']))
{
    
    $Gestion=false;
    $nombre = mysqli_real_escape_string($con, $_POST['Nombre']);


    $query = "DELETE FROM comidas WHERE nombre='$nombre'";

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