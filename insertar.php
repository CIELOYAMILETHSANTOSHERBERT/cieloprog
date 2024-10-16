<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bmw_database"; 

$conexion = new mysqli($servername, $username, $password, $database);

if ($conexion->connect_error) {
    die("La conexión a la base de datos falló: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $modelo = $_POST["modelo"];
    $serie = $_POST["serie"];
    $año = $_POST["año"];
    $motor = $_POST["motor"];
    $potencia = $_POST["potencia"];
    $color = $_POST["color"];
    $precio = $_POST["precio"];
    $transmision = $_POST["transmision"];


    $sql = "INSERT INTO autos (modelo, serie, año, motor, potencia, color, precio, transmision) 
            VALUES ('$modelo', '$serie', '$año', '$motor', '$potencia', '$color', '$precio', '$transmision')";

    if ($conexion->query($sql) === TRUE) {
        echo "Auto BMW guardado exitosamente";
    } else {
        echo "ERROR: " . $conexion->error;
    }
}

// Cerrar la conexión
$conexion->close();
?>
