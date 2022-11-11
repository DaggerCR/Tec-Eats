<script src="../js/Gestion.js"></script>
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
        echo "<script>Gestion(true)</script>";
       
    }
    else
    {
        echo "<script>Gestion(false)</script>";
    }
}
?>