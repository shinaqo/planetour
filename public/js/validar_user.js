function validar_envio() {
	var nombre;
	var correo;
	var mensaje;

	nombre_cargo=document.getElementById('name').value;
	correo=document.getElementById('email').value;
	mensaje=document.getElementById('textarea2').value;

	if (nombre_cargo==="" || correo==="" || mensaje === "") {
		alert("Debe rellenar todos los campos");
		return false;
	}
	else if(mensaje.length>120){
		alert("Exede el maximo de caracteres");
		return false;
	}
}
