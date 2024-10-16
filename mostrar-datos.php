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

// Consulta para obtener datos de la tabla 'autos'
$sql = "SELECT * FROM autos";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos de los autos BMW</title>
</head>
<body>
    <style>
        body {
            font-family: cursive;
            color: #DDF1AB;
            background-color: #F2E9D8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        h1 {
            text-align: center;
            color: black;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
            border-radius: 8px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #FAF0DB;
            color: black;
        }
        tr:nth-child(odd) {
            background-color: #4A5859;
            color: #DDF1AB;
        }
        th {
            background-color: #F4C8EA;
            color: white;
        }
    </style>
    <div class="container">
        <h1>Datos de los autos BMW</h1>
        <?php if ($resultado->num_rows > 0): ?>
        <table>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Serie</th>
            <th>Año de fabricación</th>
            <th>Motor</th>
            <th>Potencia (HP)</th>
            <th>Color</th>
            <th>Precio</th>
        </tr>
        <?php while ($fila = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['modelo']; ?></td>
                <td><?php echo $fila['serie']; ?></td>
                <td><?php echo $fila['año']; ?></td>
                <td><?php echo $fila['motor']; ?></td>
                <td><?php echo $fila['potencia']; ?></td>
                <td><?php echo $fila['color']; ?></td>
                <td><?php echo $fila['precio']; ?></td>
            </tr>
        <?php endwhile; ?>
        </table>
        <?php else: ?>
        <p>No se encontraron autos.</p>
        <?php endif; ?>
    </div>
</body>
</html>

<?php
// Cerrar la conexión
$conexion->close();
?>
