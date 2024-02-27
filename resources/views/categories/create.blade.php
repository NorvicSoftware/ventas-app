<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

section {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
    padding: 20px;
    width: 80%;
    max-width: 600px;
}

header {
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 10px;
}

h2 {
    font-size: 24px;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 10px;
}

input[type="text"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <section>
        <header>
            <h2>Crear Categoria</h2>
        </header>
        <form action="{{route('categories.store')}}" method="POST">
            @csrf
            <label for="">Nombre: 
                <input type="text" name="name">
            </label>
            <label for="">Detalle: 
                <input type="text" name="detail">
            </label>
            <label for="">Estado: 
                <input type="text" name="status">
            </label>
            <input type="submit" value="Guardar">
        </form>
    </section>
</body>
</html>