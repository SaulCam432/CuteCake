function validar() {
	var nombre;
	var apellido;
	var edad;
	var telefono;
	var correo;
	var username;
	var password;
	var letras;
	var email;
	
	letras=/^[a-zA-Z]*$/;
	email=/\w+@\w+\.+[a-z]/;

	nombre=document.getElementById('Nombre').value;
	apellido=document.getElementById('Apellido').value;
	edad=document.getElementById('Edad').value;
	telefono=document.getElementById('Telefono').value;
	correo=document.getElementById('Correo').value;
	username=document.getElementById('Username').value;
	password=document.getElementById('Password').value;

	if(nombre=="" || apellido =="" || edad=="" || telefono =="" || correo=="" || username =="" || password ==""){
		alert('Todos los campos son obligatorios');
		return false;
		}else if (!letras.test(nombre)){
				alert('No se admiten numeros en el campo Nombre');
				return false;
			}else if (!letras.test(apellido)){
					alert('No se admiten numeros en el campo Apellidos');
					return false;	
				}else if(letras.test(edad)){
						alert('Solo pudes colocar numeros en el campo Edad');
						return false;
					}else if(letras.test(telefono)){
							alert('Solo se permiten numeros en el campo Telefono');
							return false;
						}else if(!email.test(correo)){
								alert('Ingresa los datos correctamente en el campo Correo');
							}else if(telefono.length != 10){
									alert('El telefono ingresado debe tener 10 digitos');
									return false;
								}else if(password.length < 8 || password.length >15){
										alert('LA contraseña debe de tener entre 8 y 15 caracteres');
										return false;
									}
}