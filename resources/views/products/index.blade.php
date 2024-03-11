@extends('layout')
@section('content')
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
            <th>Accion</th>
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
                <td>
                    <a href="products/{{ $product->id }}/edit">Editar</a>
                    <a href="products/{{ $product->id }}/view">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

