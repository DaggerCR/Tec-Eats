function Gestion(Regis) {

  if (Regis) {
    alert('La gestion se realizo con exito');
    location.href = "/MenuAdmin.php"
  }
  else {
    alert('No se pudo realizar la gestion correctamente');
    location.href = "/MenuAdmin.php"
  }
}