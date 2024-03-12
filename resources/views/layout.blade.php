<html>
<header>
    <title>LARAVEL</title>
</header>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/groups">Grupo</a></li>
                <li><a href="/categories">Categorias</a></li>
                <li><a href="/products">Productos</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /*header {*/
    /*    !*background-color: #333;*!*/
    /*    !*color: #fff;*!*/
    /*    text-align: center;*/
    /*    padding: 10px;*/
    /*}*/

    header {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 20px;
    }

    nav ul li a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        font-size: 16px;
    }

    nav ul li a:hover {
        color: #ffd700; /* Cambia el color al pasar el ratón */
    }


    h2 {
        color: #333;
    }
    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #c70c0c;
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
</style>
