<html>
<header>
    <title>CATEGORIAS</title>
</header>
<body>
<h2>CATEGORIAS</h2>

<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Detalle</th>
        <th>Estado</th>
        <th>Productos</th>
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
