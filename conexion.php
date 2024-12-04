<?php
$host = "localhost";
$user = "root"; // Usuario por defecto
$password = ""; // Sin contraseña por defecto
$database = "site";

$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>
