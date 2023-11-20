<?php
    $host="localhost";
    $user="root";
    $password="";
    $database="longin_register_db";
    
    $conexion = mysqli_connect($host, $user, $password, $database); 
    
    if (!$conexion)
    {
        die("Conexión fallida".mysqli_connect_error());
    }
    echo "Conectado exitosamente";
?>