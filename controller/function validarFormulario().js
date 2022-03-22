function validarFormulario()
{
    var nombres=document.getElementById("name");
    var apellidos=document.getElementById("last name");
    var correo=document.getElementById("mail");
    var contraseña=document.getElementById("password");

    if(nombres.value.length==0)
    {
        alert("Debe ingresar un nombre");
        return false;
    }
    if(apellidos.value.length==0)
    {
        alert("Debe ingresar un apellido");
        return false;
    }
    if(correo.value.length==0)
    {
        alert("Debe ingresar un correo");
        return false;
    }
    if(contraseña.value.length==0)
    {
        alert("Debe ingresar una contraseña");
        return false;
    }
}


