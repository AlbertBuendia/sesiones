<?php
// ESTILO POR PRODECEDIMIENTOS

$host = "localhost";
$user = "root";
$pass = "";
$db = "bd_login";

//Crear conexion
$conn = mysqli_connect($host, $user, $pass, $db);

//Checkear la conexion
if (!$conn) {
    echo "Error: No se puedo conectar a MySQL." . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}else {
    mysqli_set_charset($conn, "utf8");
}
?>