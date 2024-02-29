<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas-App</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;

        }
        .btn_create {
            display: inline-block;
            padding: .8em;
            background-color: green;
            font-weight: 700;
            color: white;
            border-radius: .5em;
            text-decoration: none;
        }
        h2 {
            text-align: center;
            font-size: 4rem;
        }
        .cabecera {
            display: flex;
            justify-content: space-around;
        }
        .buscar {
            display: inline-block;
            padding: 1em;
            border-radius: .5em;
        }
        .btn_buscar {
            background-color: green;
            color: white;
            
        }
    </style>
</head>
<body>
    <header>
        <h2>Categorias</h2>
    </header>
    <nav class="cabecera">
        <a href="categories/create" class="btn_create">Nueva Categoria</a>
        <form action="{{ route('categories.search') }}" method="GET">
            <input class="buscar" type="text" name="search" placeholder="Buscar categorias">
            <button class="buscar btn_buscar" type="submit">Buscar</button>
        </form>
    </nav>
    
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Estado</th>
            <th>Productos</th>
            <th>Accion</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->name}}</td>
            <td>{{$category->detail}}</td>
            <td>{{$category->status}}</td>
            <td>
                @foreach($category->products as $product)
                {{$product->name}}<br>
                @endforeach()
            </td>
            <td>
                <a href="categories/{{$category->id}}/edit">Editar</a>
            </td>
        </tr>
        @endforeach()
    </table>
</body>
</html>