
<html>
<header>
    <title>VER PRODUCTO</title>
</header>
<body>
<h2>VER PRODUCTO</h2>
<a href="/products">Volver</a>
<br>
<label>Nombre del producto: {{ $product->name }}</label><br>
<label>Codigo del producto: {{ $product->code }}</label><br>
<label>Categoria: {{ $product->category->name }}</label>
</body>
<form action="{{ route('products.destroy', $product->id) }}" method="POST">
    {{ method_field('DELETE') }}
    @csrf
{{--    <input type="submit" value="ELIMINAR" onclick="MyConfirm()">--}}
    <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar producto')">
</form>

</html>
<script>
    function EliminarRegistro(value){
        action = confirm(value) ? true: event.preventDefault()
    }
</script>
