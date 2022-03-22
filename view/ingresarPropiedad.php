<!DOCTYPE html>


<?php
   session_start();
   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "Visitas ".  $_SESSION['counter'];
   $msg .= "en esta session.";
   echo ( $msg );
?>

<html lang="en">

<head>

    <script>
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookie() {
            var user = getCookie("username");
            if (user != "") {
                alert("Welcome again " + user);
            } else {
                user = prompt("Please enter your name:", "");
                if (user != "" && user != null) {
                    setCookie("username", user, 30);
                }
            }
        }
    </script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="../css/hojaEstilo.css" />
    <link rel="stylesheet" href="../css/propiedad.css" />
    <script SRC="function ../controller/validarFormulario_contacto().js"></script>
    <style>
        .contenedor {
            font-size: 40px;
            text-align: center;

        }

        .submit_Co {
            font-size: 70%;
        }
    </style>
</head>

<body style="background: rgb(184, 251, 251);">
    <nav class="menu">
        <img id="logoInicial" src="../imagenes/2logo.png">
        <ul>
            <li></li>
            <li> <a id="li_menu" href="inicio.html">inicio</a></li>
            <li> <a id="li_menu" href="agentes.html">Agentes</a></li>
            <li> <a id="li_menu" href="login.html">inciar sesion</a></li>
            <li> <a id="li_menu" href="crear_cuenta.html">Crear Cuenta</a></li>
            <li> <a id="li_menu" href="propiedades-en-alquiler.html">Propiedades</a></li>
        </ul>
    </nav>
    <div class="contenedor">
        <section id="info" align="center">
            <br>
            <h3 align="center">INGRESA PRODUCTO</h3>
            <br>
            <form class="formulario" id="formulario" action="../model/ingresPropiedad.php" method="POST">
                <div class="contFormulario">
                    <div id="grupo__nombre">
                        <label for="nombre" class="formulario__label">Nombres Propiedad:</label>
                        <input class="formulario__input" name="nombre" id="nombre" placeholder="NOMBRE DE PROPIEDAD"
                            type="text" required /><br />
                    </div>
                    <div id="grupo__tipoP">
                        <label for="tipoP" class="formulario__label">Tipo de Propiedad:</label>
                        <select class="formulario__input" name="tipoP" id="tipoP"
                            type="form-select" required>
                            <option>Seleccione Tipo de Propiedad</option>
                            <option value="1">Terreno</option>
                            <option value="2">Departamento</option>
                            <option value="3">Casa</option>
                        </select><br />
                    </div>
                    <div id="grupo__descripcion">
                        <label for="descripcion" class="formulario__label">Descripcion de Propiedad:</label>
                        <input class="formulario__input" name="descripcion" id="descripcion"
                            placeholder="DESCRIPCION DE PROPIEDAD" type="text" required /><br />
                    </div>
                    <div id="grupo__ciudad">
                        <label for="ciudad" class="formulario__label">Ciudad:</label>
                        <input class="formulario__input" name="ciudad" id="ciudad" placeholder="CIUDAD DE PROPIEDAD"
                            type="text" required /><br />
                    </div>
                    <div id="grupo__direccion">
                        <label for="direccion" class="formulario__label">Direccion:</label>
                        <input class="formulario__input" name="direccion" id="direccion"
                            placeholder="DIRECCION DE PROPIEDAD" type="text" required /><br />
                    </div>
                    <div id="grupo__correo">
                        <label for="imagen" class="formulario__label">Imagen:</label>
                        <input class="formulario__input" name="imagen" id="imagen" placeholder="IMAGEN DE PROPIEDAD"
                            type="file" required /><br />
                    </div>

                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <button type="submit" class="formulario__btn" id="enviar" onclick="funcion()">Guardar</button>
                        <!--p class="formulario__mensaje-exito" id="formulario__mensaje-exito"> El formulario se ha enviado con exito</p-->
                    </div>

                    <script src="../controller/validaIngresa.js"></script>
                </div>


            </form>
        </section>

    </div>


</body>

</html>