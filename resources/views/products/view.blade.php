
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
</html>
