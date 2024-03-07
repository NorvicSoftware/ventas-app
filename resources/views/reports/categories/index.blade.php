<x-layout>
    <h2>REPORTES DE CATEGORIAS</h2>

    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Estado</th>
                    <th>Productos</th>
            <th>Accion {{ $a }}</th>
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
                <td>
                    <a href="categories/{{$category->id}}/edit">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</x-layout>
