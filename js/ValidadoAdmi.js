function Validado(valido,ide) {
  
    if (valido) {
       location.href="MenuAdmin.php ?id="+ide;
    }
    else{
      location.href="../index.php"
      alert('Usuario o contraseña  no valida');
      
    }
  }
