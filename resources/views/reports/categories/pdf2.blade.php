<html>
<header>
    <table>{{ $report_name }}</table>
</header>
<h2>REPORTE PRODUCTOS DE: {{ $category_name }}</h2>
<table class="styled-table">
    <tr>
        <th>Producto</th>
        <th>Codigo Producto</th>
        <th>Precio</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->code }}</td>
            <td>{{ $product->price }}</td>
        </tr>
    @endforeach
</table>
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
