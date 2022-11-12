function GestionPedido(Regis) {

    if (Regis) {
        alert('La gestion se realizo con exito');
        location.href = "../Paginas/MenuGestionPedidos.php"
    }
    else {
        alert('No se pudo realizar la gestion correctamente');
        location.href = "../Paginas/MenuGestionPedidos.php"
    }
}