<?php
$servername = "localhost";
$username = "root";
$password = "marcom19";
$dbname = "parking"; // Nombre de tu base de datos
$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con) {
    die("Conexion fallida: " . mysqli_connect_error());
} else {
    echo "Conexion Exitosa";
}