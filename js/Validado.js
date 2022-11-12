function Validado(valido,admi,id)
 {
    if (valido)
	{
		if(admi)
		{
			location.href="MenuAdmin.php ?id="+id;
		}
		else
		{
			location.href="Menu.php ?id="+id;
		}	
    }
    else
	{
      location.href="../index.php"
	  console.log('test2');
      alert('Usuario o contraseña  no valida!');
      
    }
  }