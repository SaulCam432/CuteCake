function seguridad(){
	var password;
	var primerN;
	var apellido;
	var correo;
	var telefono;
	var exprecion2;
	var exprecion3;
	var exprecionC;
	exprecion3=/^[a-zA-Z]*S/;
	exprecion2=/\w+@\w+\.+[a-z]/;
	exprecionC=/\w+([-+.´]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/;

	primerN=document.getElementById('first_name').value;
	password=document.getElementById('password').value;
	apellido=document.getElementById('last_name').value;
	correo=document.getElementById('email').value;
	telefono=document.getElementById('phone').value;

	if(primerN==""){
		alert('Falta ingresar nombre');
		document.getElementById('first_name').focus();
		document.getElementById('first_name').style.background='red';
		return false;
	}else{
		if(apellido==""){
	 		alert('Falta ingresar apellido');
			document.getElementById('last_name').focus();
			document.getElementById('last_name').style.background='red';
			document.getElementById('first_name').style.background='white';
			return false;
		}else{
			if(telefono==""){
				alert('Falta ingresar telefono');
				document.getElementById('phone').focus();
				document.getElementById('phone').style.background='red';
				return false;
			}else{
				if(correo==""){
					alert('Falta ingresar correo');
					document.getElementById('email').focus();
					document.getElementById('email').style.background='red';
					return false;
				}else{
					if(password==""){
						alert('Falta ingresar password');
						document.getElementById('password').focus();
						document.getElementById('password').style.background='red';
						return false;
					}else{
						if(primerN.length>20){
							alert('solo se permiten 20 caracteres en el nombre');
							return false;
						}
						else{
							if(apellido.length>20){
								alert('solo se permiten 20 caracteres en el apellido');
								return false;
							}else{
								if(correo.length>30){
									alert('solo se permiten 30 caracteres en el correo');
									return false;
								}else{
									if(telefono.length!=10){
										alert('solo se permiten 10 caracteres en el telefono');
										return false;
									}else{
										if(password.length>15 || password.length<8){
												alert('solo se permiten entre 8 y 15 caracteres en la contraseña');
												return false;
										}else{
											if(!exprecion2.test(correo)){
												alert("Teclea un correo valido");
												return false;
											}else{
												if(!exprecion3.test(primerN)){
													alert("Solo caracteres en el nombre");
													return false;
												}
											}
										}
									}
								}
							}
						}

					}
				}
			}
		}
	}
}


