<html>
<header>
    <title>LARAVEL</title>
</header>
<body>
 {{ $slot }}
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        /*background-color: #333;*/
        /*color: #fff;*/
        text-align: center;
        padding: 10px;
    }
    h2 {
        color: #333;
    }
    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f4f4f4;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Estilo para las etiquetas de los campos */
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    /* Estilo para los campos de entrada */
    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    /* Estilo para el botón de envío */
    input[type="submit"] {
        background-color: #4caf50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #eee;
    }

    a.button {
        display: inline-block;
        padding: 10px 20px;
        text-decoration: none;
        background-color: #927f7f; /* Color de fondo */
        color: white; /* Color del texto */
        border: 1px solid #927f7f; /* Borde del botón */
        border-radius: 4px; /* Esquinas redondeadas */
        cursor: pointer;
        transition: background-color 0.3s ease; /* Efecto de transición en el cambio de color de fondo */
    }

    /* Cambio de color de fondo al pasar el mouse sobre el botón */
    a.button:hover {
        background-color: #927f7f;
    }
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        font-size: 16px;
        color: #333;
        cursor: pointer;
    }

    p {
        color: red;
    }
</style>
