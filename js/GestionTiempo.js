function GestionTiempo(Regis) {

    if (Regis) {
        alert('La gestion se realizo con exito');
        location.href = "../Paginas/MenuGestionTiempos.php"
    }
    else {
        alert('No se pudo realizar la gestion correctamente');
        location.href = "../Paginas/MenuGestionTiempos.php"
    }
}