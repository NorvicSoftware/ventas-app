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
    </style>
</head>
<body>
    <header>
        <h2>Categorias</h2>
        <a href="categories/create" class="btn_create">Nueva Categoria</a>
    </header>
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