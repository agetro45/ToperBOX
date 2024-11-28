<?php
// Conexión a la BD
$servername = "localhost";
$username = "root"; // Cambia según tu configuración
$password = ""; // Cambia según tu configuración
$dbname = "mi_base_de_datos"; // Cambia según tu configuración

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Capturar datos del formulario
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];
$domicilio = $_POST['domicilio'];
$gustos = $_POST['gustos'];

// Insertar en la BD
$sql = "INSERT INTO Usuarios (nombre, sexo, edad, domicilio, gustos) 
        VALUES ('$nombre', '$sexo', '$edad', '$domicilio', '$gustos')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
