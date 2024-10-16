<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/wide-awake" rel="stylesheet">
    <title>Final BMW CYSH</title>
</head>
<body>
<style>
    body {
        background-color: black;
        font-family: 'Wide awake', sans-serif;
        color: white;
        margin: 0;
        padding: 0;
    }
    h1 {
        color: #c6ef10;
    }
    #formulario {
        background-color: #e1edf8;
        padding: 20px;
        border-radius: 10px;
        margin: 20px;
    }
    #formulario label {
        display: block;
        margin: 10px;
        color: #333;
    }
    #formulario input[type="text"] {
        width: 50%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid red;
        border-radius: 5px;
        background-color: #fff;
        color: black;
    }
</style>

<script>
    $(document).ready(function() {
        // Función para cargar y mostrar los datos actualizados
        function actualizardatos() {
            // Carga la página que muestra los datos
            $.get("mostrar-datos2.php", function(data) {
                $("#resultados").html(data);
            });
        }
        
        // Llama a la función para cargar los datos al cargar la página
        actualizardatos();

        // Manejo del envío del formulario
        $("#formulario").submit(function(event) {
            event.preventDefault();
            $.post("insertarnuevo.php", $(this).serialize(), function(data) {
                $("#mensaje").html(data);
                actualizardatos(); // Llama a la función para cargar los datos actualizados
                $("#formulario")[0].reset(); // Limpia el formulario
            });
        });
    });
</script>

<h1>Registro de Autos BMW</h1>
<form id="formulario">
    <input type="text" placeholder="Modelo del Auto" id="modelo" name="modelo" required class="input">
    <input type="text" placeholder="Serie del Auto" id="serie" name="serie" required class="input">
    <input type="text" placeholder="Año de Fabricación" id="año" name="año" required class="input">
    <input type="text" placeholder="Tipo de Motor" id="motor" name="motor" required class="input">
    <input type="text" placeholder="Potencia (HP)" id="potencia" name="potencia" required class="input">
    <input type="text" placeholder="Color del Auto" id="color" name="color" required class="input">
    <input type="text" placeholder="Precio del Auto" id="precio" name="precio" required class="input">
    <input type="text" placeholder="Transmisión del Auto" id="transmision" name="transmision" required class="input"><br>
    <input type="submit" value="Agregar Registro">
</form>

<div id="mensaje"></div><!-- Mensaje de éxito o error -->
<div id="resultados"></div><!-- Mostrar datos actualizados -->

</body>
</html>
