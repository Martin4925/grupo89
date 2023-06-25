<?php
    try {
        require('data.php'); # pido los datos de ese archivo
        $db = new PDO("pgsql:dbname=$databaseName;host=localhost;port=5432;user=$usuario;password=$contrasena");
    } catch (Exception $e){
        echo "No se pudo conectar a la base de datos: $e";  
    }
?>