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
    </style>
</head>
<body>
    <header>
        <h2>Categorias</h2>
    </header>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Estado</th>
            <th>Productos</th>
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
        </tr>
        @endforeach()
    </table>
</body>
</html>