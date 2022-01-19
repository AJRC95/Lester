<script type="text/javascript">

			function crear_eventos()
			{
				alert("Haz hecho click");
			}

			// -------------------------

			function mensaje()
			{
				if( navigator.appName == "Microsoft Internet Explorer" )
					document.getElementById("boton3").attachEvent( "onclick", mensaje );
				else
					document.getElementById("boton3").addEventListener( 'click', mensaje, false );
			}

			// -------------------------

			function eliminar_eventos()
			{
				if( navigator.appName == "Microsoft Internet Explorer" )
					document.getElementById("boton3").detachEvent( "onclick", mensaje );
				else
					document.getElementById("boton3").removeEventListener( 'click', mensaje, false );
			}

        </script>