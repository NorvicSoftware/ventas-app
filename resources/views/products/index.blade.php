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
        <h2>Productos</h2>
    </header>
    <table border="1">
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Fecha de vencimiento</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Categoria</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->code}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->expiration_date}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category->name}}</td>
        </tr>
        @endforeach()
    </table>
</body>
</html>