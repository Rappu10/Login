<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$usuario = "root";
$contrasena = "1205";
$bd = "rol";

// Conexión a la base de datos
$conn = new mysqli($host, $usuario, $contrasena, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = isset($_POST['nombre']) ? $conn->real_escape_string($_POST['nombre']) : '';
    $usuario = isset($_POST['usuario']) ? $conn->real_escape_string($_POST['usuario']) : '';
    $contraseña = isset($_POST['contraseña']) ? password_hash($_POST['contraseña'], PASSWORD_DEFAULT) : '';
    $id_cargo = isset($_POST['id_cargo']) ? $conn->real_escape_string($_POST['id_cargo']) : '';

    // Verifica que todos los campos estén completos
    if ($nombre && $usuario && $contraseña && $id_cargo) {
        // Inserta los datos en la tabla
        $sql = "INSERT INTO usuarios (nombre, usuario, contraseña, id_cargo) 
                VALUES ('$nombre', '$usuario', '$contraseña', '$id_cargo')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso. <a href='index.html'>Inicia sesión aquí</a>";
        } else {
            echo "Error al registrar: " . $conn->error;
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
}

$conn->close();
?>
