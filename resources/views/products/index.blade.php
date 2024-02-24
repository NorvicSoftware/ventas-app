<html>
<header>
    <title>PRODUCTOS</title>
</header>
<body>
<h2>PRODUCTOS</h2>

<table>
    <thead>
    <tr>
        <th>Codigo producto</th>
        <th>Nombre</th>
        <th>Fecha vencimiento</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Categoria</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->code }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->expiration_date }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category->name }}</td>
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
</style>
