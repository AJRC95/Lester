<?php
		    session_start();
		    echo "sigo en sesion1";
		    $_SESSION["usuario"] = $usuario;    
		    $_SESSION["password"] = $contrasenia ;
		    // Establecer tiempo de vida de la sesión en segundos
		    $inactividad = 30000;
		    
		    // Comprobar si $_SESSION["timeout"] está establecida
		    if(isset($_SESSION["timeout"])){
		    	echo "sigo en sesion2";
		        // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
		        $sessionTTL = time() - $_SESSION["timeout"];
		        if($sessionTTL > $inactividad){
		            session_destroy();
		            header("Location: ../login.php");
		        }
		        else
		        {
		        	header("Location: ../producto.php");
		            echo "sigo en sesion";
		        }
		    }
		    else
		        header("Location: ../login.php");   
?>