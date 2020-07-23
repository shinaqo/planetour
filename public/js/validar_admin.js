function validar_cargo() {
    var nombre_cargo;
    nombre_cargo=document.getElementById('nombre_cargo').value;
    if(nombre_cargo===""){
        alert("Existen campos vacios por favor verificar");

        return false;
    }

    // if (nombre_cargo.lenght>30) {
    //  alert("el nombre es demaciado largo");
    // }
}

function validar_carousel(){
    var nombre_carousel;
    var ubicacion_carousel;
    nombre_carousel=document.getElementById('titulo_carousel').value;
    if (nombre_carousel==="") {
        alert("Existen campos vacios por favor verificar");
        
        return false;
    }
    
}
function validar_trabajador(){
    var nombre_trabajador = document.getElementById('nombre_trabajador').value;
    var apellidoPa_trabajador = document.getElementById('apellidoPa_trabajador').value;
    var apellidoMa_trabajador = document.getElementById('apellidoMa_trabajador').value;
    var correo = document.getElementById('correo').value;
    var numero = document.getElementById('numero').value;


    if (nombre_trabajador ==="" || apellidoMa_trabajador==="" || apellidoPa_trabajador ==="" || correo ==="" || numero ==="") {
        alert("Existen campos vacios por favor verificar");
        return false;
    }
    else if (isNaN(numero)) {
        alert("El Telefono ingresado no es un numero");
        return false;
    }
}

function validar_pais() {
    var nombre_pais;
    nombre_pais=document.getElementById('nombre_pais').value;
    if(nombre_pais===""){
        alert("Existen campos vacios por favor verificar");

        return false;
    }
}

function validar_categoria() {
    var nombre_categoria;
    nombre_categoria=document.getElementById('nombre_categoria').value;
    if(nombre_categoria===""){
        alert("Existen campos vacios por favor verificar");

        return false;
    }
}

function validar_user() {
    var name;
    var email;
    var password;
    name=document.getElementById('name').value;
    email=document.getElementById('email').value;
    password=document.getElementById('password').value;
    if(name==="" || email==="" || password===""){
        alert("Existen campos vacios por favor verificar");

        return false;
    }
}

function validar_producto(){
   var nombre_producto;
   var precio_producto;
   var dias_producto;
   var descripcion_producto;
   var categoria_id_categoria;
   nombre_producto=document.getElementById('nombre_producto').value;
   precio_producto=document.getElementById('precio_producto').value;
   dias_producto=document.getElementById('dias_producto').value;
   descripcion_producto=document.getElementById('descripcion_producto').value;



   if (nombre_producto==="" || precio_producto ==="" || dias_producto==="" || descripcion_producto ==="") {
    alert("Existen campos vacios por favor verificar");
    return false;

}
else if (isNaN(precio_producto)) {
    alert("El Precio ingresado no es un numero");
    return false;
}

else if (isNaN(dias_producto)) {
    alert("Los dias ingresado no son numeros");
    return false;
}



}
   