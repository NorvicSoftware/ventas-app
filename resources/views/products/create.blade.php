<html>
<header>
    <title>PRODUCTO</title>
</header>
<body>
<h2>CREAR PRODUCTO</h2>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>Codigo:</label>
    <input type="text" name="code" >
    <label>Nombre:</label>
    <input type="text" name="name" >
    <label>Fecha de vencimiento:</label>
    <input type="text" name="expiration_date" >
    <label>Descripcion:</label>
    <input type="text" name="description" >
    <label>Precio:</label>
    <input type="text" name="price">
    <label>Categoria:</label>
    <select id="category_id" name="category_id">
        @foreach($categories as $category)
            <option  value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
{{--    <input type="text" name="category_id">--}}
    <input type="submit" value="Guardar">
</form>

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
    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f4f4f4;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Estilo para las etiquetas de los campos */
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    /* Estilo para los campos de entrada */
    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    /* Estilo para el botón de envío */
    input[type="submit"] {
        background-color: #4caf50;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        font-size: 16px;
        color: #333;
        cursor: pointer;
    }
</style>
