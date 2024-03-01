<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: .8em;
            background-color: green;
            font-weight: 700;
            color: white;
            border-radius: .5em;
            text-decoration: none;
            margin: 0 auto;
            border: none;
        }
        .btn_eliminar {
            padding: 1.1em;
            cursor: pointer;
        }
        .btn_container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        h2 {
            text-align: center;
            font-size: 4rem;
        }
    </style>
    <script>
        function EliminarRegistro(value){
            action = confirm(value) ? true: event.preventDefault()
        }
    </script>
</head>
<body>
    <header><h2>Información del Producto<br>{{$product->name}}</h2></header>
    <table>
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>{{$product->name}}</td>
            </tr>
            <tr>
                <th>Código</th>
                <td>{{$product->code}}</td>
            </tr>
            <tr>
                <th>Fecha de Expiración</th>
                <td>{{$product->expiration_date}}</td>
            </tr>
            <tr>
                <th>Descripción</th>
                <td>{{$product->description}}</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>{{$product->price}}</td>
            </tr>
            <tr>
                <th>Categoría</th>
                <td>{{$product->category->name}}</td>
            </tr>
        </tbody>
    </table>
    <div class="btn_container">
        <a href="/products" class="btn">Volver</a>
        <form action="{{route('products.destroy', $product->id)}}" method="POST">
            {{method_field('DELETE')}}
            @csrf
            <input class="btn btn_eliminar" type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar producto')">
        </form>
    </div>
    
</body>
</html>