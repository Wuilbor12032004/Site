<?php
include 'conexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); 

    $sql = "INSERT INTO Usuarios (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contrasena')";

    if ($conexion->query($sql) === TRUE) {
        echo "¡Registro exitoso!";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    $conexion->close();
}
?>
