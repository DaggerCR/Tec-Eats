function Validado(valido,admi)
 {
    if (valido)
	{
		if(admi)
		{
			location.href="MenuAdmin.php ?id=A";
			alert('true');
			
		}
		else
		{
			location.href="Menu.php ?id=A";
			alert('false');
		}
			
    }
    else
	{
      location.href="../index.php"
	  console.log('test2');
      alert('Usuario o contraseña  no valida');
      
    }
  }