<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base = "sena";

$conexion = mysqli_connect($servidor, $usuario, $clave, $base);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>