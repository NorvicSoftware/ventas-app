<html>
<header>
 <title>REPORTE CATEGORIAS</title>
</header>
<body>
<h2>REPORTE DE CATEGORIAS</h2>

<table class="styled-table">
    <tr>
        <th>Nombre</th>
        <th>Detalle</th>
        <th>Estado</th>
        <th>Productos</th>
    </tr>
    @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->detail }}</td>
            <td>{{ $category->status }}</td>
            <td>
                @foreach($category->products as $product)
                {{ $product->name }}</br>
                @endforeach
            </td>
        </tr>
    @endforeach
</tablev>
</body>
</html>
<style>

    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 18px;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #ddd;
    }

    .styled-table th {
        background-color: #333;
        color: #fff;
    }

    .styled-table tbody tr:hover {
        background-color: #f5f5f5;
        cursor: pointer;
    }

</style>
