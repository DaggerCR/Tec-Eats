<script src="../js/GestionPedido.js"></script>
<?php
session_start();
require '../dbcon.php';


if(isset($_POST['eliminar_pedido']))
{
    
    $Gestion=false;
    $alimento = mysqli_real_escape_string($con, $_POST['Alimento']);


    $query = "DELETE FROM pedidos WHERE alimento='$alimento'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {   
        echo "<script>GestionPedido(true)</script>";
       
    }
    else
    {
        echo "<script>GestionPedido(false)</script>";
    }
}
?>