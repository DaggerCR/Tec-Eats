<script src="../js/GestionPedido.js"></script>
<?php
session_start();
require '../dbcon.php';


if(isset($_POST['insertar_pedido']))
{
    
    $Gestion=false;
    $alimento = mysqli_real_escape_string($con, $_POST['Alimento']);
    $usuario = mysqli_real_escape_string($con, $_POST['Usuario']);
    $fecha = mysqli_real_escape_string($con, $_POST['Fecha']);
    $precio = mysqli_real_escape_string($con, $_POST['Precio']);


    $query = "INSERT INTO pedidos (alimento, usuario, fecha, precio) VALUES ('$alimento', usuario.id, '$fecha', '$precio')
                FROM usuario WHERE usuario.usuario = '$usuario'";

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