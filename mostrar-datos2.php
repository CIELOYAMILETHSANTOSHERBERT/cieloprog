<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos de Autos BMW</title>
</head>
<body>
    <h1>Mostrar Datos de Autos BMW</h1>
    <?php
        // Datos de conexión
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "bmw_database";

        // Crear conexión
        $conexion = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if($conexion->connect_error){
            die("Conexión fallida: " . $conexion->connect_error);
        }

        // Consulta SQL para obtener los datos de la tabla 'autos'
        $sql = "SELECT * FROM autos";
        $resultado = $conexion->query($sql);

        // Verificar si hay resultados
        if($resultado->num_rows > 0){
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Modelo</th><th>Serie</th><th>Año de fabricación</th><th>Tipo de motor</th><th>Potencia (HP)</th><th>Color</th><th>Precio</th></tr>";

            // Mostrar los datos en la tabla
            while($row = $resultado->fetch_assoc()){
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["modelo"] . "</td><td>" . $row["serie"] . "</td><td>" . $row["año"] . "</td><td>" . $row["motor"] . "</td><td>" . $row["potencia"] . "</td><td>" . $row["color"] . "</td><td>" . $row["precio"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron registros en la base de datos.";
        }

        // Cerrar la conexión
        $conexion->close();
    ?>
</body>
</html>
