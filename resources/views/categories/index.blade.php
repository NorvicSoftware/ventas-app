<html>
<header>
    <title>CATEGORIAS</title>
</header>
<body>
<h2>CATEGORIAS</h2>
<a href="categories/create" class="button">NUEVA CATEGORIA</a>
<nav class="cabecera">
        <a href="categories/create" class="btn_create">Nueva Categoria</a>
        <form action="{{ route('categories.search') }}" method="GET">
            <input class="buscar" type="text" name="search" placeholder="Buscar categorias">
            <button class="buscar btn_buscar" type="submit">Buscar</button>
        </form>
    </nav>

<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Detalle</th>
        <th>Estado</th>
        <th>Productos</th>
        <th>Accion</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->detail }}</td>
            <td>{{ $category->status }}</td>
            <td>
                @foreach($category->products as $product)
                    {{ $product->name }}<br>
                @endforeach
            </td>
            <td>
                <a href="categories/{{$category->id}}/edit">Editar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
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
        background-color: #4caf50; /* Color de fondo */
        color: white; /* Color del texto */
        border: 1px solid #4caf50; /* Borde del botón */
        border-radius: 4px; /* Esquinas redondeadas */
        cursor: pointer;
        transition: background-color 0.3s ease; /* Efecto de transición en el cambio de color de fondo */
    }

    /* Cambio de color de fondo al pasar el mouse sobre el botón */
    a.button:hover {
        background-color: #45a049;
    }
</style>
