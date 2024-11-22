<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "educontrol";
$port = 3306;

// Crear la conexión
$conexion1 = new mysqli($host, $user, $password, $database, $port);

// Verifica si la conexión tuvo éxito
if ($conexion1->connect_error) {
    die("Conexión fallida: " . $conexion1->connect_error);
}

// Establece el conjunto de caracteres de la conexión
$conexion1->set_charset("utf8");
?>
