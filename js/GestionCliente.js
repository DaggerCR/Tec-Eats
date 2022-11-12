function GestionCliente(Regis) {

    if (Regis) {
        alert('La gestion se realizo con exito');
        location.href = "../Paginas/MenuGestionClientes.php"
    }
    else {
        alert('No se pudo realizar la gestion correctamente');
        location.href = "../Paginas/MenuGestionClientes.php"
    }
}