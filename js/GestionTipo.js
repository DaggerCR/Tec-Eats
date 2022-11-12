function GestionTipo(Regis) {

    if (Regis) {
        alert('La gestion se realizo con exito');
        location.href = "../Paginas/MenuGestionTipos.php"
    }
    else {
        alert('No se pudo realizar la gestion correctamente');
        location.href = "../Paginas/MenuGestionTipos.php"
    }
}