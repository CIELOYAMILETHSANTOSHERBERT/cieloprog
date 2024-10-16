<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMW Autos</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(151, 166, 233);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgb(171, 194, 255);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgb(15, 14, 14);
        }

        h1 {
            text-align: center;
            color: rgb(2, 5, 197);
            margin-bottom: 20px;
            text-shadow: 0 2px 0 rgb(8, 6, 7);
        }

        label {
            font-weight: bold;
            color: #3b5379;
            margin-bottom: 5px;
            display: block;
        }

        input {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            width: 100%;
            color: rgb(49, 53, 56);
            padding: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .button {
            display: flex;
            justify-content: space-between;
        }

        button {
            padding: 10px 15px;
            background-color: rgb(2, 5, 197);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: rgb(1, 4, 136);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registrar Modelos de BMW</h1>
        <form action="guardar-datos.php" method="post">
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" required>

            <label for="serie">Serie</label>
            <input type="text" id="serie" name="serie" required>

            <label for="año">Año de fabricación</label>
            <input type="number" id="año" name="año" required>

            <label for="motor">Tipo de Motor</label>
            <input type="text" id="motor" name="motor" required>

            <label for="potencia">Potencia (HP)</label>
            <input type="number" id="potencia" name="potencia" required>

            <label for="color">Color</label>
            <input type="text" id="color" name="color" required>

            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" required>

            <div class="button">
                <button type="submit">Registrar</button>
                <button type="reset">Limpiar</button>
            </div>
        </form>
    </div>
</body>
</html>
