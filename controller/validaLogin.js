const enviar = document.getElementById('enviar');//botón de agregar li
const usuario = document.getElementById('usuario');//campo de texto para agregar li
const password = document.getElementById('password');
let defUsuario = 'admin';
let defPassword = 'admin123';

login.onclick = function() {
	
	if (usuario.value == null || usuario.value == "") {
		alert("Debe ingresar usuario.");
		return false;
	} else if (password.value == null || password.value == "") {
		alert("Debe ingresar Contrasena.");
		return false;
	} else {


		
		if (!(usuario.value=='admin')) {
			alert("Debe ingresar Usuario valido.");
			return false;
		} else if (!(password.value=='admin123')) {
			alert("Debe ingresar Password valido. ");
			return false;
		}
		
		window.location="php/eliminar_prod.php";
		window.location="Carretera.htm";
		

		/*let item = document.createElement('li');
		item.textContent = usuario.value+' '+password.value+'.';
        
        document.getElementById("textToEncode").innerHTML = item.textContent;*/
		usuario.value = '';
        password.value = '';
	}
	usuario.focus();
    password.focus();
}
