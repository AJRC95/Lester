const nombre = document.getElementById('nombre');//botón de agregar li
const tipoP = document.getElementById('tipoP');//campo de texto para agregar li
const descripcion = document.getElementById('descripcion');
const ciudad = document.getElementById('ciudad');
const direccion = document.getElementById('direccion');
const imagen = document.getElementById('imagen');

<!DOCTYPE>
<!DOCTYPE html>
<html>

<head>
    <title>Ingresa</title>
</head>

<body>


    <?php


        $database_username = 'root';
        $database_password = '1234';
        $dbname="proyecto";
        $dsn = 'mysql:host=localhost:3306;dbname=' . $dbname;
        try 
        {
            $pdo_conn = new PDO($dsn, $database_username, $database_password ); 
            
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $imagen = $_POST['imagen'];
            $direccion = $_POST['direccion'];
            $ciudad = $_POST['ciudad'];

            $inserta = "INSERT INTO propiedades(nombre, descripcion, imagen, direccion, ciudad) 
                        VALUES ('$nombre','$descripcion', '$imagen', '$direccion', '$ciudad');
                commit;";

            $resultado = mysqli_query($pdo_conn, $inserta)
                or die("Error al consultar registro");

            mysqli_close($pdo_conn);
            echo "Ingreso Exitoso!";
        }
        catch (PDOException $exception) 
        {
            echo $exception;
        }

	?>

</body>

</html>