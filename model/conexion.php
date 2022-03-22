<?php
    $database_username = 'root';
    $database_password = '1234';
    $dbname="proyecto_dw";
    $dsn = 'mysql:host=localhost:3306;dbname=' . $dbname;
    try 
    {
        $pdo_conn = new PDO($dsn, $database_username, $database_password ); 
    }
    catch (PDOException $exception) 
    {
        echo $exception;
    }
?>