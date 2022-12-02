<?php

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "minuto"; 

$con = new mysqli($host, $user, $password, $database);

if ($con->connect_error) {
    die("Conexion fallida: " . $con->connect_error);
}

?>