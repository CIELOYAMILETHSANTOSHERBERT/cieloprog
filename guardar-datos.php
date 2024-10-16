<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "bmw_database";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$modelo = $_POST['modelo'];
$serie = $_POST['serie'];
$año = $_POST['año'];
$motor = $_POST['motor'];
$potencia = $_POST['potencia'];
$color = $_POST['color'];
$precio = $_POST['precio'];

// Inserción de los datos en la tabla 'autos'
$sql = "INSERT INTO autos (modelo, serie, año, motor, potencia, color, precio)
        VALUES ('$modelo', '$serie', '$año', '$motor', '$potencia', '$color', '$precio')";

// Ejecutar la consulta y verificar si se guardaron los datos correctamente
if ($conexion->query($sql) === TRUE) {
    echo "Datos guardados satisfactoriamente";
} else {
    echo "ERROR: " . $sql . "<br>" . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
