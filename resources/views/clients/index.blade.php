<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas-App</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;

        }
    </style>
</head>
<body>
    <header>
        <h2>Clientes</h2>
    </header>
    <table border="1">
        <tr>
            <th>C.I.</th>
            <th>Nombre</th>
            <th>Fecha de nacimiento</th>
            <th>Genero</th>
            <th>Grupo</th>
        </tr>
        @foreach($clients as $client)
        <tr>
            <td>{{$client->ci}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->birth_date}}</td>
            <td>{{$client->gender}}</td>
            <td>{{$client->group_id}}</td>
        </tr>
        @endforeach()
    </table>
</body>
</html>