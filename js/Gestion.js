function Gestion(Regis) {

  if (Regis) {
    alert('La gestion se realizo con exito');
    location.href = "/GestionComidas.php"
  }
  else {
    alert('No se pudo realizar la gestion correctamente');
    location.href = "/GestionComidas.php"
  }
}