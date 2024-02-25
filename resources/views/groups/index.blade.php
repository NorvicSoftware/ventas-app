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
        <h2>Grupos</h2>
    </header>
    <table border="1" width="50%">
        <tr>
            <th>Tipo</th>
            <th>Clientes</th>
        </tr>
        <tr>
            <td>{{$groups->type}}</td>
            <td>
                @foreach($groups->clients as $client)
                {{$client->name}}<br>
                @endforeach()
            </td>
        </tr>
    </table>
</body>
</html>