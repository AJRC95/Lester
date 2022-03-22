const nombre = document.getElementById('nombre');//botón de agregar li
const tipoP = document.getElementById('tipoP');//campo de texto para agregar li
const descripcion = document.getElementById('descripcion');
const ciudad = document.getElementById('ciudad');
const direccion = document.getElementById('direccion');
const imagen = document.getElementById('imagen');

login.onclick = function() {
	
	if (nombre.value == null || nombre.value == "") {
		alert("Debe ingresar nombre.");
		return false;
	} else if (tipoP.value == null || tipoP.value == "") {
		alert("Debe ingresar tipoP.");
		return false;
	} else if (descripcion.value == null || descripcion.value == "") {
		alert("Debe ingresar descripcion.");
		return false;
	} else if (ciudad.value == null || ciudad.value == "") {
		alert("Debe ingresar ciudad.");
		return false;
	} else if (direccion.value == null || direccion.value == "") {
		alert("Debe ingresar direccion.");
		return false;
	} else {
		
		window.location="../view/ingresarPropiedad.php";
		//window.location="Carretera.htm";
		

		/*let item = document.createElement('li');
		item.textContent = usuario.value+' '+password.value+'.';
        
        document.getElementById("textToEncode").innerHTML = item.textContent;*/
		nombre.value = '';
        tipoP.value = '';
	}
	usuario.focus();
    password.focus();
}
