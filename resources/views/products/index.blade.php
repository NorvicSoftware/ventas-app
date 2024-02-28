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
        <h2>Productos</h2>
        <a href="products/create" class="btn_create">Nuevo Producto</a>
    </header>
    <table border="1">
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Fecha de vencimiento</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Categoria</th>
            <th>Accion</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->code}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->expiration_date}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category->name}}</td>
            <td><a href="products/{{$product->id}}/edit">Editar</a></td>
        </tr>
        @endforeach()
    </table>
</body>
</html>