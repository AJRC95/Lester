function validarFormulario_contacto()
{
    var nombres=document.getElementById("nombre");
    var movil=document.getElementById("Movil");
    var Email=document.getElementById("Email");
    var Observacion=document.getElementById("Observacion");
    var Terminos=document.getElementById("Terminos")
  

    if(nombres.value.length==0)
    {
        alert("Debe ingresar un nombre");
        return false;
    }
    if(movil.value.length==0)
    {
        alert("Debe ingresar su movil");
        return false;
    }
    if(Email.value.length==0)
    {
        alert("Debe ingresar un correo");
        return false;
    }
    if(Observacion.value.length==0)
    {
        alert("Por favor ingrese su observacion");
        return false;
    }
    if(!Terminos.checked)
    {
        alert("Debe aceptar los terminos")
    }
  
}
