<script src="../js/GestionPedido.js"></script>
<?php
session_start();
require '../dbcon.php';


if(isset($_POST['modificar_pedido']))
{
    
    $Gestion=false;
    $alimento = mysqli_real_escape_string($con, $_POST['Alimento']);
    $alimentoNuevo = mysqli_real_escape_string($con, $_POST['AlimentoNuevo']);
    $usuario = mysqli_real_escape_string($con, $_POST['Usuario']);
    $fecha = mysqli_real_escape_string($con, $_POST['Fecha']);
    $precio = mysqli_real_escape_string($con, $_POST['Precio']);


    $query = "UPDATE pedidos 
                SET alimento = '$alimentoNuevo', usuario = usuario.id, fecha = '$fecha', precio = '$precio'
                FROM usuario, pedidos
                WHERE pedidos.alimento = '$alimento'
                AND usuario.usuario = '$usuario'";

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